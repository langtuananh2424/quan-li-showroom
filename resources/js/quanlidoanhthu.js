document.addEventListener('DOMContentLoaded', function() {
  // Popup Tạo doanh thu
  var btnShowDoanhThu = document.getElementById('btnShowAddDoanhThu');
  var popupDoanhThu = document.getElementById('popupAddDoanhThu');
  if (btnShowDoanhThu && popupDoanhThu) {
    var btnCancelDoanhThu = popupDoanhThu.querySelector('.popup-cancel');
    btnShowDoanhThu.addEventListener('click', function(e) {
      e.preventDefault();
      popupDoanhThu.style.display = 'flex';
    });
    popupDoanhThu.addEventListener('click', function(e) {
      if (e.target === popupDoanhThu) popupDoanhThu.style.display = 'none';
    });
    btnCancelDoanhThu.addEventListener('click', function() {
      popupDoanhThu.style.display = 'none';
    });
  }
});
