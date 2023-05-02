const modalOverlay = document.querySelector(".modal-overlay");
const modal = document.querySelector(".modal");
const closeBtnTop = document.querySelector(".close-modal");
const closeBtnBtm = document.querySelector("#close__btn");
const addBtn = document.querySelector(".add__btn");
const resetBtn = document.querySelector("#reset__btn");
const form = document.querySelector('#add__form');
const deleteBtn = document.querySelector('.delete');
const editBtn = document.querySelector('.edit');
const imageBtn  = document.querySelector("#profil");
const profilModal = document.querySelector(".profil__modal");
const logoutBtn = document.querySelector("#logout");
const banner = document.getElementById('banner');

const showModal = () => {
  modalOverlay.classList.add("active");
  modal.classList.add("active");
};

const hideModal = () => {
  modalOverlay.classList.remove("active");
  modal.classList.remove("active");
};

const resetForm = () => {
  return confirm('Apakah Anda Yakin?') == true ? form.reset() : alert('Reset dibatalkan');
};

const deleteData = () => {
  return confirm('Apakah Anda Yakin?') == true ? alert('Data berhasil dihapus'): alert('Hapus data dibatalkan');
};

const editData = () => {
  return alert('Data belum dapat diedit');
};

addBtn.addEventListener("click", showModal);

closeBtnTop.addEventListener("click", hideModal);

closeBtnBtm.addEventListener("click", hideModal);

resetBtn.addEventListener('click', resetForm);

deleteBtn.addEventListener('click', deleteData);

editBtn.addEventListener('click', editData);

imageBtn.addEventListener("click", () => {
  profilModal.style.display = profilModal.style.display === "block" ? "none" : "block";
});

logoutBtn.addEventListener("click", () => {
  window.location.href = "../login.html";
});

banner.onchange = () => {
  let file = banner.value;
  const fileExt = file.substring(file.lastIndexOf('.') + 1).toLowerCase();

  if (!(fileExt == "png" || fileExt == "jpeg" || fileExt == "jpg")) {
    alert('Hanya menerima file gambar dengan format png, jpeg, atau jpg!');
    banner.type = '';
    banner.type = 'file';
  }
};