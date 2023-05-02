<?php
  require_once('./connection/db.php');

  function cek_username($username, $conn) {
    $username = mysqli_real_escape_string($conn, $username);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      return mysqli_num_rows($result);
    }
  }

  if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $konfirm_password = stripslashes($_POST['konfirm_password']);
    $konfirm_password = mysqli_real_escape_string($conn, $konfirm_password);

    if ($password == $konfirm_password) {
      if (cek_username($username, $conn)==0) {
        $hashed_pw = md5($password);
        $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$hashed_pw')";
        $result = mysqli_query($conn, $query);

        if($result) {
          header('Location: index.html');
        }
      } else {
        echo "Username sudah dipakai";
      }

    } else {
      echo "Password Tidak Sama";
    }
  }
?>  



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/register.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">

  <title>Nurfi | Daftar</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="container__label">
        <h3>Daftar Sekarang</h3>
        <p>Raih kesempatan untuk mewujudkan mimpimu bersama kami</p>
        <img src="./Assets/image/Welcome.svg" alt="">
      </div>

      <div class="container__form">
        <form method="POST" action="">
          <h3>Mari Bergabung!</h3>
          <div class="input__wrapper">
            <input type="text" name="username" id="username" placeholder="Username" autofocus required>

          <input type="email" name="email" id="email" placeholder="Email" required>

          <input type="password" name="password" id="password" placeholder="Password" required>
          
          <input type="password" name="konfirm_password" id="konfirm__password" placeholder="Konfirmasi password" required>
        </div>

        <div id="message">
         
        </div>
      

          <div class="btn__info">

            <button type="submit" name="submit">Daftar</button>
            
            <p>Dengan mendaftar, kamu setuju dengan <span>syarat dan kentetuan</span> kami </p>

            <p>Sudah punya akun? <span><a href="./login.html">Masuk</a></span></p>
            
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="./Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <script src="./Assets/js/register.js"></script>
  <script src="./Assets/js/loader.js"></script>
</body>
</html>
