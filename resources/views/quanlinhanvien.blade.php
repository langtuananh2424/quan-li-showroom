@include('layouts.adminheader')
<link rel="stylesheet" href="{{ asset('css/quanlinhanvien-style.css') }}">
<div class="container-oto">
    <div class="oto-banner">
        <img src="images/admin-banner.png" alt="banner" class="oto-banner-img">
    </div>
    <div class="oto-content">
        <div class="oto-title-row" style="padding-bottom: 0;">
            <h2 class="oto-title" style="margin-bottom: 12px;">DANH SÁCH NHÂN VIÊN</h2>
            <a href="#" class="oto-add-btn" id="btnShowAddNhanVien" style="align-self: flex-end; margin-bottom: 12px;">Thêm nhân viên</a>
        </div>
        <table class="oto-table">
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Mật khẩu</th>
                    <th>Họ tên</th>
                    <th>Chức vụ</th>
                    <th>Chi tiết</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>RA0001</td>
                    <td>*******</td>
                    <td>Bùi Khắc Huy</td>
                    <td>Sales</td>
                    <td>
                        <img src="icons/Phone.png" alt="phone">
                        0987654121<br>
                        <img src="icons/Mail.png" alt="email">
                        huynguyen1.com<br>
                        <img src="icons/Map.png" alt="location">
                        Hà Nội
                    </td>
                    <td>Đang hoạt động</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>RA0002</td>
                    <td>*******</td>
                    <td>Trần Tiến Đạt</td>
                    <td>Kế toán</td>
                    <td>
                        <img src="icons/Phone.png" alt="phone">
                        0918273645<br>
                        <img src="icons/Mail.png" alt="email">
                        ttdat@gmail.com<br>
                        <img src="icons/Map.png" alt="location">
                        Nam Định
                    </td>
                    <td>Mất kết nối</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>Admin</td>
                    <td>*******</td>
                    <td>Đinh Quang Đạt</td>
                    <td>CEO</td>
                    <td>
                        <img src="icons/Phone.png" alt="phone">
                        0546372819<br>
                        <img src="icons/Mail.png" alt="email">
                        dqdat@gmail.com<br>
                        <img src="icons/Map.png" alt="location">
                        Nghệ An
                    </td>
                    <td>Mất kết nối</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>RA0004</td>
                    <td>*******</td>
                    <td>Nguyễn Thành Đồng</td>
                    <td>Kỹ thuật</td>
                    <td>
                        <img src="icons/Phone.png" alt="phone">
                        0987652170<br>
                        <img src="icons/Mail.png" alt="email">
                        dongth@gmail.com<br>
                        <img src="icons/Map.png" alt="location">
                        Hải Dương
                    </td>
                    <td>Mất kết nối</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>RA0005</td>
                    <td>*******</td>
                    <td>Bạch Quốc Huy</td>
                    <td>Trưởng phòng</td>
                    <td>
                        <img src="icons/Phone.png" alt="phone">
                        0987654321<br>
                        <img src="icons/Mail.png" alt="email">
                        quochuy@gmail.com<br>
                        <img src="icons/Map.png" alt="location">
                        Bắc Biên
                    </td>
                    <td>Mất kết nối</td>
                    <td class="oto-actions">
                        <a href="#" class="oto-edit"><img src="icons/edit.png" alt="edit"></a>
                        <a href="#" class="oto-delete"><img src="icons/delete.png" alt="delete"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="oto-pagination" style="margin-bottom: 0;">
            <span><</span>
            <a href="#" class="oto-page active">1</a>
            <a href="#" class="oto-page">2</a>
            <span>></span>
        </div>
    </div>
</div>
@include('layouts.adminfooter')

