<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Forum</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="../Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link My CSS -->
  <link rel="stylesheet" href="../Assets/css/admin/forum.css">
  <link rel="stylesheet" href="../Assets/css/loader.css">
  <link rel="stylesheet" href="../Assets/css/admin/scrollBarAdmin.css">

  <!-- Link Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Poppins:wght@300;400;600&family=Roboto:wght@100;300;400;700&family=Spectral:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Link CDN Chart.js -->
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
</head>
<body>
  <div class="container">

    <?php include('../partials/sidebarAdmin.php'); ?>
    
    <div class="content">
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
      <div class="container__table">
        <h1>Data Forum</h1>
        <table class="myTable">
          <tr>
            <th>No.</th>
            <th>Penanya</th>
            <th>Waktu</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Status</th>
            <th>Aksi</th>

          </tr>
          <tr>
            <td>1</td>
            <td>Alfian Syarif</td>
            <td>01/01/2023</td>
            <td>Bagaimana Cara mendaftar beasiswa djarum?</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Terbuka</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Amril Huda</td>
            <td>01/01/2023</td>
            <td>Bagaimana Cara mendaftar beasiswa djarum?</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Terbuka</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Miftah</td>
            <td>01/01/2023</td>
            <td>Bagaimana Cara mendaftar beasiswa djarum?</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Terbuka</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Hendrawan</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo esse sint officiis, aliquam nesciunt quasi fuga reprehenderit at consequatur blanditiis.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>Naufal</td>
            <td>01/01/2023</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>Selesai</td>
            <td>
              <a href="#" class="delete">Hapus</a>
              <a href="#" class="edit">Ubah</a>
            </td>
          </tr>
        </table>

        <!-- Modal Form Tambah Beasiswa-->
        <div class="modal-overlay">
          <div class="modal">

            <a class="close-modal">
              <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
              </svg>
            </a>
            <div class="modal-content">
              <h3>Tambah Data Beasiswa</h3>
              <form id="add__form">
                <label for="namaBeasiswa">Judul</label>
                <input type="text" id="namaBeasiswa" name="namaBeasiswa" required>

                <label for="jenjang">Jenjang</label>
                <select id="jenjang" name="jenjang">
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="S3">S1-S2</option>
                  <option value="S3">S1-S3</option>
                  <option value="S3">S2-S3</option>
                </select>

                <label>Status</label>
                <div class="status__wrapper">
                  <div class="status__content">
                    <input type="radio" id="buka" name="status" value="buka" required>
                    <label for="buka">Buka</label>
                  </div>
                  <div class="status__content">
                    <input type="radio" id="tutup" name="status" value="tutup" required>
                    <label for="tutup">Tutup</label>
                  </div>
                </div>

                <label>Periode pendaftaran</label>
                <div class="periode__wrapper">

                  <div>
                    <label for="periode__daftar">Tanggal Buka</label>
                    <input type="date" id="periode__daftar" name="periode__daftar" required>
                  </div>
                  <div>
                    <label for="periode__tutup">Tanggal Tutup</label>
                    <input type="date" id="periode__tutup" name="periode__tutup" required>
                  </div>
              </div>

                <label for="message">Deskripsi singkat</label>
                <textarea id="message" name="message" required></textarea>

                <label for="image">Upload Gambar</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <label for="link">Link Informasi Beasiswa</label>
                <input type="text" id="link" name="link" required>

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
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="../Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="../Assets/js/adminForum.js"></script>

  <script src="../Assets/js/loader.js"></script>
  <script src="../Assets/js/responsiveAdmin.js"></script>
  <script src="../Assets/js/liveSearchAdmin.js"></script>
</body>
</html>
