<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ô tô - Royal Auto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/oto-style.css') }}">
</head>
<body>
  @include('layouts.header')

  <div class="oto-title">
    <hr class="oto-title-left">
    <span>Ô tô</span>
    <hr class="oto-title-right">
  </div>
  <div class="oto-cars">
    <div class="oto-car">
      <img src="images/Porsche 718.png" alt="Porsche 718 Cayman S">
      <div class="oto-car-title">Porsche 718 Cayman S</div>
      <button class="oto-car-btn">Khám phá</button>
    </div>
    <div class="oto-car">
      <img src="images/Porsche 911.png" alt="Porsche 911 Carrera 4 GTS">
      <div class="oto-car-title">Porsche 911 Carrera 4 GTS</div>
      <button class="oto-car-btn">Khám phá</button>
    </div>
    <div class="oto-car">
      <img src="images/Porsche cayenne.png" alt="Porsche Cayenne">
      <div class="oto-car-title">Porsche Cayenne</div>
      <button class="oto-car-btn">Khám phá</button>
    </div>
    <div class="oto-car">
      <img src="images/Porsche taycan.png" alt="Porsche Taycan">
      <div class="oto-car-title">Porsche Taycan</div>
      <button class="oto-car-btn">Khám phá</button>
    </div>
  </div>

  <footer class="oto-footer">
    <div class="oto-footer-left">
      <img src="images/logo-footer.png" alt="Royal Auto">
      <div class="oto-footer-desc">
        Chuyên kinh doanh các dòng xe cũ cao cấp như Mercedes, Roll Royce, McLaren, BMW, Audi, Land Rover ... Royal Auto luôn tâm niệm chỉ mang tới khách hàng những mẫu xe chất lượng nhất, chuẩn về pháp lý, nói CÓ với xe lỗi hay xe kém chất lượng.
      </div>
    </div>
    <div class="oto-footer-contact">
      <div class="oto-footer-contact-row">
        <img src="icons/Phone.png" alt="car">
        <div class="oto-footer-contact-text">Hotline: <span class="oto-hotline">0987654321</span></div>
      </div>
      <div class="oto-footer-contact-row">
        <img src="icons/Mail.png" alt="mail">
        <div class="oto-footer-contact-text">royalauto@gmail.com</div>
      </div>
      <div class="oto-footer-contact-row">
        <img src="icons/Map.png" alt="location">
        <div class="oto-footer-contact-text">Hà Nội, Việt Nam</div>
      </div>
    </div>
    <hr class="oto-footer-line">
    <div class="oto-footer-copyright">
      Copyright © 2025 Royal Auto. All rights reserved.
    </div>
  </footer>
</body>
</html>
