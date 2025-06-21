document.addEventListener('DOMContentLoaded', function() {
  // Popup Thêm ô tô
  const btnShowAdd = document.getElementById('btnShowAddOto');
  const popupAdd = document.getElementById('popupAddOto');
  if (btnShowAdd && popupAdd) {
    const btnCancel = popupAdd.querySelector('.popup-cancel-oto');
    btnShowAdd.addEventListener('click', function(e) {
      e.preventDefault();
      popupAdd.style.display = 'flex';
    });
    popupAdd.addEventListener('click', function(e) {
      if (e.target === popupAdd) {
        popupAdd.style.display = 'none';
      }
    });
    btnCancel.addEventListener('click', function() {
      popupAdd.style.display = 'none';
    });
  }

  // Popup Sửa ô tô
  const popupEdit = document.getElementById('popupEditOto');
  const editButtons = document.querySelectorAll('.oto-edit');
  if (popupEdit && editButtons.length > 0) {
    const btnCancelEdit = popupEdit.querySelector('.popup-cancel-oto');

    editButtons.forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();

        // Lấy dữ liệu từ dòng trong bảng
        const row = btn.closest('tr');
        const cells = row.querySelectorAll('td');
        const data = {
          dong_xe: cells[1].innerText,
          mau: cells[2].innerText,
          gia_nhap: cells[3].innerText.replace(/,/g, ''),
          ngay_nhap: cells[4].innerText,
          bien_so: cells[5].innerText,
          so_km: cells[6].innerText.replace(/,/g, ''),
        };

        // Chuyển đổi ngày dd/mm/yyyy sang yyyy-mm-dd
        const dateParts = data.ngay_nhap.split('/');
        const isoDate = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;

        // Điền dữ liệu vào form
        popupEdit.querySelector('input[name="dong_xe"]').value = data.dong_xe;
        popupEdit.querySelector('input[name="mau"]').value = data.mau;
        popupEdit.querySelector('input[name="gia_nhap"]').value = data.gia_nhap;
        popupEdit.querySelector('input[name="ngay_nhap"]').value = isoDate;
        popupEdit.querySelector('input[name="bien_so"]').value = data.bien_so;
        popupEdit.querySelector('input[name="so_km"]').value = data.so_km;

        // Hiển thị popup
        popupEdit.style.display = 'flex';
      });
    });

    // Sự kiện đóng popup sửa
    popupEdit.addEventListener('click', function(e) {
      if (e.target === popupEdit) {
        popupEdit.style.display = 'none';
      }
    });
    btnCancelEdit.addEventListener('click', function() {
      popupEdit.style.display = 'none';
    });
  }

  // Popup Xóa ô tô
  const popupDelete = document.getElementById('popupDeleteConfirm');
  const deleteButtons = document.querySelectorAll('.oto-delete');
  let rowToDelete = null;

  if (popupDelete && deleteButtons.length > 0) {
    const btnCancelDelete = popupDelete.querySelector('.popup-cancel-delete');
    const btnConfirmDelete = popupDelete.querySelector('.popup-confirm-delete');

    deleteButtons.forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        rowToDelete = btn.closest('tr');
        popupDelete.style.display = 'flex';
      });
    });

    const closeDeletePopup = () => {
      popupDelete.style.display = 'none';
      rowToDelete = null;
    };

    btnCancelDelete.addEventListener('click', closeDeletePopup);
    popupDelete.addEventListener('click', e => {
      if (e.target === popupDelete) {
        closeDeletePopup();
      }
    });

    btnConfirmDelete.addEventListener('click', () => {
      if (rowToDelete) {
        rowToDelete.remove();
      }
      closeDeletePopup();
    });
  }
});
