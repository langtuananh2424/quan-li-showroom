<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Auto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
</head>
<header>
  <div class="header-left">
    <div class="logo">
      <img src="{{ asset('images/logo header.png') }}" alt="Royal Auto">
    </div>
    <nav>
      <a href="{{ route('quanlidanhsachoto') }}">Quản lý danh sách oto</a>
      <a href="{{ route('quanlikhachhang') }}">Quản lý khách hàng</a>
      <a href="{{ route('quanlidoanhthu') }}">Quản lý doanh thu</a>
      <a href="{{ route('quanlinhanvien') }}">Quản lý nhân viên</a>
    </nav>
  </div>
  <div class="login-container">
    <a href="#" id="login-toggle" class="login">
      <img src="{{ asset('icons/User.png') }}" alt="User">
      <span>RA0001</span>
    </a>
    <div class="dropdown-menu" id="login-dropdown" style="display: none;">
        <a href="#" id="logout-button">
            <img src="{{ asset('icons/Log out.png') }}" alt="Đăng xuất">
            <span>Đăng xuất</span>
        </a>
        <a href="#">
            <img src="{{ asset('icons/User.png') }}" alt="Thông tin cá nhân">
            <span>Thông tin cá nhân</span>
        </a>
    </div>
  </div>
</header>
@vite('resources/js/app.js')

<!-- Popup Xác nhận Đăng xuất -->
<div class="popup-overlay" id="popupLogoutConfirm" style="display:none;">
    <div class="popup-content popup-delete"> <!-- Reusing existing styles -->
        <img src="{{ asset('icons/Alert circle.png') }}" alt="Cảnh báo" class="delete-icon">
        <p class="delete-message" style="font-size: 24px; line-height: 1.4;">Bạn có chắc chắn muốn đăng xuất ?</p>
        <div class="delete-actions">
            <button type="button" class="popup-cancel-logout">Hủy</button>
            <button type="button" class="popup-confirm-logout">OK</button>
        </div>
    </div>
</div>

</html>
