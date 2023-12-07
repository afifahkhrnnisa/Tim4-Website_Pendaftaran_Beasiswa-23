<?php
session_start(); 
include "koneksi.php";

if (!$koneksi) { 
  die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
    exit;
  }

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
      echo "<script>alert('Email dan Password tidak boleh kosong!'); </script>";
    } 
    else {
        $sql = "SELECT * FROM user WHERE email='$email' OR nik='$email' AND password='$password'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($password == $row["password"]) {
                $_SESSION['login'] = true;
                header("Location: dashboard.php");
                exit;
            } 
            else {
              echo "<script>alert('Password dan email yang kamu daftarkan salah'); </script>";
            }
        } 
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="login.css" rel="stylesheet">
</head>

<body>
  <div id="selamat-datang">
    <h1>SELAMAT DATANG</h1>
    </div>
      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>Login</h2>
              <p>Pastikan anda telah memiliki akun di Sistem Pendaftaran Beasiswa Favorit</p>
          </div>
          <form action="" method="post" class="form">
            <label for="user-email" style="padding-top:13px"></label>
            <input id="user-email" class="form-content" type="text" name="email" placeholder="Email/NIK" />
            <label for="user-password" style="padding-top:22px"></label>
            <input id="user-password" class="form-content" type="password" name="password" placeholder="Password" />
              <a href="#">
                <legend id="forgot-pass">Lupa Password</legend>
              </a>
            <input id="submit-btn" type="submit" name="submit" value="Sign In" />
            <p>Belum Punya Akun? <a href="registrasi.php" id="signup">Daftar Disini</a></p>
          </form>
        </div>
</body>

</html>