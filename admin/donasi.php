<?php
  require_once("../connection/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Tips & Motivasi</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="../Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link My CSS -->
  <link rel="stylesheet" href="../Assets/css/admin/donasi.css">
  <link rel="stylesheet" href="../Assets/css/loader.css">
  <link rel="stylesheet" href="../Assets/css/admin/scrollBarAdmin.css">

  <!-- Link Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Poppins:wght@300;400;600&family=Roboto:wght@100;300;400;700&family=Spectral:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Link Chart.js -->
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
</head>
<body>
  <!-- Container -->
  <div class="container">
    <!-- Sidebar -->
    <?php include('../partials/sidebarAdmin.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content -->
    <div class="content">

      <!-- Top -->
      <div class="top">

        <span class="toggle-icon">&#9776;</span>

        <div class="search">
          <input type="text" placeholder="Cari Data" class="search__input">
          <img src="../Assets/image/search-icon.svg" alt="search-icon" class="search-icon">
        </div>

        <div class="profil__info">
          <img src="../Assets/image/profile.png" alt="profil" id="profil">
          <div class="profil__modal">
            <p>Admin</p>
            <div class="logout__btn">
              <a href="#" id="logout">Keluar</a>
            </div>
          </div>

        </div>
      </div>
      <!-- End of top -->

      <!-- Table -->
      <div class="container__table">
        <h1>Data Donasi</h1>
        <table class="myTable">
          <tr>
            <th>No.</th>
            <th>Donatur</th>
            <th>Email/No.Hp</th>
            <th>Waktu</th>
            <th>Metode</th>
            <th>Bank Tujuan</th>
            <th>Bukti</th>
            <th>Aksi</th>

          </tr>

          <?php
            $query_select = "SELECT * FROM donasi";
            $result = mysqli_query($conn, $query_select);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['email'] . ' / ' . $row['nomor'] ?></td>
                <td><?php echo $row['tanggal'] ?></td>
                <td><?php echo $row['metode_bayar'] ?></td>
                <td><?php echo $row['bank_tujuan'] ?></td>
                <td>

                  <!-- <img src="../Assets/upload/" . <? php echo $row['bukti'] ?> alt=""> -->
                  <img src=<?php echo "../Assets/upload/donasi/" . $row['bukti'] ?> alt="bukti-donasi" width="50">
                </td>
                <td>
                  <div class="tombol-table">
                    <a href="#" class="delete">Hapus</a>
                    <a href="#" class="edit">Ubah</a>
                  </div>
                </td>
              </tr>
          <?php
              $counter++;
            }
          ?>
          <!-- <tr>
            <td>1</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr> -->
          <!-- <tr>
            <td>2</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>E-Wallet</td>
            <td>-</td>
            <td>
              <img src="../Assets/image/carousel1.jpg" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>E-Wallet</td>
            <td>-</td>
            <td>
              <img src="../Assets/image/community.svg" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>E-Wallet</td>
            <td>-</td>
            <td>
              <img src="../Assets/image/donasi.svg" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>Alfian Syarif</td>
            <td>alfian@gmail.com/081234567819</td>
            <td>01/02/2002</td>
            <td>ATM / Mbanking</td>
            <td>Mandiri</td>
            <td>
              <img src="../Assets/image/bri.png" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr> -->

        </table>
      </div>

    </div>
    <!-- End of Content -->
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="../Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="../Assets/js/adminDonasi.js"></script>
  <script src="../Assets/js/loader.js"></script>
  <script src="../Assets/js/responsiveAdmin.js"></script>
  <script src="../Assets/js/liveSearchAdmin.js"></script>
</body>
</html>
