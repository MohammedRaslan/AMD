<?php
namespace App\Repositories;
use App\Models\Category;
// use App\Models\Product;


class CategoryRepository{
    
    protected $category;

    public function __construct(Category $category) {
        $this->category = $category;
    }

    public function store($data)
    {
        return Category::create([
            'title' => $data['title'],
            'order' => $data['order'],
            'status' => 1,
        ]);
    }

    public function changeStatus($id)
    {
        $category = Category::find($id);
        $category->status = $category->status == 1 ? 0 :1;
        if($category->save()){
            return ['status' => $category->status];
        }
        return false;
    }

    public function get()
    { 
        return Category::select('id','title')->where('status',1)->with('products')->get();
    }

    public function categoryProducts($id)
    {
        $category = Category::where('id',$id)->with('products')->first();
        return $category->products()->where('status',1)->where('draft',0)->get();
    }


}
