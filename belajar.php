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
  <link rel="stylesheet" href="./Assets/css/belajar.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
  <title>Nurfi | Belajar</title>
</head>
<body>

  <!-- Navbar -->
  <!-- <nav class="navbar">
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
  </nav> -->
  <?php include('partials/navbar.php'); ?>
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
      <h3>Belajar dan Upgrade Skill</h3>
      <p>Tingkatkan skill kalian dengan berbagai akses pembelajaran yang relevan</p>
    </div>
    <div class="img__side">
      <img src="./Assets/image/Write.svg" alt="Gambar Belajar Nurfi">
    </div>
  </div>
  <!-- End of Heading -->

  <!-- Search Field -->

  <div class="search">

    <input type="text" placeholder="Cari Materi Belajar" class="search__input">

    <img src="./Assets/image/search-icon.svg" alt="search-icon" class="search-icon">

  </div>

  <!-- End of search field -->

  <!-- Content -->
  <div class="cards">
    <!-- <div class="card">
      <h3 class="card__title">Bagaimana cara Membuat CV Untuk Beasiswa?
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div> -->

    <?php
      $query_select = "SELECT * FROM sumber_belajar";
      $result = mysqli_query($conn, $query_select);
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <div class="card">
        <h3 class="card__title"><?php echo $row['judul']; ?></h3>
        <p class="card__content"><?php echo $row['deskripsi']; ?></p>
        <div class="card__date"><?php echo $row['tanggal_upload']; ?></div>
        <div class="card__arrow">
          <a href="isiBelajar.php?id=<?php echo $row['id']; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
              <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
            </svg>
          </a>
        </div>
      </div>
    <?php
      }
    ?>


    <!-- <div class="card">

      <h3 class="card__title">Bagaimana cara mendaftar Beasiswa Djarum ?
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Rahasia Menghadapi Wawancara
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Listening TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Reading TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Writing TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Grammar TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Essay Beasiswa
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Reading TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div>

    <div class="card">
      <h3 class="card__title">Reading TOEFL
      </h3>
      <p class="card__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <div class="card__date">
          April 15, 2022
      </div>
      <div class="card__arrow">
        <a href="./isiBelajar.html">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
          </svg>
        </a>
        </div>
    </div> -->

  </div>
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

  <script src="./Assets/js/activeLink.js"></script>
  <script src="./Assets/js/indicatorBar.js"></script>
  <script src="./Assets/js/liveSearch.js"></script>
  <script src="./Assets/js/responsiveNav.js"></script>
  <script src="./Assets/js/loader.js"></script>
  <script src="./Assets/js/belajar.js"></script>

</body>
</html>
