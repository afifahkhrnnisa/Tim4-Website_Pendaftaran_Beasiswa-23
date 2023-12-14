<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #F5F7F8;">
  <script>
      function konfirmasiLogout() {
          var konfirmasi = confirm("Apakah Anda ingin logout?");
          if (konfirmasi) {
              window.location.href = "logout.php?logout=true";
          }
      }
  </script>

    <nav class="navbar navbar-expand-lg p-3 " style="background-color: #F5F7F8;">
      <div class="container">
          <span class="navbar-text fw-bold" style="color: #2B2A4C;">BEASISWA FAVORIT</span>
          <div class="nav justify-content-end" id="navbarText">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active fw-bold" style="color: #2B2A4C;" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold"  style="color: #2B2A4C;" href="biodata.php">Biodata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold"  style="color: #2B2A4C;" href="ajukan.php">Pengajuan Beasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #2B2A4C; cursor: pointer;" onclick="konfirmasiLogout()">Log Out</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
      <div class="p-3 mb-5 text-white " style="background-color: #2B2A4C;">
        <div class="container position-relative py-4 mb-5 mt-5">
          <h1 class="display-5 fw-bold">Halo!</h1>
          <p>Siapkan dirimu untuk masa depan gemilang!</p>
          <p><a class="btn btn-light btn-lg text-primary" href="tampil.php" role="button">Lihat Data Saya &raquo;</a></p>
        </div>
      </div>

      <div class="container">
  </div>
    </body>
    </html>