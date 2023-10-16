<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;


    protected $filable=[
        'id','nameproduct','imageproduct','price','size','color','quantity','id_type'
    ];
    public function type()
   {
        return $this->hasOne(Type::class,'id','id_type');

   }

   
   public function addProduct($data) {
  
    DB::table('products')
    ->insert($data);
              
 } 
   public function getAllType(){
            $types = DB::table('types')
            ->select('id','nametype')
            ->get();
            return $types;
   }
   public function getDetail($id)
   {
       $productDetail = DB::table('products')
           ->select( 'nameproduct', 'imageproduct', 'price', 'size', 'color', 'quantity', 'id_type')
           ->where('id', '=', $id )
           ->get();
   
       return $productDetail;
   }
   public function updateProduct($data,$id){
        $product = DB::table('products')
        ->where('id','=',$id)
        ->update($data);
        return $product;
    }
    public function deleteProduct($id){
     
    return DB::table('products')
    ->where('id','=',$id)
    ->delete();
   }

   public function getAllProduct(){
    $allProduct = DB::table('products')
    // ->select('nameproduct','imageproduct','price')
    ->get();
    return $allProduct;
   }

   public function getProductByType($id_type){
    $productByType = DB ::table('products')
    ->select('nameproduct','imageproduct','price','id_type')
    ->where('id_type','=',$id_type)
    ->get();
    return $productByType; 
   }


   public function priceLowToHight(){
    $lowToHight =  DB::select('SELECT id, nameproduct, imageproduct, price FROM products order by price ');
   return $lowToHight;
   
   }

   public function priceHightToLow(){
    $hightToLow =  DB::select('SELECT id, nameproduct, imageproduct, price FROM products order by price desc');
   return $hightToLow;
   }

   public function nameProductA_Z(){
    $a_z =  DB::select('SELECT id,nameproduct, imageproduct, price FROM products order by nameproduct ');
    return $a_z;
   }

   public function nameProductZ_A(){
    $z_a =  DB::select('SELECT id,nameproduct, imageproduct, price FROM products order by nameproduct desc');
    return $z_a;
   }
   


}

   

