
/*
  Deklarasi Variabel
*/
const currentUrl = window.location.href;
const menuLinks = document.querySelectorAll('.menu a');

/*
  Loop
*/
menuLinks.forEach(link => {
  if (link.href === currentUrl) {
    menuLinks.forEach(item => {
      item.classList.remove('active');
    });

    link.parentElement.classList.add('active');
  }
});
