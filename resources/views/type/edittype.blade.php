
@include('blog.head')
@section('title')
    UPDATE Type
@endsection
 


<!DOCTYPE html>


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
      <style>
        .btn{
          float: right;
        }
      </style>
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
             
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
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
  
            <!-- / Navbar -->
            <div style="padding: 1% 20% ">
              <a href="{{ route('admin.list') }}"> <button type="submit" class="btn btn-primary" >
                Bank
              </button></a>
              <form action="{{ route('type.post-edit') }} " method="post"> 
                {{-- đổi lại thành method post ko phải method get --}}
                    @csrf
                    <!-- Email input -->

                    <div class="form-outline mb-4">
                      
                    <h2 style="text-align: center">Edit Type</h2> 
                     
                    <label class="form-label" for="form2Example1">Name Type</label>
                      <input type="text" id="form2Example1" class="form-control" name="nametype" value="{{ old('nametype') ?? $typeDetail->nametype }}"/>
                    
                          @error('nametype')
                          <span style="color: red">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach   </span>
                          @enderror
                 
                    </div>
                  
                  
                    <div>
                          <button type="submit" class="btn btn-primary btn-block mb-4">Save</button> 

                    </div>
              </form>   
        
            </div>
            <!-- Content wrapper -->
            <div class="content-wrapper">
              @yield('content')
              </div>
              <!-- Footer -->
              @include('admin.footer')
    </body>
  </html>
<body>

	
      @include('blog.footer')