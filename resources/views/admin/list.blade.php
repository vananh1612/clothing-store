

@include('blog.head')
@section('title')
    List Type
@endsection
 


<!DOCTYPE html>
<style> 
table{
      width: 100%;
      border: 1px solid black;
      text-align: left;
      
}
.tdheadd th{
  width: 5% !important;
      color: red !important;
      border: 1px solid red


}
 .btn {
  float: right;
}

form > p {
      font-size: 21px;
      color: rgb(0, 166, 255)
}

</style>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
      @include('admin.head')
  </head>
  <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
  
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-text demo menu-text fw-bolder ms-2">ADMIN </span>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item active">
                <a href="index.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">DASHBOARD</div>
                </a>
              </li>
  
              <!-- Layouts -->
            
  
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
              </li>

            
              <!-- Forms & Tables -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
              <!-- Forms -->
         
              
            
            </ul>
          </aside>
         
          <div class="layout-page">
            <!-- Navbar -->
  
            <nav
              class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
              id="layout-navbar"
            >
             
  
              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                      type="text"
                      class="form-control border-0 shadow-none"
                      placeholder="Search..."
                      aria-label="Search..."
                    />
                  </div>
                </div>
                <!-- /Search -->
  
              </div>
            </nav>
            <?php //Hiển thị thông báo thành công ?>
            @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi ?>
            @if ( Session::has('error') )
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    {{-- Dữ liệu nhập vào không hợp lệ --}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif



              {{-- List client --}}
              <div style="padding: 1% 3% ">
                <form action="">
                  @csrf
                  <p> Danh sách người dùng  
                    <a href="{{ route('addclient') }}" class="btn btn-primary">Thêm người dùng</a>
                  </p>
                <br>
                      <table class="table table-bordered" >
                            <thead>
                                  <tr class="tdhead">
                                      <th>STT</th>
                                      <th style="width: 15%;">Tên</th>
                                      <th >Email</th>
                                      <th style="width:20%">Thời gian</th>
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

              {{-- List product--}}
            
              <div>
                  <div style="padding: 1% 3% ">
                    <form>
                        @csrf
                       <p> Danh sách sản phẩm <a  class="btn btn-primary" href="{{ route('addproduct') }}">Thêm Sản Phẩm</a>
                  </p>
                    <br>
                        <table class="table table-bordered" >
                              <thead>
                                    <tr class="tdheadd">
                                        <th style="width: 1%;">STT</th>
                                        <th style="width: 1%">Tên sp</th>
                                        <th style="width: 1%" >Ảnh</th>
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
        
          </div>
        </div>
      </div>
            <div class="content-wrapper">
                  @yield('content')
                  </div>
                  <!-- Footer -->
                  @include('admin.footer')
        </body>
      </html>
    <body>
    
          
          @include('blog.footer')