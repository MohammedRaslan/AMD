<?php
namespace App\Repositories;

use App\Models\Cms;

class CmsRepository{
    protected $cms;
    public function __construct(Cms $cms) {
        $this->cms = $cms;
    }

    public function store($data)
    {
        $createOrUpdate = Cms::updateOrCreate(
            ['type' => $data['type']],
            ['title' => $data['title'],'body' => $data['body'],'type'=> $data['type']]
        );
        return $createOrUpdate;
    }

    public function getAllCms()
    {
        $about = Cms::where('type','about')->first();
        $policy = Cms::where('type','policy')->first();
        $terms = Cms::where('type','terms')->first();
        return [
            'about' => $about,
            'policy' => $policy,
            'terms' => $terms,
        ];
    }

    public function getSingleCms($type)
    {
        return Cms::where('type',$type)->first();
    }
}