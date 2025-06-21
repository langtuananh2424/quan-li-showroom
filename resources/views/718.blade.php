@include('layouts.header')
<link rel="stylesheet" href="{{ asset('css/718-style.css') }}">
<div class="oto-718-banner">
  <img src="{{ asset('images/718-CaymanS.png') }}" alt="Porsche 718 Cayman S">
</div>

<div class="oto-718-main">
  <div class="oto-718-main-img">
    <img src="{{ asset('images/718 CaymanS 2.png') }}" alt="Ngoại thất 718 Cayman S">
    <div class="oto-718-main-link"><a href="#">→ Ngoại thất</a></div>
  </div>
  <div class="oto-718-main-int">
    <img src="{{ asset('images/718 CaymanS 3.png') }}" alt="Nội thất 718 Cayman S">
    <div class="oto-718-main-link"><a href="#">→ Nội thất</a></div>
  </div>
</div>
<div class="oto-718-features">
  <h2 class="oto-718-features-title">Đặc điểm nổi bật</h2>
  <div class="oto-718-features-tabs">
    <button class="oto-718-features-tab">Ý tưởng</button>
    <button class="oto-718-features-tab">Hệ truyền động</button>
    <button class="oto-718-features-tab">Hệ thống treo</button>
    <button class="oto-718-features-tab active">Độ an toàn</button>
    <button class="oto-718-features-tab">Tiện nghi</button>
    <button class="oto-718-features-tab">Môi trường</button>
    <button class="oto-718-features-tab">Âm thanh & Liên lạc</button>
    <button class="oto-718-features-tab">Cá nhân hóa</button>
  </div>
  <div class="oto-718-features-list">
    <div class="oto-718-feature">
      <img src="{{ asset('images/brake 1.png') }}" alt="Hệ thống phanh">
      <div class="oto-718-feature-title">Hệ thống phanh</div>
      <button class="oto-718-feature-btn">→ Tìm hiểu thêm</button>
    </div>
    <div class="oto-718-feature">
      <img src="{{ asset('images/tuikhi 1.png') }}" alt="Túi khí và POSIP">
      <div class="oto-718-feature-title">Hệ thống túi khí và Thanh bảo vệ chống va đập bên hông của Porsche (POSIP)</div>
      <button class="oto-718-feature-btn">→ Tìm hiểu thêm</button>
    </div>
    <div class="oto-718-feature">
      <img src="{{ asset('images/led 1.png') }}" alt="Hệ thống đèn chiếu sáng">
      <div class="oto-718-feature-title">Hệ thống đèn chiếu sáng</div>
      <button class="oto-718-feature-btn">→ Tìm hiểu thêm</button>
    </div>
  </div>
</div>
<div class="oto-718-spec-table">
  <div class="oto-718-spec-img">
    <img src="{{ asset('images/718 3.png') }}" alt="Kích thước 718 Cayman S">
  </div>
  <div class="oto-718-spec-info">
    <h3>Thông số kỹ thuật</h3>
    <table class="oto-718-spec-info-table">
      <tr><td>Công suất</td><td style="text-align: right;">257kW (350 mã lực)</td></tr>
      <tr><td>Mô men xoắn cực đại</td><td style="text-align: right;">420Nm</td></tr>
      <tr><td>Tăng tốc từ 0 - 100 km/giờ</td><td style="text-align: right;">4,4 giây</td></tr>
      <tr><td>Tốc độ tối đa</td><td style="text-align: right;"></td></tr>
      <tr><td>Mức tiêu thụ kết hợp</td><td style="text-align: right;"></td></tr>
      <tr><td>Lượng khí thải CO2</td><td style="text-align: right;"></td></tr>
      <tr><td>Giá bán</td><td style="text-align: right;"><a href="#">Liên hệ</a></td></tr>
    </table>
    <button class="oto-718-all-btn">→ Tất cả thông số</button>
  </div>
</div>
@include('layouts.footer')
