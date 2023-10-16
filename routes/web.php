<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientControlle;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () { return view('welcome');})->name('home');

Route::prefix('/')->group(function(){
    Route::get('/login',[UserController::class,'getLogin'])->name('login');
    Route::get('/register',[UserController::class,'getRegister'])->name('register');
    Route::post('/login',[UserController::class,'postLogin'])->name('login');
    Route::post('/register',[UserController::class,'postRegister'])->name('register');
});

Route::prefix('/admin')->group(function(){

    Route::get('/adminhome',function(){ return view('admin.main'); })->name('homeadmin');
    
    Route::get('/list', [AdminController::class,'index'])->name('admin.list');

});
//hiển thị menu display
Route::prefix('/page')->group(function(){



   Route::get('/baiviet',function(){return view('display.store.menu_store.baiviet');})->name('baiviet');

   Route::get('/giamgia',function(){return view('display.store.menu_store.giamgia');})->name('giamgia');

   Route::get('/lienhe',function(){return view('display.store.menu_store.lienhe');})->name('lienhe');

   // Route::get('/gioithieu', [BannerController::class, 'getAllBanner'])->name('gioithieu');




   Route::prefix('/cuahang')->group(function(){
      Route::get('/',[ProductController::class,'getAllProduct']);
      Route::get('/pricelowtohight',[ProductController::class,'getPriceLowToHight'])->name('priceLowToHight');
      Route::get('/pricehighttolow',[ProductController::class,'getPriceHightToLow'])->name('priceHightToLow');
      Route::get('/name_a_z',[ProductController::class,'getNameA_Z'])->name('name_a_z');
      Route::get('/name_z_a',[ProductController::class,'getNameZ_A'])->name('name_z_a');
      Route::get('/{id}',[ProductController::class,'getproductByType'])->name('productByType');

     

      });
   
   
   
   });
       


//hiển thị bài viết  
Route::prefix('/post')->group(function(){
   Route::get('/basic',function(){ return view('display.store.posts.basic');})->name('basic');
   Route::get('/classic',function(){ return view('display.store.posts.classic'); })->name('classic');
   Route::get('/street',function(){return view('display.store.posts.street');})->name('street'); 
   Route::get('/y2k',function(){return view('display.store.posts.y2k');})->name('y2k');
});

Route::prefix('/types')->group(function(){
   Route::get('/add',[TypeController::class,'add'])->name('type.add');
   Route::post('/add',[TypeController::class,'postAdd'])->name('type.post-add');
   Route::get('/edit/{id}',[TypeController::class,'getEdit'])->name('type.edit');
   Route::post('/update',[TypeController::class,'postEdit'])->name('type.post-edit');
   Route::get('/delete/{id}',[TypeController::class,'delete'])->name('type.delete');
    
});

//
Route::prefix('/clients')->group(function(){
   Route::get('/add',[ClientControlle::class,'add'])->name('addclient');
   Route::post('/add',[ClientControlle::class,'postAdd'])->name('client.post-add');
   Route::get('/edit/{id}',[ClientControlle::class,'getEdit'])->name('client.edit');
   Route::post('/update',[ClientControlle::class,'postEdit'])->name('client.post-edit');
   Route::get('/delete/{id}',[ClientControlle::class,'delete'])->name('client.delete');

   
});
    

Route::prefix('/products')->group(function(){
   Route::get('/add',[ProductController::class,'add'])->name('addproduct');
   Route::post('/add',[ProductController::class,'postAdd'])->name('product.post-add');
   Route::get('/edit/{id}',[ProductController::class,'getEdit'])->name('product.edit');
   Route::post('/update',[ProductController::class,'postEdit'])->name('product.post-edit');
   Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
});

Route::prefix('/cskh')->group(function(){
   Route::get('/doitravabaohanh',function(){ return view('display.store.customer_care.doitravabaohanh');})->name('doitravabaohanh');

   Route::get('/muahang',function(){ return view('display.store.customer_care.muahang'); })->name('muahang');
  
   Route::get('/muavabaohanh',function(){return view('display.store.customer_care.muavabaohanh');})->name('muavabaohanh');
  
   Route::get('/thanhvien',function(){return view('display.store.customer_care.thanhvien');})->name('thanhvien');

   Route::get('/vanchuyen',function(){return view('display.store.customer_care.vanchuyen');})->name('vanchuyen');

  
});


