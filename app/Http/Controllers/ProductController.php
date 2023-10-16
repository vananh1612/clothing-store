<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use   \Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $products;
    public function __construct(Product $product){
        $this->products = $product;
    }
    public function add(){
        $types = $this->products->getAllType();
        return view('product.addproduct')->with('types',$types);
    }
    public function postAdd(Request $request){
        $request->validate([
            'nameproduct'=>'required|min:5',
            'imageproduct'=>'required',
            'price'=>'required',
            'size'=>'required',
            'color'=>'required',
            'quantity'=>'required',
            'id_type'=>'required',
        ],[
            'nameproduct.required'=>'tên sản phẩm k đc để trống',
            'nameproduct.min'=>' tên sản phẩm phải có từ 5 kí tự',
            'imageproduct.required'=>'link ảnh k đc để trống',
            'price.required'=>'giá sp k đc để trống',
            'size.required'=>'size sp k đc để trống',
            'color.required'=>'màu sắc sp k đc để trống',
            'quantity.required'=>'số lượng sp k đc để trống',
            'id_type.required'=>'Id type sp k đc để trống',
        ]);
        
        $data =[
             
            'nameproduct'=>$request->input('nameproduct'),
            'imageproduct'=>$request->input('imageproduct'),
            'price'=>$request->input('price'),
            'size'=>$request->input('size'),
            'color'=>$request->input('color'),
            'quantity'=>$request->input('quantity'),
            'id_type'=>$request->input('id_type'),
            'created_at' => date('Y-m-d H:i:s')
            
        ];
       
        $this->products->addProduct($data);
        return redirect()->route('addproduct')->with('success','Thêm sản phẩm thành công');
    }
     public function getEdit(Request $request,$id=0){ 
        if(!empty($id)){
            $productDetail = $this->products->getDetail($id);
           if(!empty($productDetail[0])){
            $request->session()->put('id',$id);
            $types = $this->products->getAllType();
            return view('product.editproduct',[
                'productDetail'=>$productDetail,
                'types'=>$types
            ]);
    }  
  }
     }
     public function postEdit(Request $request,Product $productDetail){
        $id = session('id');
        $request->validate([
            'nameproduct'=>'required|min:5',
            'imageproduct'=>'required',
            'price'=>'required',
            'size'=>'required',
            'color'=>'required',
            'quantity'=>'required',
            
        ],[
            'nameproduct.required'=>'tên sản phẩm k đc để trống',
            'nameproduct.min'=>' tên sản phẩm phải có từ 5 kí tự',
            'imageproduct.required'=>'link ảnh k đc để trống',
            'price.required'=>'giá sp k đc để trống',
            'size.required'=>'size sp k đc để trống',
            'color.required'=>'màu sắc sp k đc để trống',
            'quantity.required'=>'số lượng sp k đc để trống',
          
        ]);
        $dataUpdate =[
            'nameproduct'=>$request->input('nameproduct'),
            'imageproduct'=>$request->input('imageproduct'),
            'price'=>$request->input('price'),
            'size'=>$request->input('size'),
            'color'=>$request->input('color'),
            'quantity'=>$request->input('quantity'),
            'id_type'=>$request->input('id_type'),
            'updated_at' => date('Y-m-d H:i:s')
            
        ];
       
        $this->products->updateProduct($dataUpdate,$id);
        return redirect()->route('product.edit',['id'=>$id])->with('success','Cập nhật sản phẩm thành công');
       
    }
     public function delete($id){

            $productDetail = $this->products->getDetail($id);
            $delete = $this->products->deleteProduct($id);
            if($delete){
                $success = "Xóa sản phẩm thành công ";

            }
            else{
                $error = "Xóa sản phẩm thất bại";
            }  
        return redirect()->route('addproduct')->with('success','Xóa sản phẩm thành công ');
    }

    public function getAllProduct(){
        $allProduct = $this->products->getAllProduct();
        return view('display.store.store_product.cuahang', [
            'products'=>$allProduct,
        ] );
    }

   
    
    public function getproductByType($id_type){
        $types = $this->products->getAllType();
        $productByType = $this->products->getProductByType($id_type);
        return view('display.store.store_product.sanpham', [
            'productByType'=>$productByType,
            'types'=>$types
        ] );
    }

   
    public function getPriceLowToHight(){
        $priceLowToHight = $this->products->priceLowToHight();
        return view('display.store.store_product.cuahang', [
            'products'=>$priceLowToHight]);
        
    }
    public function getPriceHightToLow(){
        $priceHightToLow = $this->products->priceHightToLow();
        return view('display.store.store_product.cuahang',['products'=>$priceHightToLow]);
    }

    public function getNameA_Z(){
        $nameA_Z = $this->products->nameProductA_Z();
        return view('display.store.store_product.cuahang', [
            'products'=>$nameA_Z]);
         
    }
    public function getNameZ_A(){
        $nameZ_A = $this->products->nameProductZ_A();
        return view('display.store.store_product.cuahang',['products'=>$nameZ_A]);
    }

}