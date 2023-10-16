<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $products;
    public function __construct(Product $product){
        $this->products = $product;
    }
    public function getAllProduct(){
        $allProduct = $this->products->getAllProduct();
        return view('display.store.menu_store.giamgia', [
            'products'=>$allProduct,
        ] );
    }
}
