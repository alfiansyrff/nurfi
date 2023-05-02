const searchInput = document.querySelector('.search__input');
const tableRows = document.querySelectorAll('tr');
const typeInterval = 500;
let typingTimer;

/*
  Fungsi Live Search
*/
const liveSearch = () => {
  let searchValue = searchInput.value;

  for (let i = 1; i < tableRows.length; i++) {
    if (tableRows[i].innerHTML.toLowerCase().includes(searchValue.toLowerCase())) {
      tableRows[i].classList.remove('hidden');
    } else {
      tableRows[i].classList.add('hidden');
    }
  }
}

/*
  Event keyup
*/
searchInput.addEventListener('keyup', () => {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(liveSearch, typeInterval);
})
