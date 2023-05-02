const deleteBtn = document.querySelector('.delete');
const editBtn = document.querySelector('.edit');
const imageBtn  = document.querySelector("#profil");
const profilModal = document.querySelector(".profil__modal");
const logoutBtn = document.querySelector("#logout");


const deleteData = () => {
  return confirm('Apakah Anda Yakin?') == true ? alert('Data berhasil dihapus'): alert('Hapus data dibatalkan');
};

const editData = () => {
  alert('Data belum dapat diedit');
};

deleteBtn.addEventListener('click', deleteData);

editBtn.addEventListener('click', editData);

imageBtn.addEventListener("click", () => {
  profilModal.style.display = profilModal.style.display === "block" ? "none" : "block";
});

logoutBtn.addEventListener("click", () => {
  window.location.href = "../login.html";
});
