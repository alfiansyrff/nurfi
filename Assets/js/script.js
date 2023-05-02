const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");
const carousel = document.getElementsByClassName("carousel");
const text = document.getElementById("text");
const bantuDonasiBtn = document.getElementById("bantu__donasi");
const bantuMotivasiBtn = document.getElementById("bantu__motivasi");

const p1 = "Seribu Cahaya Harapan Pemuda";
const p2 = "Selamat datang di platform digital yang bantu kamu wujudukan cita-citamu";

let index = 0;

const showBackground = (n) => {
  console.log(carousel.length);
  if (n > carousel.length) {
    index = 1;
  }
  if (n < 1) {
    index = 0;
  }

  for (let i = 0; i < carousel.length; i++) {
    carousel[i].classList.remove("slide2"); 
    text.style.opacity = 0;
    text.style.transition = "all .5s ease";
    
    setTimeout(() => {
      text.textContent = p1;
      text.style.opacity = 1;
    }, 500);
  }

  carousel[index - 1].classList.add("slide2"); 
  text.classList.add("animateText");
  text.style.opacity = 0;
    text.style.transition = "all .5s ease";
    
    setTimeout(() => {
      text.textContent = p2;
      text.style.opacity = 1;
    }, 500);
};

const swipeBackground = (n) => {
  showBackground(index += n);
};

const donasiBtnEvent = () => {
  setTimeout(() => {
    window.location.href = "./donasi.html";
  }, 500);
};

const motivasiBtnEvent = () => {
  setTimeout(() => {
    window.location.href = "./motivasi.html";
  }, 500);
};

nextBtn.addEventListener('click', () => {
  swipeBackground(1);
});

prevBtn.addEventListener('click', () => {
  swipeBackground(-1);
});


bantuDonasiBtn.addEventListener("click", donasiBtnEvent);
bantuMotivasiBtn.addEventListener("click", motivasiBtnEvent);