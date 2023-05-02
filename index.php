<?php
  require_once('connection/db.php');

  session_start();

  if($_SESSION['status'] != 'login') {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/style.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
  <!-- Link Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Poppins:wght@300;400;600&family=Roboto:wght@100;300;400;700&family=Spectral:wght@300;400;600;700&display=swap" rel="stylesheet">

  <title>Nurfi | Home</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="#"><img src="./Assets/image/nurfi-logo.png" alt="Logo">Nurfi</a>
    </div>
    <ul class="menu">
      <li class=" active"><a href="./index.html" class="hover-underline-animation">Beranda</a></li>
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


  <!-- Content Carousel -->
  <section class="carousel">
    <div class="text">
      <h1>Nurfi</h1>
      <p id="text">Seribu Cahaya Harapan Pemuda</p>
    </div>
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
  </section>

  <!-- End of Content Carousel -->

  <!-- Content Kenapa Kami -->
  <section class="goal">
    <div class="headline">
      <h3>Kenapa Kami Peduli?</h3>
      <p>Kami ingin setiap pemuda Indonesia memiliki kesempatan untuk mewujudkan impian dan cita-citanya melalui platform ini.</p>
    </div>
    <div class="cards">
      <div class="card">
        <h4 class="title-card">Informasi Beasiswa</h4>
        <p class="text-card">Kami menyediakan berbagai informasi beasiswa baik dari jenjang S1 hingga S3</p>
      </div>
      <div class="card">
        <h4 class="title-card">Forum</h4>
        <p class="text-card">Forum disediakan untuk saling berdiskusi dan tukar pendapat bagi calon pendaftar beasiswa</p>
      </div>
      <div class="card">
        <h4 class="title-card">Tips & Sumber Belajar</h4>
        <p class="text-card">Berisi Tips dari para awardee beasiswa dan sumber pembelajaran untuk meningkatkan keterampilan bagi para pemuda</p>

      </div>
    </div>
  </section>
  <!-- End of content kenapa kami -->

  <!-- Content sejauh mana langkah kami -->
  <section class="step">
    <div class="step__title">
      <h3>Mari Melangkah Bersama Kami</h3>
    </div>
    <div class="step__content">
      <div class="community_img">
        <img src="./Assets/image/community.svg" alt="community image">
      </div>
      <div class="step_statistics">
        <div class="statistic">
          <h5>1.5K</h5>
          <p>Pemuda pengguna aktif</p>
        </div>
        <div class="statistic">
          <h5>100+</h5>
          <p>Mentor peraih awardee beasiswa</p>
          
        </div>
        <div class="statistic">
          <h5>500+</h5>
          <p>Materi sumber belajar</p>
        </div>
        <div class="statistic">
          <h5>50+</h5>
          <p>Donatur yang berkontribusi</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Content sejauh mana langkah kami -->

  <!-- Content Donasi -->
  <section class="donasi">
    <div class="donasi__content">
      <h3>Bantu Para Pemuda Mewujudkan Mimpi Mereka</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta quisquam ut eos nesciunt unde quas recusandae repudiandae quibusdam nisi veniam?</p>
      <div class="bantuan-container">
        <div class="bantuan-item">
          <div class="bantuan-circle" id="bantu__donasi">
            <img src="./Assets/image/gift.svg" alt="gambar donasi" >
          </div>
          <div class="bantuan-description">Ikut Donasi</div>
        </div>
        <div class="bantuan-item">
          <!-- <div class="bantuan-circle" id="bantu__motivasi"><span id="arrow">&#8677</span></div> -->
          <div class="bantuan-circle" id="bantu__motivasi">
            <img src="./Assets/image/send.svg" alt="gambar berbagi motivasi">
          </div>
          <div class="bantuan-description">Berbagi Tips dan Motivasi</div>
        </div>
      </div>
      
    </div>
    <div class="donasi__img">
      <img src="./Assets/image/donasi.svg" alt="ilustrasi donasi">
    </div>
  </section>
  <!-- End of Content Donasi -->

  <!-- footer -->
  <footer>
    <div class="footer-wrapper">
      <div class="info">
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
          <li> <a href="logout.php">logout</a></li>

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

  <script src="./Assets/js/script.js"></script>
  <script src="./Assets/js/indicatorBar.js"></script>
  <script src="./Assets/js/responsiveNav.js"></script>
  <script src="./Assets/js/loader.js"></script>
</body>
</html>