<?php
namespace App\Repositories;

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
                'categories' => Category::select('id','title')->where('status',1)->orderBy('order','asc')->get()];
        
    }

    public function store($data,$images,$user_id)
    {
        $product = new Product();
        $product->sku = $data['sku'];
        $product->title = $data['title'];
        $product->type  = $data['type'];
        $product->description = $data['description'];
        $product->details = $data['details'];
        $product->brand = $data['brand'];
        $product->price = $data['price'];
        $product->condition = $data['condition'];
        $product->return_policy = $data['return_policy'];
        $product->best_offer = $data['best_offer'];
        $product->draft =  $data['draft'];
        $product->user_id = $user_id;
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
        return ['response' => true];

        }
        return ['response' => false];

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

}