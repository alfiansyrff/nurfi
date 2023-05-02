/*
  Deklarasi Variabel
*/
const searchInput = document.querySelector('.search__input');
const cards = document.querySelectorAll('.card');
const typeInterval = 500;
let typingTimer;

/*
  Fungsi Live Search
*/
const liveSearch = () => {
  let searchValue = searchInput.value;

  cards.forEach(card => {
    if (card.innerHTML.toLowerCase().includes(searchValue.toLowerCase())) {
      card.classList.remove('hidden__card');
    } else {
      card.classList.add('hidden__card');
    }
  });
}

/*
  Event keyup
*/
searchInput.addEventListener('keyup', () => {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(liveSearch, typeInterval);
})
