<?php
namespace App\Repositories;

use App\Enums\ProductCondition;
use App\Enums\ProductType;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductRepository{

    protected $product;

    public function __construct( Product $product ) {
        $this->product = $product;
    }

    public function getData()
    {
        return ['types'=> ProductType::getInstances(),
                'categories' => Category::select('id','title')->where('status',1)->orderBy('order','asc')->get(),
                'conditions' => ProductCondition::getInstances(),    
            ];
        
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
        $product->draft =  $data['draft'];
        $product->user_id = $user_id;
        $product->status  = 0;
        if($data->hasFile('image')){
            $fileName = time() . '.'. $data->file('image')[0]->getClientOriginalExtension();
            $data->image[0]->storeAs('public/products/'.$data['title'].'/',$fileName);
            $product->image = 'public/products/'.$data['title'].'/'.$fileName;
        }
        if($product->save()){
            $product->categories()->attach($data['category']);
        
        if($images){
            foreach($images as $file){
                $fileName = Str::random(10) . '.'. $file->getClientOriginalExtension();
                $file->storeAs('public/products/'.$product->title.'/',$fileName);
                $path = 'public/products/'.$product->title.'/'.$fileName;
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

    public function checkUserProduct($user_id, $product_id)
    {
        $product = Product::where('user_id',$user_id)->where('id',$product_id)->first();
        if($product){
            return true;
        }
        return false;
    }

    public function step_two($data)
    {
        $product = Product::find($data['id']);
        $product->doll_size  = $data['doll_size'];
        $product->doll_gender = $data['doll_gender'];
        $product->featured_refinements = $data['featured_refinements'];
        $product->quantity = $data['quantity'];
        $product->details  = $data['details'];
        $product->modified_item = $data['modified_item'];
        $product->draft =  $data['draft'];
        $product->upc = $data['upc'];
        $product->status = 0;
        $product->domestic_product = $data['domestic_product'];

        if($product->save()){
            return true;
        }
        return false;
    }



    public function getUserProducts($id)
    {
        return Product::where('user_id',$id)
                            ->orderBy('created_at','desc')
                            ->paginate(3);
    }


    public function getUserDraftedProducts($id)
    {
        return Product::where('user_id',$id)
                            ->where('draft',1)
                            ->orderBy('created_at','desc')
                            ->get();
    }
    
    public function getProduct($id)
    {
        $product = Product::where('id',$id)->with('user')->first();
        $images  = $product->images;
        return ['product' => $product,'images' => $images];
    }

    public function randomProducts()
    {
        return Product::where('status',1)->where('draft',0)->take(4)->get();
    }

}