<?php
namespace App\Repositories;

use App\Models\About;
use App\Models\Image;

class AboutRepository{
    protected $about;
    public function __construct(About $about) {
        $this->about = $about;
    }

    public function store($data)
    {
        $store = $this->about->create([
            'title' => $data['title'],
            'body' => $data['body'],
            'order' => $data['order'],
        ]);
        $fileName = time() . '.'. request()->file('image')->getClientOriginalExtension();
        $data['image']->storeAs('public/about/',$fileName);
        $path = 'public/about/'.$fileName;
        $image = new Image(['url' => $path]);
        $store->image()->save($image);
        return $store == true ? $store : false;
    }

    public function changeStatus($id)
    {
        $about = About::findOrFail($id);
        $about->status = $about->status == 0 ? 1 : 0;
        if($about->save());
            return ['response' => true, 
                    'status' => $about->status];
        return false;
    }

    public function getAllAbout()
    {
        return About::where('status',1)->with('image')->orderBy('order','asc')->get();
    }
}