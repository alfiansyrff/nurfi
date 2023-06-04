<?php
  session_start();
  require_once('./connection/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/isiBelajar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">

  <title>Nurfi | Sumber Belajar</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="#"><img src="./Assets/image/nurfi-logo.png" alt="Logo">Nurfi</a>
    </div>
    <ul class="menu">
      <li><a href="./index.html" class="hover-underline-animation">Beranda</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown__btn hover-underline-animation">Beasiswa
          <img src="./Assets/image/down-arrow.png" alt="down-arrow" id="dropdown__symbol">
        </a>
        <div class="dropdown__content">
          <a href="./nurfi.html">Beasiswa Nurfi</a>
          <a href="./beasiswa.html">Beasiswa Umum</a>
        </div>
      </li>
      <li><a href="./tips.html" class="hover-underline-animation">Tips</a></li>
      <li><a href="./forum.html" class="hover-underline-animation">Forum</a></li>
      <li><a href="./belajar.html" class="hover-underline-animation">Belajar</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown__btn hover-underline-animation">Berbagi
          <img src="./Assets/image/down-arrow.png" alt="down-arrow" id="dropdown__symbol">
        </a>
        <div class="dropdown__content">
          <a href="./donasi.html">Ikut Donasi</a>
          <a href="./motivasi.html">Tips & Motivasi</a>
        </div>
      </li>
    </ul>
    <div class="tombol">
      <a href="./login.html">Masuk</a>
      <a href="./register.html">Daftar</a>
    </div>
    <span class="toggle-menu">&#9776;</span>
  </nav>

  <!-- End of Navbar -->

  <!-- Scroll Indicator -->
  <div class="indicator">
    <div class="indicator__container">
      <div id="indicator__bar"></div>
    </div>
  </div>
  <!-- End of scroll indicator -->


  <div class="about__video">
    <h2>Membuat CV Beasiswa</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta modi consequuntur velit totam inventore, fugiat dolor eligendi non tempore animi! Minima vel numquam quas illum?</p>
  </div>
  <div class="button">
    <a href="#" id="play">Tonton Video</a>
  </div>
  <div class="hidden">
    <div class="video">
      <iframe width="760" height="400"
      src="https://www.youtube.com/embed/8-06TUu0_I8">
    </iframe>
  </div>
  </div>
  <div class="list__belajar">
    <div class="top">
      <h3>
        Daftar Sumber Belajar Lainnya
      </h3>
      <div class="border">
      </div>
    </div>
    <div class="card">
      <h4>
        Rahasia Menghadapi Wawancara
      </h4>
    </div>
    <div class="card">
      <h4>
        Listening TOEFL
      </h4>
    </div>
    <div class="card">
      <h4>
        Reading TOEFL
      </h4>
    </div>

  </div>

  <!-- footer -->
  <footer>
    <div class="footer-wrapper">
      <div class="info-footer">
        <h5>Hubungi Kami</h5>
        <address>
          Jalan Otto Iskandar Dinata No. 64 Jakarta Timur
          <hr>
          <p> Atau </p>
          <a href="mailto:nurfi@gmail.com" id="email-btn">Kirim Email</a>
        </address>
      </div>
      <div class="menu-footer">
        <ul>
          <li><h5>Menu</h5></li>
          <li> <a href="#" >Home</a></li>
          <li> <a href="#" target="_self">Beasiswa</a></li>
          <li> <a href="#">Tips</a></li>
          <li> <a href="#">Forum</a></li>
          <li> <a href="#">Belajar</a></li>
       </ul>
      </div>
      <div class="copyright">
        <img src="./Assets/image/nurfi-logo.png" alt="logo">
        <p>&copy; 2023 Nurfi | Seribu Cahaya Harapan Pemuda </p>
        <img src="./Assets/image/instagram.png" alt="" class="sosmed">
        <img src="./Assets/image/tiktok.png" alt="" class="sosmed">
      </div>
    </div>
  </footer>
  <!-- end of footer -->

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="./Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script>
    const playBtn = document.querySelector("#play");
    const hiddenDiv = document.querySelector(".hidden");

    playBtn.addEventListener('click', () => {
      hiddenDiv.style.display = 'block';
      hiddenDiv.style.transition = "1s";
    })
  </script>

  <script src="./Assets/js/loader.js"></script>
  <script src="./Assets/js/responsiveNav.js"></script>
  <script src="./Assets/js/indicatorBar.js"></script>
</body>
</html>
