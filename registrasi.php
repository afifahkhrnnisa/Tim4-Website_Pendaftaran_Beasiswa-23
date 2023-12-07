<?php
include "koneksi.php";
if (!$koneksi) { 
    die("Koneksi gagal: " . mysqli_connect_error());
}
if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST["regis"])) {
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($nik) || empty($email) || empty($password)) {
        echo "<script>alert('Isi dengan lengkap!'); </script>";
    } 
    else {
        $periksa = "SELECT * FROM user WHERE nik='$nik' OR email = '$email'";
        $result = mysqli_query($koneksi, $periksa);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('NIK atau email sudah terdaftar. Silahkan gunakan yang lain.'); </script>";
        } 
        else {
                $sqli = "INSERT INTO user (nik, email, password) VALUES ('$nik', '$email', '$password')";
                
                if(mysqli_query($koneksi, $sqli)) {
                    $_SESSION['daftar'] = true;
                    header("Location: login.php");
                } 
                else {
                    echo "Error: " . $sqli . " " . mysqli_error($koneksi);
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <link href="registrasi.css"  rel="stylesheet">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
    <form action="registrasi.php" method="post">
        <header>Silahkan Registrasi Terlebih Dahulu</header>
        <br>
        <input type="number" placeholder="Nomor Induk Kependudukan" name="nik"> 
        <br>
        <input type="text" placeholder="Alamat Email" name="email">
        <br>
        <input type="password" placeholder="Masukan Password" name="password">
        <br>
        <input type="submit" class="button" value="Registrasi" name="regis">
        <br>
      </form>
    </div>
  </div>
</body>
</html>
