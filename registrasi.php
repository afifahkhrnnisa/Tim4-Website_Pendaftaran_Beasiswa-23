<?php
include "koneksi.php";
if (!$koneksi) { 
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $password = $_POST["password"] ;
   
    if (empty($nik) || empty($email) || empty($password)) {
        echo "Isi dengan lengkap!";
    } 
    else {
        $periksa = "SELECT * FROM user WHERE nik='$nik'";
        $result = mysqli_query($koneksi, $periksa);
        if (mysqli_num_rows($result) > 0) {
            echo "NIK sudah terdaftar. Silahkan gunakan NIK lain.";
        } 
        else {
            $sqli = "INSERT INTO user (nik, email, password) VALUES ('$nik', '$email', '$password')";
            if(mysqli_query($koneksi, $sqli)) {
                header("Location: login.html");
            } 
            else {
                echo "Error: " . $sqli . " " . mysqli_error($koneksi);
            }
        }
    }
}

?>
