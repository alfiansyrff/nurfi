const modalOverlay = document.querySelector(".modal-overlay");
const modal = document.querySelector(".modal");
const closeBtnTop = document.querySelector(".close-modal");
const closeBtnBtm = document.querySelector("#close__btn");
const addBtn = document.querySelector(".add__btn");
const resetBtn = document.querySelector("#reset__btn");
const form = document.querySelector('#add__form');
// const deleteBtn = document.querySelector('.delete');
const editBtn = document.querySelector('.edit');
const imageBtn  = document.querySelector("#profil");
const profilModal = document.querySelector(".profil__modal");
const logoutBtn = document.querySelector("#logout")

const showModal = () => {
  modalOverlay.classList.add("active");
  modal.classList.add("active");
}

const hideModal = () => {
  modalOverlay.classList.remove("active");
  modal.classList.remove("active");
}

const resetForm = () => {
  confirm('Apakah Anda Yakin?') == true ? form.reset() : alert('Reset dibatalkan');
}

// const deleteData = () => {
//   confirm('Apakah Anda Yakin?') == true ? alert('Data berhasil dihapus'): alert('Hapus data dibatalkan');
// }

const editData = () => {
  alert('Data belum dapat diedit')
}

addBtn.addEventListener("click", showModal);

closeBtnTop.addEventListener("click", hideModal);

closeBtnBtm.addEventListener("click", hideModal);

resetBtn.addEventListener('click', resetForm);

// deleteBtn.addEventListener('click', deleteData);

editBtn.addEventListener('click', editData);

imageBtn.addEventListener("click", () => {
  profilModal.style.display = profilModal.style.display === "block" ? "none" : "block";
})

logoutBtn.addEventListener("click", () => {
  window.location.href = "../login.html";
})

function openModal(editId, editJudul, editDeskripsi, editLink) {
    // Populate the modal fields with the retrieved data
    document.getElementById('judul').value = editJudul;
    document.getElementById('deskripsi').value = editDeskripsi;
    document.getElementById('link').value = editLink;

    // Set the edit_id value in the form action URL
    document.getElementById('edit__form').action = "../admin/sumberBelajar.php?edit_id=" + editId;

    // Display the modal
    modalOverlay.classList.add("active");
    modal.classList.add("active");
  }
