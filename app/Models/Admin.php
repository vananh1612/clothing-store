<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $table1 = 'clients';

    public function getAllProduct(){
     $products = DB::table($this->table)
     ->select('id','nameproduct','imageproduct','price','size','color','quantity','id_type')
     ->get();
 
     return $products;
 
    }

    public function getAllClient(){
       
        $clients= DB::table($this->table1)
        ->select('id','name','email','created_at')->get();
        return $clients;
        
    }
       
}
