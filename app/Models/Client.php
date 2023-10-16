<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    // public function getAllClient(){
    //     $clients = DB::table('SELECT * FROM clients');
    //     // $clients = DB::table($this->table)->get();
    //     return $clients;
    // }

    public function addClient($data){

        DB::insert('INSERT INTO clients (name,email,created_at) values(?,?,?)', [$data['name'], $data['email'],$data['created_at']]);

    }
    public function getDetail($id){
       return  DB::select('SELECT * FROM '.$this->table.' WHERE id=? ',[$id]);
    }
    public function updateClient($data , $id){
        $client = DB::table($this->table)
        ->where('id','=',$id)
        ->update($data);
        return $client;
    }

    public function deleteClient($id){
        return DB::delete('DELETE FROM '.$this->table.' WHERE id =? ',[$id]);
    }
    
    public function learnQueryBuilder(){
       $list= DB::table($this->table)
       ->select('id','name','email','created_at')
       ->get();    
       //thay dấu > < = , khác <> !=, and là 2 điều kiện where
       
       return $list;
      //   dd($list);
    //    //lấy một bản ghi đầu tiên (lấy thông tin chi tiết)
    //    $first = DB::table($this->table)->first();
    //    dd($first);
    }
}
