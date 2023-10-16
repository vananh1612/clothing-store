@include('display.blog_display.head_display')
@include('display.blog_display.menu_display')
    <!-- -----------------------main giới thiệu--------------------  -->
    <div class="container">
        <aside>
            <ul>
                <li><a href="#">Danh mục</a></li>
                <li><a href="/cuahang/cuahang.html">Tất cả sản phẩm</a></li>
                <li><a href="/cuahang/new-arival.html">Sản phẩm mới</a></li>
                <li><a href="/cuahang/ao.html">Áo</a>
                    <ul>
                        <li><a href="/cuahang/ao.html">Áo Polo</a></li>
                        <li><a href="/cuahang/ao.html">Áo Sơ mi</a></li>
                        <li><a href="/cuahang/ao.html">Áo Thun</a></li>
                    </ul>
                </li>
                <li><a href="/cuahang/quan.html">Quần</a>
                    <ul>
                        <li><a href="/cuahang/quan.html">Quần dài</a></li>
                        <li><a href="/cuahang/quan.html">Quần ngắn</a></li>
                    </ul>
                </li>
                <li><a href="/cuahang/aokhoac.html">Áo khoác</a>
                    <ul>
                        <li><a href="/cuahang/aokhoac.html">Hoodie</a></li>
                        <li><a href="/cuahang/aokhoac.html">Cardigan</a></li>
                        <li><a href="/cuahang/aokhoac.html">Sweater</a></li>
                        <li><a href="/cuahang/aokhoac.html">Jacket</a></li>
                    </ul>
                </li>
                <li><a href="/cuahang/balo.html">Cặp sách</a></li>
                <li><a href="/cuahang/phukien.html">Phụ kiện</a>
                    <ul>
                        <li><a href="/cuahang/phukien.html">Dép</a></li>
                        <li><a href="/cuahang/phukien.html">Túi</a></li>
                        <li><a href="/cuahang/phukien.html">Mũ</a></li>
                    </ul>
                </li>
                
            </ul>
        </aside>
        <div class="product-catalog">
            <div class="catalog-head">
                <div class="title">
                  @foreach ($types as $type)
                      @foreach ($productByType as $item)
                          @if ($type->id==$item->id_type)
                              {{ $type->nametype }}
                          @endif
                      @endforeach
                  @endforeach
                </div>
                <div class="sort">
                    <p>Lọc bởi</p>
                    <select name="" id="">
                        <option value="">Lọc bởi</option>
                        <option value="">Giá từ thấp đến cao</option>
                        <option value="">Giá từ cao đến thấp</option>
                        <option value="">Phổ biến</option>
                    </select>
                </div>
            </div>
            <div class="product-content">
               @foreach ($productByType as $item)
               <div class="product" onclick="load1()">
                <div class="product-img">
                    <img src="{{ $item->imageproduct }}" class="img-change" alt="">
                    <div class="advice"><a href="">Tư vấn</a></div>
                </div>
                <div class="product-name">{{ $item->nameproduct }}</div>
                <div class="product-price"><p>{{ $item->price }} VND  <s style="color: red;">1.000.000</s>VND</p></div>
                <div class="product-buy-add">
                    <button>Add Cart</button>
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
    <script src="/Js/alo.js"></script><script>
        function load1() {
        window.location.assign("/cuahang/bst-sp1.html")
        }
        function load2() {
        window.location.assign("/cuahang/bst-sp2.html")
        }
    </script>
</body>

</html>