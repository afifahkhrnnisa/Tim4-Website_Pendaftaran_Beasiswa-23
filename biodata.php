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
      $namaLengkap = $_POST["namaLengkap"];
      $fotoDiri = $_POST["fotoDiri"];
      $fotoKK = $_POST["fotoKK"];
      $tempatLahir = $_POST["tempatLahir"];
      $tglLahir = $_POST["tglLahir"];
      $jenisKelamin = $_POST["jenisKelamin"];
      $agama = $_POST["agama"];
      $nomorHp = $_POST["nomorHp"];
      $alamatDiri = $_POST["alamatDiri"];

      $query = "INSERT INTO biodata (nik, namaLengkap, fotoDiri, fotoKK, tempatLahir, tglLahir, jenisKelamin, agama, nomorHp, alamatDiri) 
VALUES ('$nik', '$namaLengkap', '$fotoDiri', '$fotoKK', '$tempatLahir', '$tglLahir', '$jenisKelamin', '$agama', '$nomorHp', '$alamatDiri')";
  
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    echo "<script>confirm('Data berhasil disimpan'); window.location.href = 'tampil.php'; </script>";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
  }
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
<body style="background-color: #F5F7F8;">

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

<div class="container bg-white rounded mt-3 pb-3">
  <div class="mb-3 pt-4 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="nik">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nik">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="namaLengkap">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namaLengkap">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="formFileSm" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="fotoDiri">Foto Diri</label>
    <div class="col-sm-10">
      <input class="form-control form-control-sm" type="file" name="fotoDiri">
    </div>
  </div>

<div class="mb-3 row">
  <label for="formFile" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="fotoKK">Foto Kartu Keluarga</label>
  <div class="col-sm-10">
  <input class="form-control form-control-sm" type="file" name="fotoKK">
  </div>
</div>

<div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tempatLahir">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tglLahir">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Jenis Kelamin</label>
    <div class="col-sm-10">
    <select class="form-select form-select-sm" aria-label="Small select example" name="jenisKelamin">
  <option selected>Jenis Kelamin</option>
  <option value="1">Pria</option>
  <option value="2">Wanita</option>
</select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Agama</label>
    <div class="col-sm-10">
    <select class="form-select form-select-sm" aria-label="Small select example" name="agama">
  <option selected>Agama</option>
  <option value="1">Islam</option>
  <option value="2">Kristen</option>
  <option value="2">Hindu</option>
  <option value="2">Budha</option>
  <option value="2">Konghucu</option>
</select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Nomor HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomorHp">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Alamat Domisili</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamatDiri">
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
