<?php
include "koneksi.php";
session_start();

if(isset($_SESSION["daftar"])) {
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bioadata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }

    #sidebar {
      height: 100vh;
      background-color: #2B2A4C;
      color: #ffff;
    }

    #content {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
      <div class="position-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <p class="nav-link active mt-3 mb-5 text-light fw-bold">Beasiswa Favorit</p>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="biodata.php">Biodata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="#">Pengajuan Beasiswa</a>
          </li>
        </ul>
      </div>
    </nav>

    <main id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-color: #F5F7F8;">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link fw-bold" href="logout.php" style="color: #2B2A4C;">Log Out</a>
        </li>
      </ul>
    </main>
  </div>
</div>
</body>
</html>
