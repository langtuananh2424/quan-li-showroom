import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
  // Dropdown Login
  const loginToggle = document.getElementById('login-toggle');
  const loginDropdown = document.getElementById('login-dropdown');

  if (loginToggle && loginDropdown) {
    loginToggle.addEventListener('click', function(e) {
      e.preventDefault();
      loginDropdown.style.display = loginDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!loginToggle.contains(e.target) && !loginDropdown.contains(e.target)) {
        loginDropdown.style.display = 'none';
      }
    });
  }

  // Popup Logout Confirm
  const logoutButton = document.getElementById('logout-button');
  const popupLogout = document.getElementById('popupLogoutConfirm');
  if (logoutButton && popupLogout) {
    const btnCancel = popupLogout.querySelector('.popup-cancel-logout');
    const btnConfirm = popupLogout.querySelector('.popup-confirm-logout');

    logoutButton.addEventListener('click', e => {
      e.preventDefault();
      popupLogout.style.display = 'flex';
    });

    const closePopup = () => {
      popupLogout.style.display = 'none';
    };

    btnCancel.addEventListener('click', closePopup);
    popupLogout.addEventListener('click', e => {
      if (e.target === popupLogout) {
        closePopup();
      }
    });

    btnConfirm.addEventListener('click', () => {
      // Redirect to login page
      window.location.href = '/login';
    });
  }

  // Các popup khác...
  var btnShow = document.getElementById('btnShowAddNhanVien');
  var popup = document.getElementById('popupAddNhanVien');
  var btnCancel = popup.querySelector('.popup-cancel');
  // Đóng popup khi click nền mờ (trừ phần content)
  popup.addEventListener('click', function(e) {
    if (e.target === popup) popup.style.display = 'none';
  });
  btnShow.addEventListener('click', function(e) {
    e.preventDefault();
    popup.style.display = 'flex';
  });
  btnCancel.addEventListener('click', function() {
    popup.style.display = 'none';
  });

  // Popup Sửa Nhân Viên
  var popupEdit = document.getElementById('popupEditNhanVien');
  var btnEditList = document.querySelectorAll('.oto-edit');
  var btnEditCancel = popupEdit.querySelector('.popup-cancel');
  btnEditList.forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      // Lấy dòng tr chứa nút sửa
      var tr = btn.closest('tr');
      // Lấy dữ liệu từ các ô
      var tds = tr.querySelectorAll('td');
      // Mapping dữ liệu từ bảng
      var maNV = tds[0].innerText.trim();
      var matKhau = tds[1].innerText.trim();
      var hoTen = tds[2].innerText.trim();
      var chucVu = tds[3].innerText.trim();
      var chiTiet = tds[4].innerHTML;
      // Tách các thông tin chi tiết
      var queQuan = '';
      var email = '';
      var dienThoai = '';
      var lines = chiTiet.split('<br>');
      lines.forEach(function(line) {
        if(line.includes('Phone.png')) dienThoai = line.replace(/<[^>]+>/g, '').trim();
        if(line.includes('Mail.png')) email = line.replace(/<[^>]+>/g, '').trim();
        if(line.includes('Map.png')) queQuan = line.replace(/<[^>]+>/g, '').trim();
      });
      // Đổ dữ liệu vào popup sửa
      var popupFields = popupEdit.querySelectorAll('.popup-field input, .popup-field select');
      popupFields[0].value = maNV;
      popupFields[1].value = '';
      popupFields[2].value = hoTen;
      popupFields[3].value = '';
      popupFields[4].value = '';
      popupFields[5].value = queQuan;
      popupFields[6].value = email;
      popupFields[7].value = '';
      popupFields[8].value = dienThoai;
      popupFields[9].value = chucVu;
      popupFields[10].value = '';
      popupFields[11].value = '';
      popupFields[12].value = '';
      // Hiện popup
      popupEdit.style.display = 'flex';
    });
  });
  popupEdit.addEventListener('click', function(e) {
    if (e.target === popupEdit) popupEdit.style.display = 'none';
  });
  btnEditCancel.addEventListener('click', function() {
    popupEdit.style.display = 'none';
  });

  // Popup Xóa Nhân Viên
  const popupDelete = document.getElementById('popupDeleteConfirm');
  if (popupDelete) {
    const deleteButtons = document.querySelectorAll('.oto-table .oto-delete');
    let rowToDelete = null;
    const btnCancel = popupDelete.querySelector('.popup-cancel-delete');
    const btnConfirm = popupDelete.querySelector('.popup-confirm-delete');

    deleteButtons.forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        rowToDelete = btn.closest('tr');
        popupDelete.style.display = 'flex';
      });
    });

    const closePopup = () => {
      popupDelete.style.display = 'none';
      rowToDelete = null;
    };

    btnCancel.addEventListener('click', closePopup);
    popupDelete.addEventListener('click', e => {
      if (e.target === popupDelete) {
        closePopup();
      }
    });

    btnConfirm.addEventListener('click', () => {
      if (rowToDelete) {
        rowToDelete.remove();
      }
      closePopup();
    });
  }
});
