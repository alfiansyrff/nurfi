<?php
  require_once("../connection/db.php");
  ini_set('log_errors', 1);
  ini_set('error_log', '../error/error.txt');
  $totalPages = 5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Beasiswa</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="../Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link My CSS -->
  <link rel="stylesheet" href="../Assets/css/admin/beasiswa.css">
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
        <h1>Data Beasiswa</h1>
        <table class="myTable" id="table-beasiswa">


          <?php
            include("./fetch_table_beasiswa.php");
          ?>
          <!-- <?php
            $query_select = "SELECT * FROM beasiswa";
            $result = mysqli_query($conn, $query_select);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['beasiswa'] ?></td>
                <td><?php echo $row['jenjang'] ?></td>
                <td><?php echo $row['waktu'] ?></td>
                <td><?php echo implode(' ', array_slice(str_word_count($row['deskripsi'], 1), 0, 20)); ?></td>
                <td><?php echo $row['link_informasi'] ?></td>
                <td><?php echo $row['status'] ?></td>

                <td>
                  <div class="tombol-table">
                    <a href="#" onclick="confirmDelete(<?php echo $row['id'] ?>)" class="delete">Hapus</a>
                    <a href="#" class="edit">Ubah</a>
                  </div>
                </td>
              </tr>
          <?php
            }
          ?> -->

        </table>
        <div class="add__btn">
          <a href="#"> &#43; Tambah Data</a>
        </div>

        <!-- Table pagination -->
        <div id="pagination">
          <button onclick="goToPage(1)" class="pagination-button">First</button>
          <button onclick="goToPage(currentPage - 1)" class="pagination-button"> &lsaquo; </button>
          <button onclick="goToPage(currentPage + 1)" class="pagination-button" > &rsaquo; </button>
          <button onclick="goToPage(<?php echo $totalPages; ?>)" class="pagination-button">Last</button>
        </div>


        <!-- End of table pagination -->

        <!-- Modal Form Tambah Beasiswa-->
        <div class="modal-overlay-add">
          <div class="modal-add">

            <a class="close-modal">
              <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
              </svg>
            </a>
            <div class="modal-content">
              <h3 id="modal-title">Tambah Data Beasiswa</h3>

              <form id="add__form" method="post" enctype="multipart/form-data">
                <label for="namaBeasiswa">Nama Beasiswa</label>
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

                <label for="image">Upload Gambar Banner</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <label for="link">Link Informasi Beasiswa</label>
                <input type="text" id="link" name="link" required>

                <div class="btn__wrapper">
                  <a href="#" id="close__btn">BATAL</a>
                  <a href="#" id="reset__btn">RESET</a>
                  <button type="submit" id="addData" name="addDataBeasiswa">TAMBAH</button>

                  <?php
                    if (isset($_POST['addDataBeasiswa'])) {

                      $namaSementara = $_FILES['image']['tmp_name'];
                      $timestamp = date("YmdHis");
                      $namaFile = uniqid() . $timestamp . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

                      // tentukan lokasi file akan dipindahkan
                      $dirUpload = "../Assets/upload/beasiswa/";

                      // pindahkan file
                      $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


                      $namaBeasiswa = $_POST["namaBeasiswa"];
                      $jenjang = $_POST["jenjang"];
                      $status = $_POST["status"];
                      $waktu = $_POST["periode__daftar"] . ' hingga ' . $_POST["periode__tutup"];
                      $deskripsi = $_POST["message"];
                      $link = $_POST["link"];
                      $namaSementara = $_FILES['image']['tmp_name'];
                      $timestamp = date("YmdHis");


                      // Prepare the SQL statement
                      $sql = "INSERT INTO beasiswa (beasiswa, jenjang, status, waktu , deskripsi, link_informasi, banner) VALUES ('$namaBeasiswa', '$jenjang', '$status', '$waktu', '$deskripsi',  '$link', '$namaFile')";

                      if (mysqli_query($conn, $sql)) {
                          echo 'sukses';
                      } else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                    }

                    // Close the database connection
                    mysqli_close($conn);

                  ?>
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
  <script src="../Assets/js/adminBeasiswa.js"></script>
  <script src="../Assets/js/loader.js"></script>
  <script src="../Assets/js/responsiveAdmin.js"></script>
  <script src="../Assets/js/liveSearchAdmin.js"></script>
  <script type="text/javascript">

  function editData(id) {
    // Get the data for the specified ID from the database using an AJAX request
    // Modify the URL and data parameters based on your actual implementation
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_beasiswa.php?id=" + id, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        fillEditForm(data); // Call the function to fill the edit form with the retrieved data
        showModalAddData(); // Show the edit modal
      }
    };
    xhr.send();
  }

  function fillEditForm(data) {
    // Fill the form fields with the retrieved data
    document.getElementById("modal-title").innerHTML = 'Edit Data Beasiswa';
    document.getElementById("namaBeasiswa").value = data.beasiswa;
    document.getElementById("jenjang").value = data.jenjang;
    if (data.status === "buka") {
      document.getElementById("buka").checked = true;
    } else if (data.status === "tutup") {
      document.getElementById("tutup").checked = true;
    }
    document.getElementById("periode__daftar").value = data.waktu.split(' hingga ')[0];
    document.getElementById("periode__tutup").value = data.waktu.split(' hingga ')[1];
    document.getElementById("message").value = data.deskripsi
    document.getElementById("link").value = data.link_informasi;
  }


  editBtns.forEach(editBtn => {
    editBtn.addEventListener('click', function() {
      var id = this.getAttribute("data-id"); // Get the ID from the button's data attribute
      editData(id);
    });
  });

  function confirmDelete(id) {
      var result = confirm(`Apakah yakin menghapus data id ${id}?`);
      if (result) {
          // If user confirms deletion, redirect to delete_beasiswa.php with the id parameter
          window.location.href = "delete_beasiswa.php?id=" + id;
      }
  }

  var currentPage = 1; // Initially set the current page to 1

  function loadTableData(page) {
    // Create an AJAX object
    var xhr = new XMLHttpRequest();

    // Define the request URL with pagination parameters
    var url = 'fetch_table_beasiswa.php?page=' + page;

    // Configure the AJAX request
    xhr.open('GET', url, true);

    // Set the callback function to handle the AJAX response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Update the table with the new data
        document.getElementById('table-beasiswa').innerHTML = xhr.responseText;
      }
    };

    // Send the AJAX request
    xhr.send();
  }

  function goToPage(page) {
    currentPage = page; // Update the current page

    // Load the table data for the selected page
    loadTableData(currentPage);
  }

  // Call the function initially to load the table data for the first page
  loadTableData(currentPage);

</script>


</body>
</html>
