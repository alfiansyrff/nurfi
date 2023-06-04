<?php
  require_once("../connection/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Sumber Belajar</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="../Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link My CSS -->
  <link rel="stylesheet" href="../Assets/css/admin/sumberBelajar.css">
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
      <!-- Table -->
      <div class="container__table">
        <h1>Data Sumber Belajar</h1>
        <table class="myTable">
          <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Tgl Upload</th>
            <th>Deskripsi</th>
            <th>Link video</th>
            <th>Aksi</th>

          </tr>

          <?php
            $query_select = "SELECT * FROM sumber_belajar";
            $result_select = mysqli_query($conn, $query_select);

            if (mysqli_num_rows($result_select) > 0) {
              while($row = mysqli_fetch_assoc($result_select)) {
          ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['judul'];?></td>
              <td><?php echo $row['tanggal_upload'];?></td>
              <td><?php echo $row['deskripsi'];?></td>
              <td><?php echo $row['link'];?></td>
              <td id="button_group">
                <form method="post" class="delete_form">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                  <button type="submit" class="delete" id="delete">
                    <img src="../Assets/image/delete_icon.png" alt="delete icon" width="20">
                  </button>
                </form>

                <form method="post" class="edit_form">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                  <button type="submit" onclick="openModal(<?php echo $row['id']; ?>, '<?php echo $row['judul']; ?>', '<?php echo $row['deskripsi']; ?>', '<?php echo $row['link']; ?>')" class="edit" id="edit">
                    <img src="../Assets/image/edit_icon.png" alt="edit icon" width="20">
                  </button>
                </form>

                <?php
                if (isset($_POST['delete_id'])) {
                  $delete_id = $_POST['delete_id'];
                  $query_delete = "DELETE FROM sumber_belajar WHERE id = '$delete_id'";
                  $result_delete = mysqli_query($conn, $query_delete);
                }

                if (isset($_POST['edit_id'])) {
                  $edit_id = $_POST['edit_id'];
                  $query_get_id = "SELECT * FROM sumber_belajar WHERE id = '$edit_id'";
                  $result_get_id = mysqli_query($conn, $query_get_id);
                  $get_row_id = mysqli_fetch_assoc($result_get_id);

                  $edit_judul = $row['judul'];
                  $edit_deskripsi = $row['deskripsi'];
                  $edit_link = $row['link'];
                }

                 ?>
              </td>
            </tr>
            <?php
            }} else { ?>
            <tr>
              <td colspan="8">Data Masih Kosong</td>
            </tr>
          <?php } ?>
        </table>
        <div class="add__btn">
          <!-- <button type="button" name="button">TAMBAH data</button> -->
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
              <h3>Tambah Data Sumber Belajar</h3>
              <form id="add__form" action="" method="post">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" required>

                <label for="deskripsi">Deskripsi singkat</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>

                <label for="link">Link Video</label>
                <input type="text" id="link" name="link" required>

                <div class="btn__wrapper">
                  <a href="#" id="close__btn">BATAL</a>
                  <a href="#" id="reset__btn">RESET</a>
                  <button type="submit" name="submit">TAMBAH</button>

                  <?php
                    if(isset($_POST['submit'])){
                      $judul = $_POST['judul'];
                      $deskripsi = $_POST['deskripsi'];
                      $link = $_POST['link'];

                      // Get today date timezone Asia/Jakarta
                      date_default_timezone_set('Asia/Jakarta');
                      $tanggal = date('Y-m-d H:i:s');

                      $query = "INSERT INTO sumber_belajar(judul, tanggal_upload, deskripsi, link) VALUES ('$judul', '$tanggal', '$deskripsi', '$link')";

                      $result = mysqli_query($conn, $query);

                      if ($result) {
                        // Show an alert message using JavaScript
                        echo '<script language="javascript">';
                        echo 'alert("Berhasil menambahkan data")';
                        echo '</script>';
                      } else {
                        // Show the error message
                        echo '<script language="javascript">';
                        echo 'alert("Gagal menambahkan data")';
                        echo '</script>';
                      }

                    }
                  ?>
                </div>
              </form>
            </div>


          </div>
        </div><!-- overlay -->
        <!-- End of Modal Form -->
      </div>
      <!-- End of Content -->
    </div>
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="../Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="../Assets/js/adminSumberBelajar.js"></script>
  <script src="../Assets/js/loader.js"></script>
  <script src="../Assets/js/responsiveAdmin.js"></script>
  <script src="../Assets/js/liveSearchAdmin.js"></script>

</body>
</html>
