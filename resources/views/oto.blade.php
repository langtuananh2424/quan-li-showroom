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
      <button class="oto-car-btn"><a href="{{ route('718') }}">Khám phá</a></button>
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

  @include('layouts.footer')
</body>
</html>
