<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $queryFetchNik = "SELECT nik FROM user";
  $resultFetchNik = mysqli_query($koneksi, $queryFetchNik);

  if ($resultFetchNik) {
      $row = mysqli_fetch_assoc($resultFetchNik);
      $nik = $row['nik'];
      $namaAyah = $_POST["namaAyah"];
      $pekerjaanAyah = $_POST["pekerjaanAyah"];
      $domisiliAyah = $_POST["domisiliAyah"];
      $noAyah = $_POST["noAyah"];
      $gajiAyah = $_POST["gajiAyah"];
      $namaIbu = $_POST["namaIbu"];
      $pekerjaanIbu = $_POST["pekerjaanIbu"];
      $domisiliIbu = $_POST["domisiliIbu"];
      $noIbu = $_POST["noIbu"];
      $gajiIbu = $_POST["gajiIbu"];

      $query = "INSERT INTO ortu (nik, namaAyah, pekerjaanAyah, domisiliAyah, noAyah, gajiAyah, namaIbu, pekerjaanIbu, domisiliIbu, noIbu, gajiIbu) 
      VALUES ('$nik', '$namaAyah', '$pekerjaanAyah', '$domisiliAyah', '$noAyah', '$gajiAyah', '$namaIbu', '$pekerjaanIbu', '$domisiliIbu', '$noIbu','$gajiIbu')";

      $result = mysqli_query($koneksi, $query);

      if ($result) {
        echo "<script>confirm('Data berhasil disimpan'); window.location.href = 'tampil.php'; </script>";
      } else {
          echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
      }
  } else {
      echo "Error 'nik' value: " . mysqli_error($koneksi);
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bioadata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>

<script>
    function konfirmasiLogout() {
        var konfirmasi = confirm("Apakah Anda ingin logout?");
        if (konfirmasi) {
            window.location.href = "logout.php?logout=true";
        }
    }
</script>

<form action="" method="post">
<div class="container-fluid">
  <div class="row">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
      <div class="position-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <p class="nav-link active mt-3 mb-5 text-light fw-bold">Beasiswa Favorit</p>
          </li>
          <li><a href="dashboard.php"><i class="bi bi-house"></i>Home</a></li>
          <li><a href="biodata.php"><i class="bi bi-person"></i>Biodata</a></li>
          <li><a href="ajukan.php"><i class="bi bi-journal-check"></i>Pengajuan Beasiswa</a></li>
          </ul>
          </div>
        <div class="logout">
          <a style="cursor: pointer;" onclick="konfirmasiLogout()"><i class="bi bi-box-arrow-right"></i>Logout</a>
        </div>
        </nav>
        </div>
    </div>

    <main id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-color: #F5F7F8;">
      <ul class="nav nav-underline p-3 rounded" style="background-color: white;">
  <li class="nav-item">
    <a class="nav-link fw-bold" aria-current="page" href="biodata.php" style="color: #2B2A4C;">Biodata Diri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold" href="orangtua.php" style="color: #2B2A4C;">Orang Tua</a>
  </li>
</ul>


  <div class="mb-3 pt-4 row" style="display: none;">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;"  name="nik">Nik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nik">
    </div>
  </div>

<div class="container bg-white rounded mt-3 pb-3">
  <div class="mb-3 pt-4 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;"  name="namaAyah">Nama Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namaAyah">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="pekerjaanAyah">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pekerjaanAyah">
    </div>
  </div>
<div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="domisiliAyah">Alamat Domisili</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="domisiliAyah">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="noAyah">Nomor HP Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="noAyah">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="gajiAyah">Gaji Ayah</label>
    <div class="col-sm-10">
    <select class="form-select form-select-sm" aria-label="Small select example" name="gajiAyah">
  <option selected>Gaji</option>
  <option value="1">Rp0</option>
  <option value="2"> Kurang dari Rp5.000.000</option>
  <option value="3"> Kurang dari Rp10.000.000</option>
  <option value="4"> Lebih dari Rp10.000.000</option>
</select>
    </div>
  </div>
  <div class="mb-3 pt-4 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="namaIbu">Nama Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namaIbu">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="pekerjaanIbu">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pekerjaanIbu">
    </div>
  </div>
<div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="domisiliIbu">Alamat Domisili</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="domisiliIbu">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="noIbu">Nomor HP Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="noIbu">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="gajiIbu">Gaji Ibu</label>
    <div class="col-sm-10">
    <select class="form-select form-select-sm" aria-label="Small select example" name="gajiIbu">
  <option selected>Gaji</option>
  <option value="1">Rp0</option>
  <option value="2"> Kurang dari Rp5.000.000</option>
  <option value="3"> Kurang dari Rp10.000.000</option>
  <option value="4"> Lebih dari Rp10.000.000</option>
</select>
    </div>
  </div>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-sm mt-3 text-light" style="background-color: #2B2A4C;" value="submit">Simpan</button>
</div>
    </main>
  </form>
</body>
</html>
