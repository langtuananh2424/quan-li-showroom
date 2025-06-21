document.addEventListener('DOMContentLoaded', function() {
  // Popup Thêm Khách Hàng
  var btnShow = document.getElementById('btnShowAddKhachHang');
  var popup = document.getElementById('popupAddKhachHang');
  if (btnShow && popup) {
    var btnCancel = popup.querySelector('.popup-cancel');
    btnShow.addEventListener('click', function(e) {
      e.preventDefault();
      popup.style.display = 'flex';
    });
    popup.addEventListener('click', function(e) {
      if (e.target === popup) popup.style.display = 'none';
    });
    btnCancel.addEventListener('click', function() {
      popup.style.display = 'none';
    });
  }
});
