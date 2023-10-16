<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use   \Illuminate\Support\Facades\DB;

class ClientControlle extends Controller
{
    protected $client;
    public function __construct(Client $client){
        $this->client = $client;
    }
   

    public function add(){
        $title = "thêm mới";
        return view('type.client.add',compact('title'));
    }

    public function postAdd(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'email'=>'required|email|unique:clients'
        ],[
            'name.required'=>'name k đc để trống',
            'name.min'=>' name phải có từ 5 kí tự',
            'email.required'=>'email k đc để trống',
            'email.email'=>'email phải đúng định dạng',
            'email.unique'=> 'email đã tồn tại'
        ]);
        $data =[
             
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'created_at' => date('Y-m-d H:i:s')
            
        ];
       
        $this->client->addClient($data);

        return redirect()->route('addclient')->with('success','Them nguoi dung thanh cong');
    }


     public function getEdit( Request $request,$id=0){
        $title = "edit mới";
        if(!empty($id)){
            $clientDetail = $this->client->getDetail($id);
           if(!empty($clientDetail[0])){
            $request->session()->put('id',$id);
            $clientDetail = $clientDetail[0];


           }else{
                     return redirect()->route('addclient')->with('error','người dùng không tồn tại');
           }

        }else{
            return redirect()->route('client.index')->with('error','liên kêt không tồn tại');
        }
        return view('type.client.edit',compact('title','clientDetail'));

     }
     public function postEdit(Request $request){
        $id = session('id');
        $request->validate([
            'name'=>'required|min:5',
            'email'=>'required|email|unique:clients,email,'.$id
        ],[
            'name.required'=>'name k đc để trống',
            'name.min'=>' name phải có từ 5 kí tự',
            'email.required'=>'email k đc để trống',
            'email.email'=>'email phải đúng định dạng',
            'email,unique'=>'email đã tồn tại'
        ]);
        $dataUpdate =[
             
            'name'=>$request->name,
            'email'=>$request->email,
            'updated_at' => date('Y-m-d H:i:s')
            
        ];
       
        $this->client->updateClient($dataUpdate,$id);
        return redirect()->route('client.edit',['id'=>$id])->with('success','Cập nhật người dùng thành công');
       
     }
     public function delete($id){
        if(!empty($id)){
            $clientDetail = $this->client->getDetail($id);
           if(!empty($clientDetail[0])){
            $delete = $this->client->deleteClient($id);
            if($delete){
                $success = "Xóa người dùng thành công ";

            }
            else{
                $error = "Xóa người dùng thất bại";
            }
           }else{
            $error= 'người  dùng không tồn tại';
           }
           
        }else{
           $error= 'người  dùng không tồn tại';
        }
        return redirect()->route('client.index')->with('success','Xóa người dùng thành công ');
     }

    

}

