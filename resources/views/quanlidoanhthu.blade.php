@include('layouts.adminheader')
<link rel="stylesheet" href="{{ asset('css/quanlidoanhthu-style.css') }}">
<div class="container-oto">
    <div class="oto-banner">
        <img src="images/admin-banner.png" alt="banner" class="oto-banner-img">
    </div>
    <div class="oto-content">
        <div class="oto-title-row" style="padding-bottom: 0;">
            <h2 class="oto-title" style="margin-bottom: 12px;">BÁO CÁO DOANH THU</h2>
            <a href="#" class="oto-add-btn" id="btnShowAddDoanhThu" style="align-self: flex-end; margin-bottom: 12px;">Tạo doanh thu mới</a>
        </div>
        <table class="oto-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hãng xe</th>
                    <th>Tên xe</th>
                    <th>Giá bán</th>
                    <th>Ngày bán</th>
                    <th>Khách hàng</th>
                    <th>NV bán</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Vinfast</td><td>VF3</td><td>800.000.000 VND</td><td>28/05/2025</td><td>Trần Tiến Đạt</td><td>Đinh Quang Đạt</td></tr>
                <tr><td>2</td><td>Honda</td><td>Civic</td><td>900.000.000 VND</td><td>27/05/2025</td><td>Bùi Khắc Huy</td><td>Đỗ Văn Đạt</td></tr>
                <tr><td>3</td><td>BMW</td><td>M5</td><td>2.500.000.000 VND</td><td>19/05/2025</td><td>Trịnh Quang Đạt</td><td>Đỗ Văn Đạt</td></tr>
                <tr><td>4</td><td>Lamborghini</td><td>Urus</td><td>20.000.000.000 VND</td><td>26/04/2025</td><td>Trần Tiến Đạt</td><td>Đỗ Văn Đạt</td></tr>
                <tr><td>5</td><td>Audi</td><td>R8</td><td>3.500.000.000 VND</td><td>14/02/2025</td><td>Bùi Quốc Huy</td><td>Nguyễn Tiến Dũng</td></tr>
                <tr><td>6</td><td>Xiaomi</td><td>SU7</td><td>700.000.000 VND</td><td>09/01/2025</td><td>Nguyễn Tuấn Anh</td><td>Bùi Khắc Huy</td></tr>
                <tr><td>7</td><td>Nissan</td><td>GTR</td><td>2.499.999.999 VND</td><td>31/12/2024</td><td>Lăng Thành Đồng</td><td>Nguyễn Tiến Dũng</td></tr>
                <tr><td>8</td><td>Tesla</td><td>Model S</td><td>4.999.999.999 VND</td><td>16/11/2024</td><td>DN. Mailisa</td><td>Đinh Quang Đạt</td></tr>
                <tr><td>9</td><td>Porsche</td><td>911</td><td>13.000.000.000 VND</td><td>02/11/2024</td><td>Đỗ Quang Đạt</td><td>Nguyễn Tiến Dũng</td></tr>
                <tr><td>10</td><td>Roll-Royce</td><td>Phantom</td><td>40.000.000.000 VND</td><td>21/07/2024</td><td>DN. KaHy</td><td>Đinh Quang Đạt</td></tr>
            </tbody>
        </table>
        <div class="oto-pagination" style="margin-bottom: 0;">
            <span><</span>
            <a href="#" class="oto-page active">1</a>
            <a href="#" class="oto-page">2</a>
            <span>></span>
        </div>
    </div>
</div>
@include('layouts.adminfooter')
@vite('resources/js/quanlidoanhthu.js')

<!-- Popup Tạo doanh thu -->
<div class="popup-overlay" id="popupAddDoanhThu" style="display:none;">
  <div class="popup-content">
    <h2 class="popup-title">Tạo doanh thu</h2>
    <form class="popup-form popup-form-doanhthu">
      <div class="popup-row">
        <div class="popup-field">
          <input type="text" placeholder="Hãng xe">
        </div>
        <div class="popup-field">
          <input type="text" placeholder="Tên xe">
        </div>
      </div>
      <div class="popup-row">
        <div class="popup-field">
          <input type="text" placeholder="Giá bán">
        </div>
        <div class="popup-field">
          <input type="date" placeholder="Ngày bán">
        </div>
      </div>
      <div class="popup-row">
        <div class="popup-field">
          <input type="text" placeholder="Tên khách hàng">
        </div>
        <div class="popup-field">
          <select><option>Tên nhân viên</option><option>Đinh Quang Đạt</option><option>Đỗ Văn Đạt</option><option>Bùi Khắc Huy</option><option>Nguyễn Tiến Dũng</option></select>
        </div>
      </div>
      <div class="popup-actions">
        <button type="button" class="popup-cancel">Thoát</button>
        <button type="button" class="popup-submit">Thêm</button>
      </div>
    </form>
  </div>
</div>
