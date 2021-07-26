<?php
namespace App\Repositories;

use App\Models\Faq;
use App\Models\Image;

class FaqRepository{
    protected $faq;
    public function __construct(Faq $faq) {
        $this->faq = $faq;
    }

    public function store($data)
    {
        $faq = $this->faq->create([
            'title' => $data['title'],
            'body' => $data['body'],
            'order' => $data['order'],
        ]);
            $fileName = time() . '.'. request()->file('image')->getClientOriginalExtension();
            $data['image']->storeAs('public/faqs/',$fileName);
            $path = 'public/faqs/'.$fileName;
            $image = new Image(['url' => $path]);
            $faq->image()->save($image);
            $faqData = [
                'id' => $faq->id,
                'title' => $faq->title,
                'order' => $faq->order,
                'status' => $faq->status,
            ];
        return $faq == true ? $faqData : false;
    }

    public function changeStatus($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->status = $faq->status == 0 ? 1 : 0;
        if($faq->save());
            return ['response' => true, 
                    'status' => $faq->status];
        return false;
    }

    public function getAllFaqs()
    {
        return Faq::where('status',1)->with('image')->orderBy('order','asc')->get();
    }
}