/*
  Deklarasi Variabel
*/
const modalBtn = document.querySelector(".tanya__btn");
const batalBtn = document.querySelector("#batal");
const modal = document.querySelector(".modal__container");

/*
  Events
*/
modalBtn.addEventListener('click', () => {
  modal.style.display = 'block';
  btn.style.pointerEvents = 'none';
  btn.style.opacity = '0.5';
});

batalBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

