<?php
namespace App\Repositories;

use App\Enums\BidStepEnum;
use App\Enums\CurrencyIconsEnum;
use App\Models\Brand;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use App\Enums\ProductType;
use App\Models\UserDetail;
use Illuminate\Support\Str;
use App\Enums\LocalShipping;
use App\Enums\Return_Policy;
use App\Enums\ProductCondition;
use App\Enums\InternationalShipping;
use App\Models\Bid;
use App\Models\Cart;
use App\Models\Cart_Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class ProductRepository{

    protected $product;

    public function __construct( Product $product ) {
        $this->product = $product;
    }

    public function getData($id = null)
    {
        if($id != NULL){
           
        }
        return ['types'=> ProductType::getInstances(),
                'categories' => Category::select('id','title')->where('status',1)->orderBy('order','asc')->get(),
                'conditions' => ProductCondition::asSelectArray(), 
                'brands' => Brand::select('id','title')->orderBy('order','asc')->get(),   
                'return_policy' => Return_Policy::asSelectArray(),
                'bidding_step' => $this->biddingSteps(),
                "product" => $id != NULL ?  Product::where('id',$id)->with(['categories','bid','images'])->first() : null,
                ];
    }

    public function biddingSteps()
    {
        $steps = array('1','5','10','20','50','100');
        return $steps;
    }

    public function store($data,$images,$user_id)
    {
        $product = new Product();
        $product->sku = 'PRO_' . Str::random(5);
        $product->title = $data['title'];
        $product->type  = $data['type'];
        $product->description = $data['description'];
        $product->brand = $data['brand'];
        $product->price = $data['price'];
        $product->condition = $data['condition'];
        $product->return_policy = $data['return_policy'];
        $product->best_offer = $data['best_offer'];
        $product->best_offer_price = $data['minimum_offer'];
        $product->doll_size  = $data['doll_size'];
        $product->doll_gender = $data['doll_gender'];
        $product->featured_refinements = $data['featured_refinements'];
        $product->quantity = $data['quantity'];
        $product->details  = $data['details'];
        $product->modified_item = $data['modified_item'];
        $product->upc = $data['upc'];
        $product->domestic_product = $data['domestic_product'];
        $product->draft =  $data['draft'];
        $product->user_id = $user_id;
        $product->status  = 1;
        $product->image   = 'waiting';
        if($product->save()){

            if($data->hasFile('image')){
                $fileName = time() . '.'. $data->file('image')[0]->getClientOriginalExtension();
                $data->image[0]->storeAs('public/products/'.$product->id.'/',$fileName);
                $product->image = 'public/products/'.$product->id.'/'.$fileName;
                $product->save();
            }

            $product->categories()->attach($data['category']);
            if($data['type'] == 1){
                $this->MakeBidding($product->id,$data['bidding_from'],$data['bidding_to'],$data['bid_minimum_price'],$data['step']);
            }

        if($images){
            foreach($images as $file){
                $fileName = Str::random(10) . '.'. $file->getClientOriginalExtension();
                $file->storeAs('public/products/'.$product->id.'/',$fileName);
                $path = 'public/products/'.$product->id.'/'.$fileName;
                $image = new Image(['url' => $path]);
                $product->images()->save($image);  
            }
        }
        return ['response' => true,
                'product_id' => $product->id
               ];

        }
        return ['response' => false];

    }

    private function MakeBidding($product_id, $from, $to , $bid_minimum_price,$step)
    {
        $bid = Bid::create([
            'product_id' => $product_id,
            'from' => $from,
            'to' => $to,
            'last_price' => 0,
            'before_last_price' => 0,
            'minimum_price' => $bid_minimum_price,
            'step' => $step,
            'status' => 1,
        ]);
    }

    public function checkUserProduct($user_id, $product_id)
    {
        $product = Product::where('user_id',$user_id)->where('id',$product_id)->first();
        if($product){
            return true;
        }
        return false;
    }

    public function update($id, $data)
    {
        $product = Product::find($id);
        $product->title = $data['title'];
        $product->type  = $data['type'];
        $product->description = $data['description'];
        $product->brand = $data['brand'];
        $product->price = $data['price'];
        $product->condition = $data['condition'];
        $product->return_policy = $data['return_policy'];
        $product->best_offer = $data['best_offer'];
        $product->best_offer_price = $data['minimum_offer'];
        $product->doll_size  = $data['doll_size'];
        $product->doll_gender = $data['doll_gender'];
        $product->featured_refinements = $data['featured_refinements'];
        $product->quantity = $data['quantity'];
        $product->modified_item = $data['modified_item'];
        $product->upc = $data['upc'];
        $product->domestic_product = $data['domestic_product'];
        $product->draft =  $data['draft'];
        $product->status  = 1;
        if($product->save()){
            $category = Category::select('id')->where('title',$data['category'])->first();
            $product->categories()->sync($category);
            if($data['type'] == 1){
                // $this->MakeBidding($product->id,$data['bidding_from'],$data['bidding_to'],$data['bid_minimum_price'],$data['step']);
            }
            // check if there are extra images
        if(is_object($data['image'][0])){
            $product->images()->each(function($image){
                if (Storage::exists('public/products/'.$image->imageable_id)) {
                    Storage::delete($image->url);
                }
                $image->delete();
            });
         
            foreach($data['image'] as $file){
                $fileName = Str::random(10) . '.'. $file->getClientOriginalExtension();
                $file->storeAs('public/products/'.$product->id.'/',$fileName);
                $path = 'public/products/'.$product->id.'/'.$fileName;
                $image = new Image(['url' => $path]);
                $product->images()->save($image);  
            }
        }
        
        if(is_object($data['featured_image'][0])){
                Storage::delete($product->image);
                $featuredImage =  $data['featured_image'][0];
                $fileName = time() . '.'. $featuredImage->getClientOriginalExtension();
                $featuredImage->storeAs('public/products/'.$product->id.'/',$fileName);
                $product->image = 'public/products/'.$product->id.'/'.$fileName;
            
            $product->save();
        }
        return ['response' => true,
                'product_id' => $product->id
               ];

        }
        return ['response' => false];

    }

    public function step_three($id,$draft,$data)
    {
        $product = Product::find($id);
        $product->draft = $draft;
        if($draft == 1){
            $product->status = 0;
        }else{
            $product->status = 1;
        }
        $product->save();
        if($product->shipping){
            $shipping = $product->shipping()->update($data);
        }else{
            $shipping = $product->shipping()->insert($data);
        }
        if($shipping){
            return true;
        }else{
            return false;
        }
    }

    public function getProductShipping($user_id,$product_id)
    {
        $product = Product::where('id',$product_id)->where('user_id',$user_id)->with('shipping')->first();
        $userDetails = UserDetail::where('user_id',$user_id)->first();
        return [
            'shipping' => $product->shipping,
            'localShipping' => LocalShipping::asSelectArray(),
            'worldwide' => InternationalShipping::asSelectArray(),
            'userDetails' => $userDetails,
            'currencyIcon' => CurrencyIconsEnum::getValue($userDetails->currency),
        ];
    }

    public function getUserProducts($id)
    {
        return Product::where('user_id',$id)
                            ->orderBy('created_at','desc')
                            ->paginate(10);
    }


    public function getUserDraftedProducts($id)
    {
        return Product::where('user_id',$id)
                            ->where('draft',1)
                            ->orderBy('created_at','desc')
                            ->paginate(10);
    }
    
    public function getProduct($user_id,$id)
    {
        $product = Product::where('id',$id)->with(['user','shipping','images','bid'])->first();
        $wishlist = $product->wishlist()->pluck('user_id')->toArray();
        $product->wishlistCount = count($product->wishlist);
        $product->userAddedItemToWishlist = in_array($user_id,$wishlist);
        $product->user_details = $product->user->user_details;
        $product->unsetRelation('wishlist');
        if($product->bid != null){
            return ['product' => $product,
            'steps' => $this->biddingStepsForProduct($product->bid->step),
        
        ];
        
        }else{
            return ['product' => $product,
                    
        ];
        }
   
      
    }

    protected function biddingStepsForProduct($step)
    {
            $steps = $this->biddingSteps();
        
            $lower_limit = $step;
            $array = array_filter(
                $steps,
                function ($value) use ($lower_limit) {
                    return ($value >= $lower_limit);
                }
            );
        return  array_slice($array, 0, 3);
    }

    public function randomProducts()
    {
        return Product::where('status',1)->where('draft',0)->take(4)->get();
    }

    public function changeStatus($user_id,$product_id)
    {
        $product = Product::where('user_id',$user_id)->where('id',$product_id)->first();
        $checkIfProduuctIsBiddingOrInCart = $this->checkIfProduuctIsBiddingOrInCart($user_id,$product_id);
        if(!$checkIfProduuctIsBiddingOrInCart){
            $product->status = $product->status == 1 ? 0 : 1;
            if($product->status == 0){
                $product->draft = 1;
            }
            if($product->save()){
                return ['response' => true, 
                        'status' => $product->status];
            }
        }
        return ['response' => false];
    }

    public function checkIfProduuctIsBiddingOrInCart($user_id, $product_id)
    {
        $product = Product::where('id',$product_id)->where('user_id',$user_id)->first();
        $checkIfProductInCart = Cart_Product::where('product_id',$product_id)->first();
        $checkIfProductIsBidding  = false;
        if($product->type == 1){
            $bidActive = Bid::select('last_price')->where('product_id',$product_id)->first();
            if($bidActive->last_price == 0){
                $checkIfProductIsBidding = true;
            }
        }
        if($checkIfProductInCart || $checkIfProductIsBidding){
            return true;
        }
        return false;
    }

    public function AddToWishlist($user_id,$product_id)
    {
        
       $product = Product::find($product_id);
       $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$product_id)->first();
       if($product){
           if(!$wishlist){
                $wishlist = Wishlist::create([
                    'product_id' => $product_id,
                    'user_id' => $user_id,
                    'type' => $product->type,
                ]);
                return ['status' => 'added','count' => $this->productWishlistCount($product_id)];
           }else{
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$product_id)->delete();
                return ['status' => 'not_added', 'count' => $this->productWishlistCount($product_id)];
           }
       }
     
      return false;
    }

    public function productWishlistCount($product_id)
    {
       return Wishlist::where('product_id',$product_id)->count();
    }


    public function getUserProductActive($user_id)
    {
        return Product::where([['user_id',$user_id] , ['status',1]])->paginate(10);

    }

    // public function getAllProductDataToUpdate($user_id,$product_id)
    // {
    //     $product = Product::where('id',$product_id)->where('user_id',$user_id)->first();
    //     if($product){
    //         return ['product' => $product];
    //     }else{
    //         return false;
    //     }
    // }

    public function deleteProduct($user_id,$product_id)
    {
        if(!$this->checkIfProduuctIsBiddingOrInCart($user_id,$product_id)){
            if (Storage::exists('public/products/'.$product_id)) {
                Storage::deleteDirectory('public/products/'.$product_id);
            }
            $product = Product::where('id',$product_id)->where('user_id',$user_id)->first();
            $product->images()->each(function($image){
                if (Storage::exists('public/products/'.$image->imageable_id)) {
                    Storage::delete($image->url);
                }
                $image->delete();
            });
            if($product->delete()){
                return true;
            }

        }
        return false;
    }
}