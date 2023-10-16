<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    use HasFactory;

    protected $filltable=['id','name','imagebanner'];
    public function getAllBanner(){ 
        $banner = DB::table('banner')
        ->get();
      
        return $banner;
    }
}
