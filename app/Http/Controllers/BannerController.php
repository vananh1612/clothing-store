<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $banner;
    public function __construct(Banner $banner){
        $this->banner = $banner;
    }
    public function getAllBanner(){
        // $banners= $this->banner->getAllBanner();
        return view('display.store.menu_store.gioithieu',[
            'banners' => $this->banner->getAllBanner()
        ]);
    }
}
