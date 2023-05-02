const toggleMenu = document.querySelector('.toggle-menu');
const menu = document.querySelector('.menu');
const tombolNav = document.querySelector('.tombol');


toggleMenu.addEventListener('click', () => {
  menu.classList.toggle('show');
  tombolNav.classList.toggle('show');
});
