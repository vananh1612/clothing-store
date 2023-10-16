@include('display.blog_display.head_display')
@include('display.blog_display.menu_display')
<div> <img src="../Image/gioithieu/bv1.jpg" alt="" class="main_img"></div><br>

<div class="main">
    <div class="main_tittle">
        <p>LEVENTS<sup>&reg;</sup> - POPULAR STREETWEAR BRAND</p>
    </div>
</div>
<div class="main_bv">
    <div class="bv1"><a href="#"><img src="../Image/gioithieu/Hinh-anh-01_.png" alt=""></a></div>
    <div class="bv2"><a href="#"><img src="../Image/gioithieu/Hinh-anh-02_.png" alt=""></a></div>
    <div class="bv3"><a href="#"><img src="../Image/gioithieu/Hinh-anh-03_.png" alt=""></a></div>
    <div class="bv4"><a href="#"><img src="../Image/gioithieu/Hinh-anh-04.png" alt=""></a></div>
    <div class="bv5"><a href="#"><img src="../Image/gioithieu/Hinh-anh-05_.png" alt=""></a></div>
    <div class="bv6"><a href="#"><img src="../Image/gioithieu/Hinh-anh-06_.png" alt=""></a></div>
    <div class="bv7"><a href="#"><img src="../Image/gioithieu/Hinh-anh-07_.png" alt=""></a></div>
    <div class="bv8"><a href="#"><img src="../Image/gioithieu/Hinh-anh-08_.png" alt=""></a></div>
    <div class="bv9"><a href="#"><img src="../Image/gioithieu/Hinh-anh-09_.png" alt=""></a></div>
    <div class="main_tittle_p">
        <p>BÀI VIẾT MỚI</p>
    </div>
</div>

<div class="main_bvm">
    <div><a href="{{ route('y2k') }}"><img src="../Image/gioithieu/thumbnail-y2k-la-gi.png" alt=""></a></div>
    <div><a href="{{ route('classic') }}"><img src="../Image/gioithieu/thumbnail-classic-style.png" alt=""></a>
    </div>
    <div><a href="{{ route('basic') }}"><img src="../Image/gioithieu/thumbnail-basic-la-gi.png" alt=""></a></div>
    <div><a href="{{ route('street') }}"><img src="../Image/gioithieu/THUMBNAIL-STREETSTYLE.png" alt=""></a></div>
</div>

<hr style="margin-top: 15px;">
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
@include('display.blog_display.footer_display')
 