const modalBtn = document.querySelector(".btn__jawab");
const batalBtn = document.querySelector("#batal");
const modal = document.querySelector(".modal__container");


modalBtn.addEventListener('click', () => {
  modal.style.display = 'block';
});

batalBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});
