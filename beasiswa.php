<?php
  session_start();
  require_once('connection/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/beasiswa.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
  <title>Nurfi | Beasiswa</title>
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
        <a href="#" class="dropdown__btn hover-underline-animation">
          <span id="beasiswa">Beasiswa</span>
          <img src="./Assets/image/down-arrow.png" alt="down-arrow" id="dropdown__symbol">
        </a>
        <div class="dropdown__content">
          <a href="./nurfi.html" id="nurfi">Beasiswa Nurfi</a>
          <a href="./beasiswa.html" id="umum">Beasiswa Umum</a>
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

  <!-- Main Content -->
  <main>
    <!-- Filter By -->
    <div class="menu__filter">

      <h2>Pilih Jenjang Beasiswa</h2>

      <div class="btn__container">
        <button>S1</button>
        <button>S2</button>
        <button>S3</button>
        <button class="btnActive">Semua Jenjang</button>
      </div>

  </div>

  <!-- End of Filter By -->


  <!-- Cards -->
  <div class="cards">
    <?php
      $query_select = "SELECT * FROM beasiswa";
      $result = mysqli_query($conn, $query_select);
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card">
          <div class="card-image">

            <img src=<?php echo "./Assets/upload/beasiswa/" . $row['banner'] ?> alt="" width="20">
          </div>

          <div class="heading">
            <div class="title"> <?php echo $row['beasiswa'] ?> </div>
            <p class="description"> <?php echo implode(' ', array_slice(str_word_count($row['deskripsi'], 1), 0, 20)); ?> </p>
          </div>

          <div class="info">
            <div class="tanggal">

              <span><?php echo $row['waktu'] ?> </span>
            </div>
            <div class="btn">
              <a href= <?php echo $row['link_informasi'] ?> ><span class="arrow">&#8627;</span> Daftar</a>
            </div>
          </div>
        </div>
    <?php
      }
    ?>
    <!-- <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="https://djarumbeasiswaplus.org/"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="https://djarumbeasiswaplus.org/"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel2.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="https://djarumbeasiswaplus.org/"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel2.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel1.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel2.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="./Assets/image/carousel2.jpg" alt="">
      </div>

      <div class="heading">
        <div class="title"> Beasiswa Djarum </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam?</p>
      </div>

      <div class="info">
        <div class="tanggal">
          <span>Jumat</span>
          <span>(2-2-2023)</span>
        </div>
        <div class="btn">
          <a href="#"><span class="arrow">&#8627;</span> Daftar</a>
        </div>
      </div> -->
    </div>
    <!-- End of Cards -->

  </div>
</main>
  <!-- End of Main Content -->

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

    <script src="./Assets/js/beasiswa.js"></script>
    <script src="./Assets/js/activeLink.js"></script>
    <script src="./Assets/js/indicatorBar.js"></script>
    <script src="./Assets/js/responsiveNav.js"></script>
    <script src="./Assets/js/loader.js"></script>
</body>
</html>
