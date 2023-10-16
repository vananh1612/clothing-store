<div>
      <div style="padding: 1% 3% ">
        <form>
            @csrf
           <p> Danh sách sản phẩm <a href="{{ route('productadd') }}"><button class="btn btn-primary">Thêm Sản Phẩm</button></a>
      </p>
        <br>
            <table class="table table-bordered" >
                  <thead>
                        <tr class="tdhead">
                            <th>STT</th>
                            <th style="width: 10%">Tên sp</th>
                            <th style="width: 5%" >Ảnh</th>
                            <th style="width: 1%">Giá</th>
                            <th style="width: 1%">Size</th>
                            <th style="width: 1%">Màu </th>
                            <th style="width: 1%">SL</th>
                            <th style="width: 1%">ID type</th>
                            <th style="width: 1%">Sửa</th>
                            <th style="width: 1%">Xóa</th>
                        </tr>
                  </thead>
                  <tbody>
                     @if (! empty($products))
                     @foreach ( $products as $key => $item)
                        <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $item->nameproduct }}</td>
                              <td>{{ $item->imageproduct }}</td>
                              <td>{{ $item->price }}</td>
                              <td>{{ $item->size }}</td>
                              <td>{{ $item->color }}</td>
                              <td>{{ $item->quantity }}</td>
                              <td>{{ $item->id_type }}</td>
                              <td> <a href="{{ route('product.edit',['id'=>$item->id]) }}" class="btn btn-warning btn-sm">Sửa</a></td>
                              <td> <a onclick="return comfim('Bạn có chắc chắn muốn xóa ?')" href="{{ route('product.delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm">Xóa</a></td>
                        </tr>
                     @endforeach
                         
                     @else
                         <tr>
                              <td colspan="10">Không có sản phẩm</td>
                         </tr>
                         
                     @endif
                  </tbody>
            </table>
           
            </form>      
  
      </div> 
</div>
