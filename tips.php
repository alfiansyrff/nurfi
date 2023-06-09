<?php
  require_once('./connection/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/tips.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
  <title>Nurfi | Tips</title>
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

   <!-- Heading -->
   <div class="heading__wrapper">
    <div class="title__side">
      <h3>Tips dan Motivasi</h3>
      <p>Berbagai tips serta motivasi yang diberikan secara khusus oleh para peraih awardee berbagai beasiswa</p>
    </div>
    <div class="img__side">
      <img src="./Assets/image/tips.svg" alt="">
    </div>
  </div>
  <!-- End of Heading -->

  <!-- Search Field -->
  <div class="search">

    <input type="text" placeholder="Cari Tips" class="search__input">

    <img src="./Assets/image/search-icon.svg" alt="search-icon" class="search-icon">

  </div>
  <!-- End of Search Field -->

  <!-- Content -->
  <div class="content">
    <?php
      $query_select = "SELECT * FROM tips_motivasi";
      $result = mysqli_query($conn, $query_select);
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="main__content">
          <div class="profile">
            <img src="./Assets/image/profile.png" alt="profil penulis" width="100px">
          </div>
          <div class="slug">
            <h4><?php echo $row['judul']; ?></h4>
            <p><?php echo $row['slug_content']; ?></p>
            <a href="./isiTips.html">Baca Selengkapnya</a>
          </div>
          <div class="info">
            <p class="name"><?php echo $row['penulis']; ?></p>
            <p class="awardee">Djarum Awardee</p>
          </div>
        </div>

        <div class="separator"></div>
    <?php
      }
    ?>
  <!-- End of Content -->

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

  <script src="./Assets/js/tips.js"></script>
  <script src="./Assets/js/indicatorBar.js"></script>
  <script src="./Assets/js/activeLink.js"></script>
  <script src="./Assets/js/responsiveNav.js"></script>
  <script src="./Assets/js/loader.js"></script>
</body>

</html>