<!-- Popup Thêm Nhân Viên -->
<div class="popup-overlay" id="popupAddNhanVien" style="display:none;">
  <div class="popup-content">
    <h2 class="popup-title">Thêm Nhân Viên</h2>
    <form class="popup-form">
      <div class="popup-left">
        <div class="popup-avatar-section">
          <img src="https://img.icons8.com/ios-filled/100/000000/user-male-circle.png" alt="avatar" class="popup-avatar">
          <input type="file" id="avatarUpload" style="margin-top:8px;">
        </div>
      </div>
      <div class="popup-right">
        <div class="popup-row">
          <div class="popup-field">
            <label>Mã nhân viên</label>
            <input type="text" placeholder="Mã nhân viên">
          </div>
          <div class="popup-field">
            <label>Mật khẩu</label>
            <input type="password" placeholder="Mật khẩu">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Họ và tên</label>
            <input type="text" placeholder="Họ và tên">
          </div>
          <div class="popup-field">
            <label>Giới tính</label>
            <select><option>Giới tính</option><option>Nam</option><option>Nữ</option><option>Khác</option></select>
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Ngày sinh</label>
            <input type="date" placeholder="Ngày sinh">
          </div>
          <div class="popup-field">
            <label>Quê quán</label>
            <input type="text" placeholder="Quê quán">
          </div>
          <div class="popup-field">
            <label>Email</label>
            <input type="email" placeholder="Email">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field" style="flex:1;">
            <label>Địa chỉ thường trú</label>
            <input type="text" placeholder="Địa chỉ thường trú" style="width:100%;">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Điện thoại</label>
            <input type="text" placeholder="Điện thoại">
          </div>
          <div class="popup-field">
            <label>Chức vụ</label>
            <select><option>Chức vụ</option><option>Sales</option><option>Kế toán</option><option>Kỹ thuật</option><option>Trưởng phòng</option><option>CEO</option></select>
          </div>
          <div class="popup-field">
            <label>Ngày vào làm</label>
            <input type="date" placeholder="Ngày vào làm">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Dân tộc</label>
            <input type="text" placeholder="Dân tộc">
          </div>
          <div class="popup-field">
            <label>Tôn giáo</label>
            <input type="text" placeholder="Tôn giáo">
          </div>
        </div>
        <div class="popup-actions">
          <button type="button" class="popup-cancel">Thoát</button>
          <button type="button" class="popup-submit">Thêm</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Popup Sửa Nhân Viên -->
<div class="popup-overlay" id="popupEditNhanVien" style="display:none;">
  <div class="popup-content">
    <h2 class="popup-title">Sửa Nhân Viên</h2>
    <form class="popup-form">
      <div class="popup-left">
        <div class="popup-avatar-section">
          <img src="https://img.icons8.com/ios-filled/100/000000/user-male-circle.png" alt="avatar" class="popup-avatar">
          <input type="file" id="avatarUploadEdit" style="margin-top:8px;">
        </div>
      </div>
      <div class="popup-right">
        <div class="popup-row">
          <div class="popup-field">
            <label>Mã nhân viên</label>
            <input type="text" placeholder="Mã nhân viên">
          </div>
          <div class="popup-field">
            <label>Mật khẩu</label>
            <input type="password" placeholder="Mật khẩu">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Họ và tên</label>
            <input type="text" placeholder="Họ và tên">
          </div>
          <div class="popup-field">
            <label>Giới tính</label>
            <select><option>Giới tính</option><option>Nam</option><option>Nữ</option><option>Khác</option></select>
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Ngày sinh</label>
            <input type="date" placeholder="Ngày sinh">
          </div>
          <div class="popup-field">
            <label>Quê quán</label>
            <input type="text" placeholder="Quê quán">
          </div>
          <div class="popup-field">
            <label>Email</label>
            <input type="email" placeholder="Email">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field" style="flex:1;">
            <label>Địa chỉ thường trú</label>
            <input type="text" placeholder="Địa chỉ thường trú" style="width:100%;">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Điện thoại</label>
            <input type="text" placeholder="Điện thoại">
          </div>
          <div class="popup-field">
            <label>Chức vụ</label>
            <select><option>Chức vụ</option><option>Sales</option><option>Kế toán</option><option>Kỹ thuật</option><option>Trưởng phòng</option><option>CEO</option></select>
          </div>
          <div class="popup-field">
            <label>Ngày vào làm</label>
            <input type="date" placeholder="Ngày vào làm">
          </div>
        </div>
        <div class="popup-row">
          <div class="popup-field">
            <label>Dân tộc</label>
            <input type="text" placeholder="Dân tộc">
          </div>
          <div class="popup-field">
            <label>Tôn giáo</label>
            <input type="text" placeholder="Tôn giáo">
          </div>
        </div>
        <div class="popup-actions">
          <button type="button" class="popup-cancel">Thoát</button>
          <button type="button" class="popup-submit popup-edit">Sửa</button>
        </div>
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
