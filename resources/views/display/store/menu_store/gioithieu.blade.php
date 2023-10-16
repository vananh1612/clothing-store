@include('display.blog_display.head_display')
@include('display.blog_display.menu_display')

<!-- -----------------------main giới thiệu--------------------  -->
 <div class="main">
      <div class="main_top">
          <p id="p1" style="font-family: 'Shadows Into Light', cursive; ">Levents<sup>&REG;</sup> - /Lì ven/</p>
          <p id="p2">Chúng tôi là thương hiệu thời trang Đường phố nổi tiếng với định hướng<br>
              cung cấp sản phẩm có chất lượng cao, sành điệu với giá thành hợp lý.</p>
      </div>
      <br>
  </div><br><br>
  <!-----------------------------chuyển ảnh_------------------------>
  <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
          <li data-target="#slides" data-slide-to="3"></li>
          <li data-target="#slides" data-slide-to="4"></li>
          <li data-target="#slides" data-slide-to="5"></li>
          <li data-target="#slides" data-slide-to="6"></li>


      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../Image/gioithieu/Untitled-3-1-prb4bhjxpwu6l1zt2rxzmkhvra4hmkcrfkewp4nzfk.png">
            <div class="carousel-caption">
            </div>
        </div>
          <div class="carousel-item ">
             @foreach ($banners as $key => $item)
             <img src="{{ $item->imagebanner }}">
             <div class="carousel-caption">
             </div>
             
             @endforeach
          </div>
          
      </div>
  </div>
  <!------------------------------------------------------------------------------------>
  <div class="main_button">
      <button>
          <a href="../cuahang/cuahang.html">Khám phá sản phẩm</a>
      </button>
  </div>
  <hr style="margin-top: 30px;">
  <br>
  <!-- ------------------------------------link --------------------------------------------- -->
  <div class="user">
      <p><a href="https://www.facebook.com/vananh.nt.7731"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.instagram.com/bundau_nuocmam_s1/"> <i class="fa-brands fa-instagram"></i> </a>
          <a
              href="https://www.google.com/search?q=gg&oq=gg&aqs=chrome..69i59i131i433i512j69i57j69i59j0i131i433i512j69i59j0i512j0i131i433i512j69i60.1914j0j4&sourceid=chrome&ie=UTF-8"><i
                  class="fa-brands fa-google-plus-g"></i></a>
          <a href="https://www.instagram.com/bundau_nuocmam_s1/"> <i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.youtube.com/"> <i class="fa-brands fa-youtube"></i> </a>
      </p>
  </div>


  <!-- ---------------------------------------------fotter------------------------------------------------ -->
 @include(' display.blog_display.footer_display')
  </div>
  </div>
  <script src="{{ asset('js/alo.js') }}"></script>