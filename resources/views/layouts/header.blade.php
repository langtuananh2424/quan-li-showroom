<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Auto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<header>
  <div class="logo">
    <img src="images/logo header.png" alt="Royal Auto">
  </div>
  <nav>
    <a href="/">Trang chủ</a>
    <a href="{{ route('oto') }}">Ô tô</a>
    <a href="{{ route('info')}}">Thông tin về Royal Auto</a>
    <a href="{{ route('service')}}">Dịch vụ</a>
  </nav>
  <div class="login">
    <img src="icons/User.png" alt="">
    <span>Đăng nhập</span>
  </div>
</header>