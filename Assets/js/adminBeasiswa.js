const modalOverlayAdd = document.querySelector(".modal-overlay-add");
const modalAdd = document.querySelector(".modal-add");
const modalOverlayEdit = document.querySelector(".modal-overlay-edit");
const modalEdit = document.querySelector(".modal-edit");
const closeBtnTop = document.querySelector(".close-modal");
const closeBtnTopEdit = document.querySelector(".close-modal-edit");
const closeBtnBtm = document.querySelector("#close__btn");
const closeBtnBtmEdit = document.querySelector("#close__btn__edit");
const addBtn = document.querySelector(".add__btn");
const resetBtn = document.querySelector("#reset__btn");
const form = document.querySelector('#add__form');
const deleteBtns = document.querySelectorAll('.delete');
const editBtns = document.querySelectorAll('.edit');
const imageBtn  = document.querySelector("#profil");
const profilModal = document.querySelector(".profil__modal");
const logoutBtn = document.querySelector("#logout");
const bukaDate = document.getElementById('periode__daftar');
const tutupDate = document.getElementById('periode__tutup');
const uploadBanner = document.getElementById('image');


const showModalAddData = () => {
  modalOverlayAdd.classList.add("active");
  modalAdd.classList.add("active");
};

const showModalEditData = () => {
  modalOverlayEdit.classList.add("active");
  modalEdit.classList.add("active");
};

const hideModal = () => {
  modalOverlayAdd.classList.remove("active");
  modalAdd.classList.remove("active");
};

const hideModalEdit = () => {
  modalOverlayEdit.classList.remove("active");
  modalEdit.classList.remove("active");
};
  

const resetForm = () => {
  return confirm('Apakah Anda Yakin?') == true ? form.reset() : alert('Reset dibatalkan');
};

const deleteData = () => {
  return confirm('Apakah Anda Yakin?') == true ? alert('Data berhasil dihapus'): alert('Hapus data dibatalkan');
};

addBtn.addEventListener("click", showModalAddData);

closeBtnTop.addEventListener("click", hideModal);
closeBtnTopEdit.addEventListener("click", hideModalEdit);

closeBtnBtm.addEventListener("click", hideModal);
closeBtnBtmEdit.addEventListener("click", hideModalEdit);

resetBtn.addEventListener('click', resetForm);

deleteBtns.forEach(deleteBtn => {
  deleteBtn.addEventListener('click', deleteData);
});

editBtns.forEach(editBtn => {
  editBtn.addEventListener('click', showModalEditData);
});


imageBtn.addEventListener("click", () => {
  profilModal.style.display = profilModal.style.display === "block" ? "none" : "block";
});

logoutBtn.addEventListener("click", () => {
  window.location.href = "../login.html";
});

tutupDate.onchange = () => {
  if (tutupDate.value < bukaDate.value) {
    alert('Tanggal yang diinput tidak valid!');
    tutupDate.value = null;
    bukaDate.value = null;
  }
};

uploadBanner.onchange = () => {
  let file = uploadBanner.value;
  const fileExt = file.substring(file.lastIndexOf('.') + 1).toLowerCase();

  if (!(fileExt == "png" || fileExt == "jpeg" || fileExt == "jpg")) {
    alert('Hanya menerima file gambar dengan format png, jpeg, atau jpg!');
    uploadBanner.type = '';
    uploadBanner.type = 'file';
  }
};

