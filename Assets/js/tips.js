/*
Variables Declaration
*/
const searchInput = document.querySelector('.search__input');
let typingTimer;
const typeInterval = 500;

  // Live search function
  const liveSearch = () => {
  let cards = document.querySelectorAll('.main__content');
  let searchValue = searchInput.value;

  for (let i = 0; i < cards.length; i++) {
    if (cards[i].innerHTML.toLowerCase().includes(searchValue.toLowerCase())) {
      cards[i].classList.remove('hidden__card');
    } else {
      cards[i].classList.add('hidden__card');
    }
  }
}

// Event Keyup
searchInput.addEventListener('keyup', () => {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(liveSearch, typeInterval);
})  

