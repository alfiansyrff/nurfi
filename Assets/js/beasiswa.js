const filterButtons = document.querySelectorAll('.btn__container button');

const removeClass = () => {
  filterButtons.forEach(button => {
    button.classList.remove('btnActive');
  });
};

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    removeClass();
    button.classList.add('btnActive');
  });
});
    