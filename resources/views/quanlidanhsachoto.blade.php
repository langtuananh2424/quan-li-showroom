@include('layouts.adminheader')
<link rel="stylesheet" href="{{ asset('css/quanlidanhsachoto-style.css') }}">
<div class="container-oto">
    <div class="oto-banner">
        <img src="images/admin-banner.png" alt="banner" class="oto-banner-img">
    </div>
    <div class="oto-content">
        <div class="oto-title-row">
            <h2 class="oto-title">QUẢN LÝ DANH SÁCH Ô TÔ</h2>
            <a href="#" class="oto-add-btn" id="btnShowAddOto">Thêm ô tô mới</a>
        </div>
        <table class="oto-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Dòng xe</th>
                    <th>Màu</th>
                    <th>Giá nhập (USD)</th>
                    <th>Ngày nhập</th>
                    <th>Biển số xe</th>
                    <th>Số km đã chạy</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mercedes-AMG GT R</td>
                    <td>Xanh lá</td>
                    <td>288.000</td>
                    <td>10/05/2025</td>
                    <td>30A-678.99</td>
                    <td>12.000</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Porsche 911 Turbo S</td>
                    <td>Trắng</td>
                    <td>364.000</td>
                    <td>23/01/2024</td>
                    <td>29A-112.34</td>
                    <td>9.500</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BMW M8 Competition</td>
                    <td>Đen</td>
                    <td>252.000</td>
                    <td>26/04/2025</td>
                    <td>30C-998.11</td>
                    <td>18.200</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lexus LC500</td>
                    <td>Đỏ</td>
                    <td>240.000</td>
                    <td>30/04/1975</td>
                    <td>31F-887.01</td>
                    <td>145.999</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Audi RS7 Sportback</td>
                    <td>Xám</td>
                    <td>220.000</td>
                    <td>18/02/2023</td>
                    <td>30A-887.76</td>
                    <td>100</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maserati GranTurismo</td>
                    <td>Xanh dương</td>
                    <td>232.000</td>
                    <td>31/1/2025</td>
                    <td>30E-234.56</td>
                    <td>50</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Jaguar F-Type R Coupe</td>
                    <td>Đỏ</td>
                    <td>172.000</td>
                    <td>16/9/2024</td>
                    <td>30D-321.88</td>
                    <td>1.000</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Aston Martin Vantage</td>
                    <td>Đen</td>
                    <td>328.000</td>
                    <td>15/05/2025</td>
                    <td>37A-777.77</td>
                    <td>2.400</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ferrari Portofino M</td>
                    <td>Vàng</td>
                    <td>640.000</td>
                    <td>07/05/2025</td>
                    <td>37A-123.89</td>
                    <td>5.500</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Lamborghini Huracán</td>
                    <td>Cam</td>
                    <td>800.000</td>
                    <td>15/05/2025</td>
                    <td>30D-312.88</td>
                    <td>2.000</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="oto-pagination">
            <span><</span>
            <a href="#" class="oto-page active">1</a>
            <a href="#" class="oto-page">2</a>
            <span>></span>
        </div>
    </div>
</div>
@include('layouts.adminfooter')

<!-- Popup Thêm ô tô -->
<div class="popup-overlay" id="popupAddOto" style="display:none;">
    <div class="popup-content popup-oto">
        <h2 class="popup-title">Thêm ô tô</h2>
        <form class="popup-form popup-form-oto">
            <div class="popup-row-oto">
                <div class="popup-field-oto">
                    <label>Dòng xe</label>
                    <input type="text">
                </div>
                <div class="popup-field-oto">
                    <label>Màu</label>
                    <input type="text">
                </div>
            </div>
            <div class="popup-row-oto">
                <div class="popup-field-oto with-unit">
                    <label>Số km đã chạy</label>
                    <input type="text">
                    <span>km</span>
                </div>
                <div class="popup-field-oto with-unit">
                    <label>Giá nhập</label>
                    <input type="text">
                    <span>USD</span>
                </div>
            </div>
            <div class="popup-row-oto">
                <div class="popup-field-oto with-icon">
                    <label>Ngày nhập</label>
                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                    <img src="icons/Calendar.png" class="input-icon">
                </div>
                <div class="popup-field-oto">
                    <label>Biển số xe</label>
                    <input type="text">
                </div>
            </div>
            <div class="popup-actions-oto">
                <button type="button" class="popup-submit-oto">Đồng ý</button>
                <button type="button" class="popup-cancel-oto">Thoát</button>
            </div>
        </form>
    </div>
</div>
@vite('resources/js/quanlidanhsachoto.js')

<!-- Popup Sửa ô tô -->
<div class="popup-overlay" id="popupEditOto" style="display:none;">
    <div class="popup-content popup-oto">
        <h2 class="popup-title">Sửa ô tô</h2>
        <form class="popup-form popup-form-oto">
            <div class="popup-row-oto">
                <div class="popup-field-oto">
                    <label>Dòng xe</label>
                    <input type="text" name="dong_xe">
                </div>
                <div class="popup-field-oto">
                    <label>Màu</label>
                    <input type="text" name="mau">
                </div>
            </div>
            <div class="popup-row-oto">
                <div class="popup-field-oto with-unit">
                    <label>Số km đã chạy</label>
                    <input type="text" name="so_km">
                    <span>km</span>
                </div>
                <div class="popup-field-oto with-unit">
                    <label>Giá nhập</label>
                    <input type="text" name="gia_nhap">
                    <span>USD</span>
                </div>
            </div>
            <div class="popup-row-oto">
                <div class="popup-field-oto with-icon">
                    <label>Ngày nhập</label>
                    <input type="date" name="ngay_nhap">
                    <img src="icons/Calendar.png" class="input-icon">
                </div>
                <div class="popup-field-oto">
                    <label>Biển số xe</label>
                    <input type="text" name="bien_so">
                </div>
            </div>
            <div class="popup-actions-oto">
                <button type="button" class="popup-submit-oto">Sửa</button>
                <button type="button" class="popup-cancel-oto">Thoát</button>
            </div>
        </form>
    </div>
</div>

<!-- Popup Xác nhận Xóa -->
<div class="popup-overlay" id="popupDeleteConfirm" style="display:none;">
    <div class="popup-content popup-delete">
        <img src="{{ asset('icons/Alert circle.png') }}" alt="Cảnh báo" class="delete-icon">
        <p class="delete-message">Bạn chắc chắn muốn xóa dữ liệu hiện tại hay không? Những dữ liệu này sẽ không thể khôi phục.</p>
        <div class="delete-actions">
            <button type="button" class="popup-cancel-delete">Hủy</button>
            <button type="button" class="popup-confirm-delete">OK</button>
        </div>
    </div>
</div>
