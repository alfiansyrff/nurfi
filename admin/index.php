<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Home</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="../Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link My CSS -->
  <link rel="stylesheet" href="../Assets/css/admin/style.css">
  <link rel="stylesheet" href="../Assets/css/loader.css">
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
        <h1>Dashboard Admin</h1>
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

      <!-- Summary Report -->
      <div class="summary__report">
        <div class="card admin">
          <div class="text">
            <p>Total Admin</p>
            <p><strong>10</strong></p>
          </div>
          <div class="icon">
            <img src="../Assets/image/admin-icon.png" alt="admin-icon">
          </div>
        </div>
        <div class="card new-user">
          <div class="text">
            <p>Pendaftar Beasiswa Nurfi</p>
            <p><strong>40</strong></p>
          </div>

          <div class="icon">
            <img src="../Assets/image/new-user-icon.png" alt="new-user-icon">
          </div>
        </div>
        <div class="card user">
          <div class="text">
            <p>Total Pengguna</p>
            <p><strong>15K</strong></p>
          </div>
          <div class="icon">
            <img src="../Assets/image/total-user-icon.png" alt="">
          </div>
        </div>
      </div>
      <!-- End of summary report -->

      <!-- Chart -->
      <div class="chart">
        <canvas id="lineChart" style="width:100%;max-width:300px"></canvas>
        <canvas id="pieChart" style="width:100%;max-width:300px"></canvas>
      </div>

      <!-- End of Chart -->
    </div>
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="../Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="../Assets/js/adminHome.js"></script>
  <script src="../Assets/js/loader.js"></script>
</body>
</html>
