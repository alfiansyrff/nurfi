<?php
  require_once('connection/db.php');

  if (isset($_POST["submit"])) {

    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn, $username);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    if($rows > 0) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['status'] = 'login';
      header("location: index.php");
      // if(password_verify($password, $hash)){
      //     // header('Location: index.html');
      //     var_dump($hash);
      // }
    } else {
      echo "Data tidak ditemukan";
    }

  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nurfi | Login</title>
  <meta charset="UTF-8">
  <!-- Link CSS -->
  <link rel="stylesheet" href="./Assets/css/login.css">
  <link rel="stylesheet" href="./Assets/css/loader.css">
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="./Assets/image/nurfi-logo.png" type="image/x-icon">

  <!-- Link Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,300;0,500;1,100;1,700&family=Roboto:ital,wght@0,100;0,300;1,100&family=Rubik:wght@300;500&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="box" id="wrapper-image">
      <div class="image-container">
        <img src="https://burst.shopifycdn.com/photos/grad-students-throwing-hats-in-the-air.jpg?width=1200&format=pjpg&exif=1&iptc=1" alt="Image">
      </div>
    </div>
    <div class="box" id="wrapper-form">
      <form class="form-container" name="login" action="" method="POST">
        <img src="./Assets/image/user.svg" alt="user-svg">

        <div class="inputBox">
          <input type="text" required name="username" id="username">
          <span>Username / Email</span>
        </div>

        <div class="inputBox">
          <input type="password" required name="password" id="password">
          <span>Password</span>
        </div>

        <div class="checkBox">
          <input type="checkbox" name="remember__me" id="remember__me">
          <label for="remember__me">Ingat Saya</label>
        </div>

        <button type="submit" id="login" name="submit">LOGIN</button>
        <!-- <a href="#" id="login">LOGIN</a> -->

        <p id="register-now">Belum punya akun? <span id="register-btn">Daftar Sekarang</span></p>

      </form>
    </div>
  </div>

  <!-- Loader -->
  <div class="loader loader-hidden">
    <img src="./Assets/image/loader.gif" alt="Loader Image">
  </div>
  <!-- End of Loader -->

  <!-- <script src="./Assets/js/login.js"> </script> -->

  <script src="./Assets/js/loader.js"></script>
</body>
</html>
