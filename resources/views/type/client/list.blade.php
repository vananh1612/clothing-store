
<div style="padding: 1% 3% ">
  <form action="">
    @csrf
    <p> Danh sách người dùng  <a href="{{ route('clientadd') }}">
      <button class="btn btn-primary">Thêm người dùng</button></a>
    </p>
   <br>
        <table class="table table-bordered" >
              <thead>
                    <tr class="tdhead">
                        <th>STT</th>
                        <th>Tên</th>
                        <th >Email</th>
                        <th style="width:25%">Thời gian</th>
                        <th style="width: 5%">Sửa</th>
                        <th style="width: 5%">Xóa</th>
                    </tr>
              </thead>
              <tbody>
                 @if (! empty($clients))
                 @foreach ( $clients as $key => $item)
                    <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->created_at }}</td>
                          <td> <a href="{{ route('client.edit',['id'=>$item->id]) }}" class="btn btn-warning btn-sm">Sửa</a></td>
                          <td> <a onclick="return aleart('Bạn có chắc chắn muốn xóa ?')" href="{{ route('client.delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm">Xóa</a></td>
                    </tr>
                 @endforeach
                     
                 @else
                     <tr>
                          <td colspan="10">Không có người dùng</td>
                     </tr>
                     
                 @endif
              </tbody>
        </table>
       
        </form>     

</div>



