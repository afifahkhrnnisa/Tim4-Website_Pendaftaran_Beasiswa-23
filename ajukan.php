<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $selectedScholarship = $_POST["jenisBeasiswa"];
  switch ($selectedScholarship) {
    case "1":
      $queryFetchNik = "SELECT nik FROM user";
      $resultFetchNik = mysqli_query($koneksi, $queryFetchNik);
    
      if ($resultFetchNik) {
          $row = mysqli_fetch_assoc($resultFetchNik);
          $nik = $row['nik'];
          $jenjang = $_POST["jenjang"];
          $nim = $_POST["nim"];
          $perguruanTinggi = $_POST["perguruanTinggi"];
          $ipk = $_POST["ipk"];
          $angkatan = $_POST["angkatan"];
          $prodi = $_POST["prodi"];
          $suketAktif = $_POST["suketAktif"];
          $prestasi = $_POST["prestasi"];
          $kategori = $_POST["kategori"];
          $bidang = $_POST["bidang"];
          $peringkat = $_POST["peringkat"];
          $tingkat = $_POST["tingkat"];
          $penyelenggara = $_POST["penyelenggara"];
          $sertifikatPrestasi = $_POST["sertifikatPrestasi"];

          $query = "INSERT INTO beaprestasi (nik, jenisBeasiswa, jenjang, nim, perguruanTinggi, ipk, angkatan, prodi, suketAktif, prestasi, kategori, bidang, peringkat, tingkat, penyelenggara, sertifikatPrestasi) 
    VALUES ('$nik', '$selectedScholarship', '$jenjang', '$nim', '$perguruanTinggi', '$ipk', '$angkatan', '$prodi', '$suketAktif', '$prestasi','$kategori','$bidang','$peringkat','$tingkat','$penyelenggara','$sertifikatPrestasi')";
      
      $result = mysqli_query($koneksi, $query);
    
      if ($result) {
        echo "<script>confirm('Data berhasil disimpan'); window.location.href = 'tampil.php'; </script>";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
      }
    }
    break;

    case "2":
      $queryFetchNik = "SELECT nik FROM user";
      $resultFetchNik = mysqli_query($koneksi, $queryFetchNik);
    
      if ($resultFetchNik) {
          $row = mysqli_fetch_assoc($resultFetchNik);
          $nik = $row['nik'];
          $jenjang = $_POST["jenjang"];
          $nim = $_POST["nim"];
          $perguruanTinggi = $_POST["perguruanTinggi"];
          $ipk = $_POST["ipk"];
          $angkatan = $_POST["angkatan"];
          $prodi = $_POST["prodi"];
          $suketAktif = $_POST["suketAktif"];
          $kategori = $_POST["kategori"];
          $karya = $_POST["karya"];
          $penyelenggara = $_POST["penyelenggara"];
          $tahun = $_POST["tahun"];
          $fileKarya = $_POST["fileKarya"];

          $query = "INSERT INTO beatalenta (nik, jenisBeasiswa, jenjang, nim, perguruanTinggi, ipk, angkatan, prodi, suketAktif, kategori, karya, penyelenggara, tahun, fileKarya) 
    VALUES ('$nik', '$selectedScholarship', '$jenjang', '$nim', '$perguruanTinggi', '$ipk', '$angkatan', '$prodi', '$suketAktif', '$kategori','$karya','$penyelenggara','$tahun','$fileKarya')";
      
      $result = mysqli_query($koneksi, $query);
    
      if ($result) {
        echo "<script>confirm('Data berhasil disimpan'); window.location.href = 'tampil.php'; </script>";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
      }
    }
    break;

    case "3":
      $queryFetchNik = "SELECT nik FROM user";
      $resultFetchNik = mysqli_query($koneksi, $queryFetchNik);
    
      if ($resultFetchNik) {
          $row = mysqli_fetch_assoc($resultFetchNik);
          $nik = $row['nik'];
          $jenjang = $_POST["jenjang"];
          $nim = $_POST["nim"];
          $perguruanTinggi = $_POST["perguruanTinggi"];
          $ipk = $_POST["ipk"];
          $angkatan = $_POST["angkatan"];
          $prodi = $_POST["prodi"];
          $suketAktif = $_POST["suketAktif"];
          $slipGaji = $_POST["slipGaji"];
          $sktm = $_POST["sktm"];
          $buktiListrik = $_POST["buktiListrik"];

          $query = "INSERT INTO beaekonomi (nik, jenisBeasiswa, jenjang, nim, perguruanTinggi, ipk, angkatan, prodi, suketAktif, slipGaji, sktm, buktiListrik) 
    VALUES ('$nik', '$selectedScholarship', '$jenjang', '$nim', '$perguruanTinggi', '$ipk', '$angkatan', '$prodi', '$suketAktif', '$slipGaji','$sktm','$buktiListrik')";
      
      $result = mysqli_query($koneksi, $query);
    
      if ($result) {
        echo "<script>confirm('Data berhasil disimpan'); window.location.href = 'tampil.php'; </script>";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
      }
    }
    break;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengajuan</title>
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

    function showFileInputs() {
      var selectedScholarship = document.getElementsByName("jenisBeasiswa")[0].value;

      document.getElementById("prestasiFiles").style.display = "none";
      document.getElementById("talenta").style.display = "none";
      document.getElementById("ekonomi").style.display = "none";

      if (selectedScholarship === "1") {
        document.getElementById("prestasiFiles").style.display = "block";
      } else if (selectedScholarship === "2") {
        document.getElementById("talenta").style.display = "block";
      } else if (selectedScholarship === "3") {
        document.getElementById("ekonomi").style.display = "block";
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
    <a class="nav-link fw-bold" aria-current="page" href="ajukan.php" style="color: #2B2A4C;">Beasiswa Tujuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold" href="bank.php" style="color: #2B2A4C;">Data Bank</a>
  </li>
</ul>

<div class="container bg-white rounded mt-3 pb-3">
<div class="mb-3 pt-4 row" style="display: none;">
    <label for="input" class="col-sm-2 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;"  name="nik">Nik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nik">
    </div>
  </div>

  <div class="mb-3 row pt-3">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Jenis Beasiswa</label>
    <div class="col-sm-9">
    <select class="form-select form-select-sm" aria-label="Small select example" name="jenisBeasiswa" onchange="showFileInputs()">
  <option selected>Pilih Jenis Beasiswa</option>
  <option value="1">Prestasi</option>
  <option value="2">Talenta</option>
  <option value="3">Ekonomi</option>
</select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Jenjang</label>
    <div class="col-sm-9">
    <select class="form-select form-select-sm" aria-label="Small select example" name="jenjang">
  <option selected>Pilih Jenjang</option>
  <option value="1">S1</option>
  <option value="2">S2</option>
  <option value="2">S3</option>
</select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">NIM</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nim">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Perguruan Tinggi</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="perguruanTinggi">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">IPK</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="ipk">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="namaLengkap">Angkatan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="angkatan">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Program Studi</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="prodi">
    </div>
  </div>

  <div class="mb-3 row">
  <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;" name="fotoDiri">Surat Keterangan Aktif</label>
  <div class="col-sm-9">
  <input class="form-control form-control-sm" type="file" name="suketAktif">
  </div>
</div>

<div id="prestasiFiles" style="display: none;">
<div class="mb-3 pt-3 row">
    <label for="prestasiFies" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Nama Prestasi</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name= "prestasi">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Kategori Kompetisi</label>
    <div class="col-sm-9">
    <select class="form-select form-select-sm" aria-label="Small select example" name="kategori">
  <option selected>Pilih Kategori Kompetisi</option>
  <option value="1">Pusat Prestasi Nasional Dikti</option>
  <option value="2">Mandiri/Non Dikti</option>
</select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Bidang</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bidang">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Peringkat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="peringkat">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Tingkat</label>
    <div class="col-sm-9">
    <select class="form-select form-select-sm" aria-label="Small select example" name="tingkat">
  <option selected>Pilih Tingkat</option>
  <option value="1">Kabupaten/Kota</option>
  <option value="2">Provinsi</option>
  <option value="3">Nasional</option>
  <option value="4">Internasional</option>
</select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Penyelenggara</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="penyelenggara">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Sertifikat Prestasi</label>
    <div class="col-sm-9">
      <input class="form-control form-control-sm" type="file" id="formFile" name="sertifikatPrestasi">
    </div>
  </div>
</div>

<div id="talenta" style="display: none;">
  <div class="mb-3 pt-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Kategori</label>
    <div class="col-sm-9">
    <select class="form-select form-select-sm" aria-label="Small select example" name="kategori">
  <option selected>Pilih Kategori</option>
  <option value="1">Buku</option>
  <option value="2">Jurnal</option>
  <option value="3">Lainnya</option>
</select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Nama Karya</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="karya">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Penyelenggara</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="penyelenggara">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Tahun Mendapatkan</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" name="tahun">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">File Karya</label>
    <div class="col-sm-9">
      <input class="form-control form-control-sm" type="file" id="formFile" name="fileKarya">
    </div>
  </div>
</div>

<div id="ekonomi" style="display: none;">
  <div class="mb-3 pt-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Slip Gaji Orang Tua</label>
    <div class="col-sm-9">
      <input class="form-control form-control-sm" type="file" id="formFile" name="slipGaji">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Surat Keterangan Tidak Mampu</label>
    <div class="col-sm-9">
      <input class="form-control form-control-sm" type="file" id="formFile" name="sktm">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="input" class="col-sm-3 col-form-label fw-bold" style="color: #2B2A4C; font-size: 15px;">Bukti Tagihan Listrik</label>
    <div class="col-sm-9">
      <input class="form-control form-control-sm" type="file" id="formFile" name="buktiListrik">
    </div>
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
