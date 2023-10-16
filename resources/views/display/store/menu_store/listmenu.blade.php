<div class="catalog-head">
      <div class="title">
          TẤT CẢ SẢN PHẨM
      </div>
      <div class="sort">
          <p>Lọc bởi</p>
         
          {{-- <ul>
            <li><a href="">Lọc bởi</a></li>
            <li><</li>
            <li><a href="{{ route('priceLowToHight') }}">Giá từ cao đến thấp</a></li>
            <li><a href="{{ route('name_a_z') }}">A-Z</a></li>
            <li><a href="{{ route('name_z_a') }}">Z-A</a></li>
            <li><a href="">Phổ biến</a></li>
          </ul> --}}
          <a href="{{ route('priceLowToHight') }}">Giá từ thấp đến cao</a>
          <select>
              <option value="">Lọc bởi</option>
              <option value=""><a href="{{ route('priceLowToHight') }}">Giá từ thấp đến cao</a></option>
              <option value=""><a href="{{ route('priceHightToLow') }}">Giá từ cao đến thấp</a></option>
              <option value=""><a href="{{ route('name_a_z') }}">A-Z</a></option>
              <option value=""><a href="{{ route('name_z_a') }}">Z-A</a></option>
              <option value="">Phổ biến</option>
          </select>
         
      </div>
  </div>