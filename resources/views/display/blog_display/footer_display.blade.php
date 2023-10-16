<section class="footer">

      <div class="box-container">
  
          <div class="box">
              <h3><i class="fas fa-paw"></i> Levents</h3>
              <p>Levents® là lựa chọn hàng đầu dành cho các tín đồ thời trang Đường phố sành điệu. Sứ mệnh của
                  Levents® là trao quyền cho thế hệ trẻ toàn thế giới tự do thể hiện phong cách thông qua thời trang,
                  thương hiệu vượt qua ranh giới của thời trang đường phố bằng cách không ngừng sáng tạo các trang
                  phục với các bộ sưu tập độc đáo.
              </p>
          </div>
  
          <div class="box">
              <h3>Contact Info</h3>
              <a href="#" class="links"><i class="fas fa-phone"></i> 0866556871</a>
              <a href="#" class="links"><i class="fas fa-envelope"></i> vananh23957@gmail.com</a>
              <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Đại Học Công Nghệ Thông Tin và Truyền
                  Thông Việt Hàn</a>
              <a href="#" class="links">&#9200 8:30 - 22:00</a>
              <a href=""><img src="../Image/banner/payment-pic.png" alt=""></a>
  
          </div>
          <div class="box">
              <h3>Contact</h3>
              <p>Chúng tôi là thương hiệu thời trang Đường phố nổi tiếng với định hướng
                  cung cấp sản phẩm có chất lượng cao, sành điệu với giá thành hợp lý.</p>
              <input type="email" placeholder="Your Email" class="email" required>
              <input type="email" placeholder="Your Phone number " class="email" required>
          </div>
  
      </div>
  
      <div class="credit">&copy; levents Store Online</div>
  </section>
  
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="" id="largeModalLabel">Giỏ hàng</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-stats order-table ov-h">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="serial">#</th>
                          <th class="avatar">Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Size</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#mediumModal">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button></td>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/alo.js') }}"></script>
