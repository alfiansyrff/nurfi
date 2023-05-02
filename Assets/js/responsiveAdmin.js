const toggle = document.querySelector('.toggle-icon');
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content');
const topContent = document.querySelector('.top');

toggle.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  content.classList.toggle('full');
  topContent.classList.toggle('fullWidth');
});