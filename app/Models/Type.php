<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';

    public function getAllType(){
        $types = DB::table($this->table)
        ->select('id','nametype')
        ->get();
    
        return $types;
    
   }
   public function addType($data){
    DB::table($this->table)
    ->insert($data);

   }
   
   public function getTypeByID($id){
    $typeDetail = DB::table($this -> table)
    ->select('nametype')
    ->where('id','=',[$id])->get();
    return $typeDetail;
   }

   public function updateType ($data,$id){
     $type = DB::table($this->table)
     ->where('id','=',$id)
     ->update($data);
     return $type;
   }

   public function deleteType($id)
   {
    return DB::delete('DELETE FROM '.$this->table.'WHERE id = ? '.[$id]);
   }
}

