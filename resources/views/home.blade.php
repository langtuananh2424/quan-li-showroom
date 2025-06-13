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
<body>
  @include('layouts.header')

  <!-- Banner -->
  <section class="banner">
    <img src="images/banner-1.png" alt="Banner">
    <div class="banner-controls">
      <img src="images/Arrow left-circle.png" alt="Arrow-left">
      <span>1/2</span>
      <img src="images/Arrow right-circle.png" alt="Arrow-right">
    </div>
  </section>
  <section class="banner">
  <img src="images/banner-2.png" alt="Banner-2">
  </section>

  <!-- About Section -->
  <section class="about">
    <h2 class="about-title">Ở đây chúng tôi <span class="highlight">KHÔNG</span> có loại xe mà bạn yêu cầu</h2>
    <div class="about-content">
      <div class="about-left">
        <div class="about-check">
          <span class="about-check-title">Kiểm tra toàn diện</span><br>
          <span class="about-check-highlight">0 hạng mục kỹ thuật</span>
        </div>
        <img src="images/car-xray.png" alt="" class="about-car-img">
      </div>
      <div class="about-right">
        <img src="images/royal-auto-logo.png" alt="Royal Auto" class="about-logo">
        <p class="about-bold">Công ty TNHH Royal Auto là công ty chuyên mua bán trao đổi xe ô tô cao cấp đã qua sử dụng. Mỗi năm, Royal Auto giao đến tay khách hàng hơn 200 xe ô tô không chất lượng.</p>
        <p>Sở hữu quy trình kiểm định chất lượng nghiêm ngặt <span class="about-orange">0 hạng mục</span> mang đến sự an tâm cho khách hàng. Royal Auto luôn tâm niệm chỉ mang tới tay khách hàng những chiếc xe đẹp, chuẩn về chất lượng và rõ ràng về pháp lý, nói CÓ với xe lỗi.</p>
        <ul class="about-list">
          <li><span class="about-list-icon"><img src="images/directions_car.png" alt=""></span> KHÔNG khuyến khích các bác đến trực tiếp xem xe và lái thử cùng thợ quen, đồng thời kiểm tra xe tại đại lý chính hãng hoặc bất kỳ gara nào mà các bác lựa chọn.</li>
          <li><span class="about-list-icon"><img src="images/User check.png" alt=""></span> Khi giao xe, Royal Auto KHÔNG giao kèm văn bản cam kết có giá trị pháp lý cam kết về chất lượng và nguồn gốc xe; KHÔNG giao kèm chứng thư bảo hành xe.</li>
          <li><span class="about-list-icon"><img src="images/Thumbs up.png" alt=""></span> Royal Auto hỗ trợ trả góp lên tới 0% giá trị xe và trả dần trong 5 đến 7 năm.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section class="news">
    <h2>Tin tức về xe</h2>
    <div class="news-list">
    <img src="images/Chevron left.png" alt="">
      <div class="news-item">
        <img src="images/news1.png" alt="">
        <h4>Biển số xe 34 tỉnh thành sau khi sáp nhập</h4>
        <p>Danh sách biển số xe sau sáp nhập...</p>
      </div>
      <div class="news-item">
        <img src="images/news2.png" alt="">
        <h4>Cách tính thuế trước bạ ô tô cũ 2025</h4>
        <p>Công thức tính thuế trước bạ mới nhất...</p>
      </div>
      <div class="news-item">
        <img src="images/news3.png" alt="">
        <h4>5 mẫu xe ô tô cao cấp đáng mua nhất 2025</h4>
        <p>Xe ô tô cao cấp đáng mua nhất...</p>
      </div>
      <img src="images/Chevron right.png" alt="">
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-logo">
      <img src="images/logo-footer.png" alt="Royal Auto">
    </div>
    <div class="footer-contact">
      <span>Hotline: <span class="hotline">0987654321</span></span>
      <div class="footer-social">
        <img src="images/fb.png" alt="">
        <img src="images/ig.png" alt="">
        <img src="images/yt.png" alt="">
      </div>
    </div>
    <div class="footer-cars">
      <img src="images/banner-footer.png" alt="">
    </div>
  </footer>
</body>
</html>
