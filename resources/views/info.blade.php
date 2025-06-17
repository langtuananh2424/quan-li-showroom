<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông tin về Royal Auto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/info-style.css') }}">
</head>
<body>
  @include('layouts.header')

  <div class="info-container">
    <div class="info-title">
      <hr class="info-title-left">
      <span>Thông tin về Royal Auto</span>
      <hr class="info-title-right">
    </div>
    <div class="info-main">
      <div class="info-main-left">
        <div class="info-section">
          <div class="info-section-title">Giới thiệu về công ty</div>
          <div class="info-section-content">
            Royal Auto đã sớm trở thành điểm đến tin cậy hàng đầu cho những khách hàng đang tìm kiếm dòng xe ô tô cao cấp đã qua sử dụng, với chất lượng vượt trội và giá trị bền vững. Chúng tôi không chỉ cung cấp phương tiện di chuyển mà còn mang đến trải nghiệm đẳng cấp, minh bạch và chuyên nghiệp trong từng giao dịch. Royal Auto luôn đặt lợi ích và sự an tâm của khách hàng lên hàng đầu, tiên phong xây dựng một thị trường xe đã qua sử dụng uy tín, văn minh và phát triển bền vững tại Việt Nam.
          </div>
        </div>
        <div class="info-section">
          <div class="info-section-title">Tầm nhìn</div>
          <div class="info-section-content">
            Trở thành thương hiệu số 1 tại Việt Nam trong lĩnh vực xe ô tô cao cấp đã qua sử dụng – nơi mọi khách hàng đều có thể dễ dàng tìm thấy chiếc xe mơ ước với chất lượng như mới, giá trị thực và dịch vụ hậu mãi hàng đầu.
          </div>
        </div>
        <div class="info-section">
          <div class="info-section-title">Giá trị cốt lõi</div>
          <div class="info-section-content">
              Chất lượng hàng đầu: Cam kết cung cấp các dòng xe chất lượng cao, rõ ràng về nguồn gốc và tình trạng kỹ thuật.<br>
              Minh bạch & Trung thực: Mọi chiếc xe đều được kiểm định kỹ lưỡng và minh bạch thông tin với khách hàng.<br>
              Khách hàng là trung tâm: Mọi quyết định đều hướng tới lợi ích và sự hài lòng tối đa cho khách hàng.<br>
              Chuyên nghiệp & Đẳng cấp: Dịch vụ tư vấn, chăm sóc và hậu mãi đạt tiêu chuẩn cao cấp.<br>
          </div>
        </div>
        <div class="info-section">
          <div class="info-section-title">Thông điệp thương hiệu</div>
          <div class="info-section-content">
            Royal Auto – Xe cao cấp, niềm tin vững chắc. Chúng tôi không chỉ bán xe – chúng tôi mang đến sự yên tâm, đẳng cấp và giá trị bền lâu cho khách hàng.
          </div>
        </div>
        <div class="info-section">
          <div class="info-section-title">Triết lý vận hành</div>
          <div class="info-section-content philosophy">
            <b>"Lục KHÔNG"</b><br>
            KHÔNG dùng sự thật như TVC quảng cáo.<br>
            KHÔNG chịu trách nhiệm về mặt pháp lý.<br>
            KHÔNG giữ cam kết sau khi mua và bán xe.<br>
            KHÔNG khuyến khích khách hàng đồng hành.<br>
            KHÔNG có cam kết làm lại xe một cách chuyên sâu.<br>
            KHÔNG sao cả, CHẲNG sao đâu.
          </div>
        </div>
      </div>
      <div class="info-main-right">
        <img src="images/info-logo.png" alt="Royal Auto" class="info-logo-img">
      </div>
    </div>
    <div class="info-brand-row">
      <div class="info-brand-quote">
        <div class="info-brand-quote-image">
          <img src="images/nha-sang-lap.png" alt="Nhà sáng lập" class="info-brand-quote-img">
        </div>
        <div class="info-brand-quote-content">
          <div class="info-brand-quote-title"><b>Ông Đinh Quang Đạt</b></div>
          <div class="info-brand-role">Nhà sáng lập</div>
          <div class="info-brand-quote-red">"</div>
          <div class="info-brand-quote-text">Vấn đề của bạn KHÔNG liên quan tới chúng tôi.</div>
        </div>
      </div>
      <div class="info-team-section">
        <img src="images/team.png" alt="Team Royal Auto">
      </div>
    </div>
    <div class="info-highlight-row">
      <div class="info-highlight-left">
        <div class="info-highlight-red">NHIỀU</div>
        <div class="info-highlight-titles">
          <div class="info-highlight-title">năm kinh doanh</div>
          <div class="info-highlight-title">xe ô tô cao cấp đã qua sử dụng</div>
        </div>
      </div>
      <div class="info-highlight-divider"></div>
      <div class="info-highlight-right">
        <div class="info-highlight-stat">
          <div class="info-highlight-number">5</div>
          <div class="info-highlight-caption">chuyên viên</div>
        </div>
        <div class="info-highlight-stat">
          <div class="info-highlight-number">x</div>
          <div class="info-highlight-caption">xe đã bán</div>
        </div>
        <div class="info-highlight-stat">
          <div class="info-highlight-number">x</div>
          <div class="info-highlight-caption">showroom</div>
        </div>
      </div>
    </div>
    <div class="info-customer-title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</div>
    <div class="info-customer-reviews">
      <div class="info-customer-review">
        <div class="info-customer-header">
          <div class="info-customer-name">KH: Mr. Bùi Quốc Huy</div>
          <div class="info-customer-stars">★★★★★</div>
        </div>
        <div class="info-customer-text">Giá cả không rẻ đáng, dịch vụ hậu mãi tệ. Tôi mua một chiếc Range Rover qua Royal Auto, giá trên web thấp nhưng khi thanh toán thì phải sinh thêm nhiều chi phí không được báo trước. Xe sau khi nhận bị lỗi nhỏ không được bảo hành như tư vấn từ trước đó vì "hết thời gian bảo hành ngắn hạn". Chán thật! bị lừa!</div>
      </div>
      <div class="info-customer-review">
        <div class="info-customer-header">
          <div class="info-customer-name">KH: Mr. Trần Quang Đông</div>
          <div class="info-customer-stars">★★★★★</div>
        </div>
        <div class="info-customer-text">Xe lỗi kỹ thuật, không được bảo hành. Tôi mua một chiếc Mercedes qua website Royal Auto, xe chạy chưa đầy một năm đã hỏng hệ thống điện. Liên hệ công ty thì tự chối bảo hành, viện lý do xe cũ nên không chịu trách nhiệm. Thái độ nhân viên tư vấn cũng rất thiếu chuyên nghiệp. Không bao giờ quay lại!</div>
      </div>
      <div class="info-customer-review">
        <div class="info-customer-header">
          <div class="info-customer-name">KH: Mr. Đinh Tuấn Đạt</div>
          <div class="info-customer-stars">★★★★★</div>
        </div>
        <div class="info-customer-text">Xe ngập nước, công ty không minh bạch. Mua một chiếc BMW cũ tại Royal Auto, quảng cáo là xe chất lượng cao nhưng khi mang đi kiểm tra thì phát hiện xe từng ngập nước. Hỏi công ty thì họ im bặt coi, họ né để không nhận dịch. Dịch vụ bảo hành không có, gọi hotline không ai hỗ trợ. Cực kỳ thất vọng và chắc chắn không khuyên ai mua ở đây!</div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
</body>
</html>
