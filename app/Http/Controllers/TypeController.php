<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class TypeController extends Controller{

    protected $type;
    public function __construct(Type $type){
        $this->type = $type;
    }

    public function add(){
        return view('type.addtype');
    }
   
    public function postAdd(Request $request){
        $request->validate([
            'nametype'=>'required|min:3',
           
        ],[
            'nametype.required'=>'name k đc để trống',
            'nametype.min'=>' nametype phải có từ 3 kí tự',
            
        ]);
        $data =[
             
            'nametype'=>$request->input('nametype'),
            'created_at' => date('Y-m-d H:i:s')

           
        ];
       
        $this->type->addType($data);

        return redirect()->route('type.add')->with('success','Thêm type sản phẩm thành công');
    }
    
    public function getEdit( Request $request,$id=0){
        
        if(!empty($id)){
            $typeDetail = $this->type->getTypeByID($id);
           if(!empty($typeDetail[0])){
            $request->session()->put('id',$id);
            $typeDetail = $typeDetail[0];
          

           }
           else{
                     return redirect()->route('type.add')->with('error','type sản phẩm không tồn tại');

           }

        }else{
            return redirect()->route('type.add')->with('error','liên kêt không tồn tại');
        }
        return view('type.edittype',compact('typeDetail'));

     }
     public function postEdit(Request $request){
        $id = session('id');
        $request->validate([
            'nametype'=>'required|min:3',
        ],[
            'nametype.required'=>'nametype k đc để trống',
            'nametype.min'=>' nametype phải có từ 3 kí tự',
           
        ]);
        $dataUpdate =[
             
            'nametype'=>$request->nametype,
            'updated_at' => date('Y-m-d H:i:s')
            
        ];
       
        $this->type->updateType($dataUpdate,$id);
        return redirect()->route('type.edit',['id'=>$id])->with('success','Cập nhật type sản phẩm thành công');
       
     }
     public function delete($id){
        if(!empty($id)){
            $typeDetail = $this->type->getTypeByID($id);
           if(!empty($typeDetail[0])){
            $delete = $this->type->deleteType($id);
            if($delete){
                $success = "Xóa type sản phẩm thành công ";

            }
            else{
                $error = "Xóa type sản phẩm thất bại";
            }
           }else{
            $error= 'type sản phẩm không tồn tại';
           }
           
        }else{
           $error= 'type sản phẩm không tồn tại';
        }
        return redirect()->route('type.add')->with('success','Xóa type sản phẩm thành công ');
     }

    

}

