<?php 
  session_start();
  ob_start();
  require_once('./connection/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/forum.css">
  <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
  <title>Nurfi | Forum</title>
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
      <h3>Forum Beasiswa</h3>
      <p>Kalian bisa bertanya atau berbagi mengenai perihal yang berkaitan dengan beasiswa</p>
      <a href="javascript:void(0);" class="tanya__btn">Buat pertanyaan</a>
      <a href="./Assets/pdf/aturan.pdf" target="_blank">Tata aturan</a>
      
    </div>
    <div class="img__side">
      <img src="./Assets/image/forum.svg" alt="search-icon">
    </div>
  </div>
  <!-- End of Heading -->

  <!-- Search Field -->
  <div class="search">

    <input type="text" placeholder="Cari Pertanyaan" class="search__input">

    <img src="./Assets/image/search-icon.svg" alt="search-icon" class="search-icon">

  </div>
  <!-- End of Search Field -->
  
  <!-- Flash Message -->
  <div id="flash-msg">  
    <?php 
      if(isset($_GET['sukses']) && $_GET['sukses'] == 1){
        echo "<p>Berhasil membuat pertanyaan!</p>";
      }
    ?>
  </div>
  <!-- End of flash message -->
  <!-- Content -->
  <div class="cards">
    <?php
    $query_select = "SELECT topik.*, users.username, users.email FROM topik INNER JOIN users ON users.id = topik.id_user";

    $result = mysqli_query($conn, $query_select);
    
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
       <div class="card">
        <h4 class="title-card"> <?php echo $row['judul']; ?> </h4>
        <div class="info">
          <span class="akun">  <?php echo '@' . $row['username']; ?> </span>
          <span class="tanggal"> <?php echo explode(' ', $row['tanggal'])[0]; ?> </span>
          <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
        </div>
      </div>
      <?php
    }
    ?>

    <!-- <div class="card">
      <h4 class="title-card">Bagaimana cara mendaftar Beasiswa Djarum ?</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Pentingkah Sertifikat IELTS?</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 bulan yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>  
    <div class="card">
      <h4 class="title-card">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div>
    <div class="card">
      <h4 class="title-card">Kendala pendaftaran beasiswa</h4>
      <div class="info">
        <span class="akun">@alfiansyarif</span>
        <span class="tanggal">1 minggu yang lalu</span>
        <a href="./pertanyaanForum.html" class="forum-btn">Lihat Diskusi</a>
      </div>
    </div> -->
  </div>
  <!-- End of Content -->

  <!-- Modal Pertanyaan -->
  <div class="modal__container">
    <div class="modal">
      <h1 id="judul-modal">Tulis Pertanyaanmu</h1>
      <form action="" method="POST" >
        <label for="judul">Judul</label>
        <input type="text" name="judul" value="" id="judul-pertanyaan">
        <label for="jawab">Deskripsi</label>
        <textarea name="jawab" id="jawab" cols="15" rows="10"></textarea>
        <div class="btn">
          <button id="batal" name="batal">Batal</button>
          <button id="kirim" name="kirim" >Kirim</button>

          <?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);

          if (isset($_POST['kirim'])) {
              
              date_default_timezone_set('Asia/Jakarta');

               $judul = $_POST['judul'];
               $deskripsi = $_POST['jawab'];
               $tanggal = date("Y/m/d/H:m:s");
               $id_user = $_SESSION['user']['id'];

               $query = "INSERT INTO topik (judul, deskripsi, tanggal, id_user) VALUES ('$judul', '$deskripsi', '$tanggal', '$id_user')";

                $result = mysqli_query($conn, $query);

                if($result) {
                  echo '<script language="javascript">';
                  echo 'alert("Berhasil menambahkan pertanyaan")';
                  echo '</script>';
                } else {
                  echo '<script language="javascript">';
                  echo 'alert("Gagal menambahkan pertanyaan")';
                  echo '</script>';
                }
              
            }
          ?>
        </div>
      </form>
    </div>
  </div>
  <!-- End of modal pertanyaan -->

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
  <script src="./Assets/js/tanyaForum.js"></script>
  <script src="./Assets/js/responsiveNav.js"></script>
  <script src="./Assets/js/loader.js"></script>
</body>

</html>