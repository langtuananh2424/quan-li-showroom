<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dịch vụ - Royal Auto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/service-style.css') }}">
</head>
<body>
  @include('layouts.header')

  <div class="service-container">
    <div class="service-title-row">
      <hr class="service-title-line left">
      <span class="service-title">Dịch vụ</span>
      <hr class="service-title-line right">
    </div>
    <div class="service-grid">
      <div class="service-card">
        <img src="images/thumuaxeotocu-jpg 1.png" alt="Thu mua xe cũ" class="service-img">
        <div class="service-card-title">Thu mua xe cũ</div>
        <button class="service-btn">
          <img src="icons/Arrow 3.png" alt="arrow" class="service-arrow"> Tìm hiểu thêm
        </button>
      </div>
      <div class="service-card">
        <img src="images/dandecal.png" alt="Dán decal ô tô" class="service-img">
        <div class="service-card-title">Dán decal ô tô</div>
        <button class="service-btn">
          <img src="icons/Arrow 3.png" alt="arrow" class="service-arrow"> Tìm hiểu thêm
        </button>
      </div>
      <div class="service-card">
        <img src="images/ve-sinh-gam-xe-oto-5 1.png" alt="Bảo dưỡng" class="service-img">
        <div class="service-card-title">Bảo dưỡng</div>
        <button class="service-btn">
          <img src="icons/Arrow 3.png" alt="arrow" class="service-arrow"> Tìm hiểu thêm
        </button>
      </div>
      <div class="service-card">
        <img src="images/xecopy 1.png" alt="Rửa ô tô" class="service-img">
        <div class="service-card-title">Rửa ô tô</div>
        <button class="service-btn">
          <img src="icons/Arrow 3.png" alt="arrow" class="service-arrow"> Tìm hiểu thêm
        </button>
      </div>
    </div>
  </div>

  @include('layouts.footer')
</body>
</html>
