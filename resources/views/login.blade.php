@include('layouts.header')
<link rel="stylesheet" href="/css/login.css">

<div class="login-main">
    <div class="login-image">
        <img src="/images/login-banner.png" alt="Login Banner">
    </div>
    <div class="login-form">
        <h2>Đăng nhập vào Royal Auto</h2>
        <input type="text" placeholder="Mã nhân viên" name="username" required>
        <input type="password" placeholder="Mật khẩu" name="password" required>
        <a href="{{ route('quanlidanhsachoto') }}"><button type="submit">Đăng nhập</button></a>
    </div>
</div>
@include('layouts.footer')
