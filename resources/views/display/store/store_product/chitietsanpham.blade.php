@include('display.blog_display.head_display')
@include('display.blog_display.menu_display')
    <!-- -----------------------main giới thiệu--------------------  -->
    <div class="container">
        <div class="product_gallery">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img" src="/Image/allproduct/sp1.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img" src="/Image/allproduct/sp11.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img" src="/Image/allproduct/sp12.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img" src="/Image/allproduct/sp13.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img" src="/Image/allproduct/sp14.jpg" alt=""></div>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="product_des">
            <div class="product_des_name">
                LEVENTS® JOGGER TEE/ WHITE
            </div>
            <div class="product_des_price">
                485.000 VND
            </div>
            <div class="product_des_color">
                Màu: TEE/ WHITE
            </div>
            <div class="product_des_thumb">
                <img src="/Image/allproduct/sp1.jpg" alt="">
            </div>
            <div class="product_des_size">
                <hr>
                <input class="btn-primary" type="button" value="Size 1">
                <input class="btn-primary" type="button" value="Size 2">
                <input class="btn-primary" type="button" value="Size 3">
                <input class="btn-primary" type="button" value="Size 4">
                <hr>
            </div>
            <div class="product_des_quantity">
                <button class="btn btn-minus" id="btn-minus">-</button>
                <input type="number" class="input-number" id="input-number" value="1" min="1" max="100">
                <button class="btn btn-plus" id="btn-plus">+</button>
            </div>
            <div class="product_des_cart">
                <button class="add-to-cart">Add to cart</button>
            </div>

        </div>
        <div class="product_gallery_thumb">
            <div class="gallery_thumb" data-slide="0">
                <img src="/Image/allproduct/sp1.jpg" alt="">
            </div>
            <div class="gallery_thumb" data-slide="1">
                <img src="/Image/allproduct/sp11.jpg" alt="">
            </div>
            <div class="gallery_thumb" data-slide="2">
                <img src="/Image/allproduct/sp12.jpg" alt="">
            </div>
            <div class="gallery_thumb" data-slide="3">
                <img src="/Image/allproduct/sp13.jpg" alt="">
            </div>
            <div class="gallery_thumb" data-slide="4">
                <img src="/Image/allproduct/sp14.jpg" alt="">
            </div>
        </div>
        <section class="swiper mySwiperr">
            <div class="swiper-wrapper-title">
                <div ><hr></div><p>Sản phẩm tương tự</p><div><hr></div>
              </div>
            <div class="swiper-wrapper">
                
              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp3.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® HOT AIR BALLOON TEE/ CREAM</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>
        
              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp4.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® COMPANY AND MATES CAP</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>
        
              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp5.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® HEART PUZZLE TEE</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>
        
              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp6.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® HOT AIR BALLOON TEE/ CREAM</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>

              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/spb.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® JOGGER TEE/ BLUE</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>

              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/spa.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® JOGGER TEE/ GREEN</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>

              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp7.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® BICHONTOUR TEE/ BROWN</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>

              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp8.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title">LEVENTS® BICHONTOUR TEE/ WHITE</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>

              <div class="card swiper-slide">
                <div class="card__image">
                  <img src="/Image/allproduct/sp9.jpg" alt="card image">
                </div>
        
                <div class="card__content">
                  <span class="card__title"> LEVENTS® COMPANY AND MATES CAP</span>
                  <span class="card__name">1.000.000 VND</span>
                  <button class="card__btn">Add Cart</button>
                </div>
              </div>
        
            </div>
          </section>
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
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var thumbs = document.querySelectorAll('.gallery_thumb img');
        for (var i = 0; i < thumbs.length; i++) {
            thumbs[i].addEventListener('click', function () {
                // Xóa lớp `selected` và lớp `muted` cho tất cả các ảnh trong `gallery_thumb`
                for (var j = 0; j < thumbs.length; j++) {
                    thumbs[j].classList.remove('selected', 'muted');
                }

                // Thêm lớp `selected` cho ảnh được click
                this.classList.add('selected');

                // Thêm lớp `muted` cho các ảnh không được click
                var siblings = getSiblings(this.parentNode);
                for (var j = 0; j < siblings.length; j++) {
                    siblings[j].querySelector('img').classList.add('muted');
                }

                // Di chuyển đến slide tương ứng
                var slideIndex = this.parentNode.getAttribute('data-slide');
                swiper.slideTo(slideIndex);
            });
        }

        // Hàm getSiblings() để lấy tất cả các phần tử anh em của một phần tử
        function getSiblings(elem) {
            var siblings = [];
            var sibling = elem.parentNode.firstChild;
            for (; sibling; sibling = sibling.nextSibling) {
                if (sibling.nodeType === 1 && sibling !== elem) {
                    siblings.push(sibling);
                }
            }
            return siblings;
        }
        // Tăng giảm input
        const inputNumber = document.getElementById('input-number');
        const btnMinus = document.getElementById('btn-minus');
        const btnPlus = document.getElementById('btn-plus');

        var addToCartButton = document.querySelector('.add-to-cart');
        addToCartButton.addEventListener('click', function () {
            alert('Thêm vào giỏ hàng thành công');
        });

        // giảm số lượng
        btnMinus.addEventListener('click', function () {
            if (parseInt(inputNumber.value) > inputNumber.min) {
                inputNumber.value = parseInt(inputNumber.value) - 1;
            }
        });


        btnPlus.addEventListener('click', function () {
            if (parseInt(inputNumber.value) < inputNumber.max) {
                inputNumber.value = parseInt(inputNumber.value) + 1;
            }
        });
    </script>

<script>
    var swiperr = new Swiper(".mySwiperr", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
    <script src="/Js/alo.js"></script>
</body>

</html>