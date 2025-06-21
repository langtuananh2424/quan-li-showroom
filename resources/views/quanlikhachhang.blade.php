@include('layouts.adminheader')
<link rel="stylesheet" href="{{ asset('css/quanlikhachhang-style.css') }}">
<div class="container-oto">
    <div class="oto-banner">
        <img src="images/admin-banner.png" alt="banner" class="oto-banner-img">
    </div>
    <div class="oto-content">
        <div class="oto-title-row" style="padding-bottom: 0;">
            <h2 class="oto-title" style="margin-bottom: 12px;">DANH SÁCH KHÁCH HÀNG</h2>
            <a href="#" class="oto-add-btn" id="btnShowAddKhachHang" style="align-self: flex-end; margin-bottom: 12px;">Thêm khách hàng</a>
        </div>
        <table class="oto-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8</td>
                    <td>DN. Mailisa</td>
                    <td>0123456789</td>
                    <td>Thanh Hóa</td>
                    <td>bthuy@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Đỗ Quang Đạt</td>
                    <td>0987654321</td>
                    <td>Bắc Bling</td>
                    <td>qhuy@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>DN. KaHy</td>
                    <td>0192837465</td>
                    <td>Hà Nội</td>
                    <td>tanh@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Nguyễn Trần Trung Quốc</td>
                    <td>0918273645</td>
                    <td>Nam Định</td>
                    <td>tdat@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Trần Minh Hiếu</td>
                    <td>0546372819</td>
                    <td>Nghệ An</td>
                    <td>qdat@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Trịnh Trần Phương Tuấn</td>
                    <td>0543216789</td>
                    <td>Hải Dương</td>
                    <td>tdong@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Nguyễn Huỳnh Sơn</td>
                    <td>0998877665</td>
                    <td>Kon Tum</td>
                    <td>ttuan@gmail.com</td>
                    <td><a href="{{ route('chitietkhachhang') }}">Chi tiết</a></td>
                </tr>
            </tbody>
        </table>
        <div class="oto-pagination" style="margin-bottom: 0;">
            <span><</span>
            <a href="#" class="oto-page">1</a>
            <a href="#" class="oto-page active">2</a>
            <span>></span>
        </div>
    </div>
</div>
@include('layouts.adminfooter')
@vite('resources/js/quanlikhachhang.js')
<!-- Popup Thêm Khách Hàng -->
<div class="popup-overlay" id="popupAddKhachHang" style="display: none;">
  <div class="popup-content popup-khachhang">
    <h2 class="popup-title">Thêm Khách Hàng</h2>
    <form class="popup-form popup-form-khachhang">
      <div class="popup-row-kh">
        <input type="text" placeholder="Họ tên khách hàng">
        <input type="text" placeholder="CCCD khách hàng">
        <input type="text" placeholder="Quê quán">
      </div>
      <div class="popup-row-kh">
        <input type="text" placeholder="Điện thoại">
        <select><option>Giới tính</option><option>Nam</option><option>Nữ</option><option>Khác</option></select>
        <input type="email" placeholder="Email">
      </div>
      <div class="car-details-box">
        <p>Biển số: ............................................</p>
        <p>Nhãn hiệu: ......................................</p>
        <p>Dung tích bình: ..............................</p>
        <p>Màu sơn: ........................................</p>
        <p>Số máy: ..........................................</p>
        <p>Số khung: .......................................</p>
        <p>Các đặc điểm khác: .................................................(nếu có)</p>
        <p>Giấy đăng ký xe số: ...........................</p>
        <p>Giá mua bán xe (bằng chữ&số): .......................................................................</p>
      </div>
      <div class="popup-actions">
        <button type="button" class="popup-cancel">Thoát</button>
        <button type="button" class="popup-submit">Thêm</button>
      </div>
    </form>
  </div>
</div>

