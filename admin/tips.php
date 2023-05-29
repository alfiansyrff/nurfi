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
  <link rel="stylesheet" href="../Assets/css/admin/tips.css">
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
    <div class="sidebar">
      <h1>Menu</h1>
      <a href="./index.html">Dashboard</a>
      <a href="./beasiswa.html">Beasiswa</a>
      <a href="./forum.html">Forum</a>
      <a href="./sumberBelajar.html">Sumber Belajar</a>
      <a href="./tips.html">Tips & Motivasi</a>
      <a href="./donasi.html">Donasi</a>
      <a href="./main.html">Beranda Utama</a>
    </div>
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
        <h1>Data Tips & Motivasi</h1>
        <table class="myTable">
          <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Tgl Upload</th>
            <th>Penulis</th>
            <th>Slug Content</th>
            <th>Banner</th>
            <th>Aksi</th>

          </tr>

          <?php
            $query_select = "SELECT * FROM tips_motivasi";
            $result = mysqli_query($conn, $query_select);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['judul'] ?></td>
                <td><?php echo $row['tgl_upload']?></td>
                <td><?php echo $row['penulis'] . ' - ' . $row['awardee'] ?></td>
                <td><?php echo implode(' ', array_slice(str_word_count($row['slug_content'], 1), 0, 20)); ?></td>
                <td>

                  <!-- <img src="../Assets/upload/" . <? php echo $row['bukti'] ?> alt=""> -->
                  <img src=<?php echo "../Assets/upload/tips-motivasi/" . $row['banner'] ?> alt="banner" width="50">
                </td>
                <td>
                  <div class="tombol-table">
                    <a href="#" class="delete">Hapus</a>
                    <a href="#" class="edit">Ubah</a>
                  </div>
                </td>
              </tr>
          <?php
            }
          ?>
          <!-- <tr>
            <td>1</td>
            <td>Bagimana Memperoleh Beasiswa S1 di luar negeri</td>
            <td>01/02/2002</td>
            <td>Alfian Syarif</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iste temporibus tempore voluptatum unde, soluta nesciunt officiis deleniti voluptate minima?</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
            </td>
            <td>
              <div class="tombol-table">
                <a href="#" class="delete">Hapus</a>
                <a href="#" class="edit">Ubah</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Bagaimana Memperoleh Beasiswa S2 di luar negeri</td>
            <td>01/02/2002</td>
            <td>google.com</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A sit officiis ea eum assumenda eligendi culpa, aperiam praesentium accusamus veniam.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Bagaimana Memperoleh Beasiswa S2 di luar negeri</td>
            <td>01/02/2002</td>
            <td>Syarif H</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum?</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
            <td>
              <img src="../Assets/image/wallpaper.jpg" alt="">
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
            <td>Menjaga Kesehatan Mental</td>
            <td>10-02-2022</td>
            <td>Effendy T</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum vel cum illum.</td>
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
        </table>
        <div class="add__btn">
          <a href="#"> &#43; Tambah Data</a>
        </div>

        <!-- Modal Form Tambah Beasiswa-->
        <div class="modal-overlay">
          <div class="modal">

            <a class="close-modal">
              <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
              </svg>
            </a>
            <div class="modal-content">
              <h3>Tambah Data Tips & Motivasi</h3>
              <form id="add__form">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" required>

                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" required>

                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>

                <label for="banner">Upload Banner</label>
                <input type="file" id="banner" name="banner" accept="image/*" required>

                <div class="btn__wrapper">
                  <a href="#" id="close__btn">BATAL</a>
                  <a href="#" id="reset__btn">RESET</a>
                  <button type="submit">TAMBAH</button>
                </div>
              </form>
            </div>


          </div>
        </div><!-- overlay -->
        <!-- End of Modal Form -->
      </div>

    </div>
    <!-- End of Content -->
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="../Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="../Assets/js/adminTips.js"></script>
  <script src="../Assets/js/loader.js"></script>
  <script src="../Assets/js/responsiveAdmin.js"></script>
  <script src="../Assets/js/liveSearchAdmin.js"></script>
</body>
</html>
