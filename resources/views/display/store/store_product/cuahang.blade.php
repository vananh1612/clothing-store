@include('display.blog_display.head_display')
@include('display.blog_display.menu_display')
    <!-- -----------------------main giới thiệu--------------------  -->
    <div class="container">
        <aside>
            <ul>
                <li><a href="#">Danh mục</a></li>
                <li><a href="../cuahang/cuahang.html">Tất cả sản phẩm</a></li>
                <li><a href="../cuahang/new-arival.html">Sản phẩm mới</a></li>
                <li><a href="../cuahang/ao.html">Áo</a>
                    <ul>
                        <li><a href="../cuahang/ao.html">Áo Polo</a></li>
                        <li><a href="../cuahang/ao.html">Áo Sơ mi</a></li>
                        <li><a href="../cuahang/ao.html">Áo Thun</a></li>
                    </ul>
                </li>
                <li><a href="../cuahang/quan.html">Quần</a>
                    <ul>
                        <li><a href="../cuahang/quan.html">Quần dài</a></li>
                        <li><a href="../cuahang/quan.html">Quần ngắn</a></li>
                    </ul>
                </li>
                <li><a href="../cuahang/aokhoac.html">Áo khoác</a>
                    <ul>
                        <li><a href="../cuahang/aokhoac.html">Hoodie</a></li>
                        <li><a href="../cuahang/aokhoac.html">Cardigan</a></li>
                        <li><a href="../cuahang/aokhoac.html">Sweater</a></li>
                        <li><a href="../cuahang/aokhoac.html">Jacket</a></li>
                    </ul>
                </li>
                <li><a href="../cuahang/balo.html">Cặp sách</a></li>
                <li><a href="../cuahang/phukien.html">Phụ kiện</a>
                    <ul>
                        <li><a href="../cuahang/phukien.html">Dép</a></li>
                        <li><a href="../cuahang/phukien.html">Túi</a></li>
                        <li><a href="../cuahang/phukien.html">Mũ</a></li>
                    </ul>
                </li>
                
            </ul>
        </aside>
        <div class="product-catalog">
            <div class="catalog-head">
                <div class="title">
                   TẤT CẢ SẢN PHẨM
                </div>

                    <div class="sort">
                        <p>Lọc bởi</p>
                        <select name="" id="sort">
                            <option value="0">Lọc bởi</option>
                            <option value="1">Giá từ thấp đến cao</option>
                            <option value="2">Giá từ cao đến thấp</option>
                            <option value="3">A-Z</option>
                            <option value="4">Z-A</option>
                        </select>
                    </div>
            </div>

            <div class="product-content" >
                    @foreach ($products as $item)
                    <div class="product" onclick="load1()">
                    <div class="product-img">
                        <img src="{{ $item->imageproduct }}" class="img-change" alt="">
                        <div class="advice"><a href="">Tư vấn</a></div>
                    </div>
                    <div class="product-name"> {{ $item->nameproduct }}</div>
                    <div class="product-price"><p>{{ $item->price }} VND  <s style="color: red;">1.599.000</s>VND</p></div>
                    <div class="product-buy-add">
                        <button><a href="{{ url('/cart/'.$item->id ) }}">Add Cart</a></button>
                        <button>Mua Ngay</button>
                    </div>
                </div>
                    @endforeach
           
            </div>
            <div id="loadMore"><button>
                    XEM THÊM
                </button></div>
        </div>
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
    @include('display.blog_display.footer_display')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Slider -->
    <script src="/Js/alo.js"></script>
    <script>
        function load1() {
            window.location.assign("/cuahang/cuahang-sp1.html")
            }
            function load2() {
            window.location.assign("/cuahang/cuahang-sp2.html")
            }
    </script>
  
    <script src="/Js/alo.js"></script>

</body>
<script>
    document.getElementById("sort").addEventListener("change", function() {
         var changeValue = this.value;
         if (changeValue === "1") {
             window.location.href = "/page/cuahang/pricelowtohight";
         }
    });

    document.getElementById("sort").addEventListener("change", function() {
         var changeValue = this.value;
         if (changeValue === "2") {
             window.location.href = "/page/cuahang/pricehighttolow";
         }
    });

    document.getElementById("sort").addEventListener("change", function() {
         var changeValue = this.value;
         if (changeValue === "3") {
             window.location.href = "/page/cuahang/name_a_z";
         }
    });

    document.getElementById("sort").addEventListener("change", function() {
         var changeValue = this.value;
         if (changeValue === "4") {
             window.location.href = "/page/cuahang/name_z_a";
         }
    });
    document.getElementById("sort").addEventListener("change", function() {
         var changeValue = this.value;
         if (changeValue === "0") {
             window.location.href = "/page/cuahang";
         }
    });
 </script>
 

</html>