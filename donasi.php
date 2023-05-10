<?php
  session_start();
  require_once('connection/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="./Assets/css/donasi.css">
    <link rel="stylesheet" href="./Assets/css/loader.css">
    <link rel="stylesheet" href="./Assets/css/responsiveNavbar.css">

    <!-- Link Favicon -->
    <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">
    <title>Donasi Beasiswa</title>
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
        <a href="#" class="dropdown__btn hover-underline-animation">
          <span id="berbagi">Berbagi</span>
          <img src="./Assets/image/down-arrow.png" alt="down-arrow" id="dropdown__symbol">
        </a>
        <div class="dropdown__content">
          <a href="./donasi.html" id="ikut__donasi">Ikut Donasi</a>
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

  <main>
    <div class="container">

      <div class="bank">
        <img src="./Assets/image/bca.png" alt="Logo Bank BCA">
          <p>Nomor Rekening: 0888032473</p>
      </div>

      <div class="bank">
        <img src="./Assets/image/bri.png" alt="Logo Bank BRI">
        <p>Nomor Rekening: 23232232311</p>
      </div>

      <div class="bank">
        <img src="./Assets/image/mandiri.webp" alt="Logo Bank Mandiri">
        <p>Nomor Rekening: 2323232211</p>
      </div>

      <div class="bank">
        <img src="./Assets/image/link-aja.png" alt="Logo Link Aja">
        <p>Nomor: 6281234567819</p>
      </div>

      <form action="" method="post" enctype="multipart/form-data">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" required autofocus>

          <label for="email">Alamat Email</label>
          <input type="email" id="email" name="email" required>

          <label for="nomor">Nomor yang Dapat Dihubungi</label>
          <input type="tel" name="nomor" id="nomor" placeholder="62xxxxxxxxx" required>

          <label>Metode Pembayaran</label>

          <div class="radio__wrapper">
            <input type="radio" required name="metode" id="ATM" value="ATM / Mbanking">

            <label for="ATM">ATM / Mbanking</label>

            <input type="radio" required name="metode" id="e-wallet" value="E-Wallet">

            <label for="e-wallet">E-Wallet</label>
          </div>

          <label for="banks">Bank Tujuan Transfer</label>

          <div class="select__bank">
            <select name="banks" id="banks">
              <option value="BRI">BRI</option>
              <option value="BCA">BCA</option>
              <option value="Mandiri">Mandiri</option>
              <option value="-">Via E-wallet</option>
            </select>
          </div>

          <label for="image">Upload Bukti Transfer</label>
          <div class="upload__wrapper">
            <input type="file" id="image" name="image" accept="image/*" required>
          </div>

          <div class="btn__wrapper">
            <button type="submit" name="submit">Kirim Donasi</button>
            <?php
              if(isset($_POST['submit'])) {
                // ambil data file

                $namaSementara = $_FILES['image']['tmp_name'];
                $timestamp = date("YmdHis");
                $namaFile = uniqid() . $timestamp . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                // tentukan lokasi file akan dipindahkan
                $dirUpload = "Assets/upload/";

                // pindahkan file
                $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);                

                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $nomor = $_POST['nomor'];
                $metode = $_POST['metode'];
                $bank = $_POST['banks'];
                $bukti = $namaFile;
                $id_user = $_SESSION['user']['id'];

                $query = "INSERT INTO tb_donasi (nama, email, nomor, metode_bayar, bank_tujuan, bukti, id_user) VALUES ('$nama', '$email', '$nomor', '$metode', '$bank', '$bukti', '$id_user')";

                $result = mysqli_query($conn, $query);

                if ($result) {
                  print_r($_SESSION['user']['username']);
                  // session_start();
                  // $_SESSION['status'] = 'login';
                  // $_SESSION['id_user'] = $rows['id'];
                  // header('Location:index.php');
                }
              }
            ?>

          </div>
        </form>
      </div>
    </main>

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

    <script src="./Assets/js/loader.js"></script>
    <script src="./Assets/js/indicatorBar.js"></script>
    <script src="./Assets/js/responsiveNav.js"></script>
    <script src="./Assets/js/donasi.js"></script>
  </body>
  </html>
