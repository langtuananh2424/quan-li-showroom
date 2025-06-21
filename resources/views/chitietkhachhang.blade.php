@include('layouts.adminheader')
<link rel="stylesheet" href="{{ asset('css/chitietkhachhang-style.css') }}">
<div class="container-oto">
    <div class="oto-banner">
        <img src="images/admin-banner.png" alt="banner" class="oto-banner-img">
    </div>
    <div class="oto-content">
        <div class="oto-title-block">
            <h2 class="oto-title">HỢP ĐỒNG MUA BÁN</h2>
            <div class="oto-customer">Khách hàng: <span class="customer-name">Bùi Tuấn Huy</span></div>
            <hr class="oto-hr">
        </div>
        <div class="oto-contract-content">
            <div class="contract-info">
                <div>
                    <div>Họ tên KH: <b>Bùi Tuấn Huy</b></div>
                    <div>Địa chỉ: Thanh Hóa</div>
                </div>
                <div>
                    <div>Số CCCD: 123456789</div>
                    <div>Email: bthuy@gmail.com</div>
                </div>
                <div>
                    <div>SĐT: 0123456789</div>
                    <div>Giới tính: Nữ</div>
                </div>
            </div>
            <div class="contract-section">
                <b>1. Đặc điểm xe:</b><br>
                Biển số: 36B 12345;<br>
                Nhãn hiệu: Vinfast Lux A 2.0;<br>
                Dung tích động cơ: 2.0 lít;<br>
                Màu sơn: Đen;<br>
                Số máy: 1A28C;<br>
                Số khung: 56E7F68H;<br>
                Các đặc điểm khác: .............................(nếu có)
            </div>
            <div class="contract-section">
                <b>2. Giấy đăng ký xe số: </b>123 do cơ quan có thẩm quyền cấp ngày 18/9/2021
            </div>
            <div class="contract-section">
                <b>3. Giá mua bán (bằng số):</b> 1 000 000 000 VND (bằng chữ) một tỷ Việt Nam đồng
            </div>
        </div>
    </div>
</div>
@include('layouts.adminfooter')
