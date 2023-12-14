<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

$mysqli = "SELECT*FROM biodata";
$hasil = mysqli_query($koneksi, $mysqli);
$jumlah = mysqli_num_rows($hasil);

$ortu = "SELECT*FROM ortu";
$hasilortu = mysqli_query($koneksi, $ortu);
$jumlahortu = mysqli_num_rows($hasilortu);

$mysqli = "SELECT*FROM bank";
$hasilbank = mysqli_query($koneksi, $mysqli);
$jumlahbank = mysqli_num_rows($hasilbank);

$pres = "SELECT*FROM beaprestasi";
$hasilpres = mysqli_query($koneksi, $pres);
$jumlahpres = mysqli_num_rows($hasilpres);

$talenta = "SELECT*FROM beatalenta";
$hasiltalen = mysqli_query($koneksi, $talenta);
$jumlahtalen = mysqli_num_rows($hasiltalen);

$eko = "SELECT*FROM beaekonomi";
$hasileko = mysqli_query($koneksi, $eko);
$jumlaheko = mysqli_num_rows($hasileko);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="tampil.css">
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

      <div class="container">
        <div class="main">
      <div class="row">
        <div class="col-md-20 mt-0">
          <div class="card text-center sidebar">
          <div class="card-body">
            <h2>Selamat Datang</h2>
            <img src="profil.png" class="rounded-circle" width="180">
            <div class="mt-1">
              <h3> <?php
               if ($data = mysqli_fetch_array($hasil)) {
              echo $data['namaLengkap']; 
               }
            ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-20 mt-1">
      <div class="card mb-3 mt-2 content">
          <h1 class="m-3 mb-0 pt-1" style="font-size: 25px">Data Beasiswa</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <h5 style="font-size: 18px">Jenis Beasiswa</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
            </div>
          </div>
        </div> 

        
        <div class="card mb-3 content">
          <h1 class="m-3 mb-0 pt-1" style="font-size: 25px">Data Diri</h1>
          <div class="card-body">
            <div class="row">
            <div class="col-md-3">
                <h5 style="font-size: 18px">NIK</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
               if ($data) {
              echo $data['nik']; 
               }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Pemohon</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
              if ($data) {
            echo $data['namaLengkap']; 
              }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Foto Diri</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
              if ($data) {
               echo $data['fotoDiri']; 
              }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Foto Kartu Keluarga</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
              if ($data) {
               echo $data['fotoKK']; 
              }
            ?>
              </div>
              
              <div class="col-md-3">
                <h5 style="font-size: 18px">Tempat Lahir</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php 
              if ($data) {
              echo $data['tempatLahir']; 
              }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Tanggal Lahir</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php 
              if ($data) {
              echo $data['tglLahir']; 
              }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Jenis Kelamin</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
              if ($data) {
               echo $data['jenisKelamin']; 
              }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Agama</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php 
              if ($data) {
              echo $data['agama']; 
              }
              ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nomor Handphone</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
             if ($data) { 
              echo $data['nomorHp']; 
            }
              ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Alamat</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
              if ($data) {
               echo $data['alamatDiri']; 
              }
            ?>
              </div>
            </div>  
          </div>
          <div class= "container">
          <?php
              if ($data) {
              ?>
          <a href="delete.php?nik=<?php echo $data['nik']; ?>" 
            class="btn btn-danger mb-4" onclick="return confirm('Apakah Anda ingin benar - benar menghapus?')">Hapus</a>
            <a href="editbio.php?nik=<?php echo $data['nik']; ?>" 
            class="btn text-light mb-4" style="background-color: #2B2A4C;">Edit</a>
          <?php    
          }
              ?>
          </div>
        </div>

        <div class="card mb-3 content">
          <h1 class="m-3 mb-0 pt-1" style="font-size: 25px">Data Pendidikan</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <h5 style="font-size: 18px">NIM</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Jenjang Pendidikan</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Kampus</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Tahun Angkatan</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">IPK</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Prodi</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3 content">
          <h1 class="m-3 mb-0 pt-1" style="font-size: 25px">Data Bank</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Bank</h5>
              </div>
              <div class="col-md-9 text-secondary">: 
              <?php 
              if ($databank  = mysqli_fetch_array($hasilbank)) {
              echo $databank['namaBank']; 
              }
              ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nomor Rekening</h5>
              </div>
              <div class="col-md-9 text-secondary">: 
              <?php 
              if ($databank) {
              echo $databank['noRek']; 
              }
              ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Di Buku Rekening</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php 
              if ($databank) {
              echo $databank['namaPemilik']; 
              }
              ?>
              </div>
            </div>
          </div>
          <div class= "container">
          <?php
              if ($databank) {
              ?>
          <a href="delete.php?nik=<?php echo $databank['nik']; ?>" 
            class="btn btn-danger mb-4" onclick="return confirm('Apakah Anda ingin benar - benar menghapus?')">Hapus</a>
            <a href="editbank.php?nik=<?php echo $databank['nik']; ?>" 
            class="btn text-light mb-4" style="background-color: #2B2A4C;">Edit</a>
          <?php    
          }
              ?>
          </div>
       </div>


       <div class="card mb-3 content">
          <h1 class="m-3 mb-0 pt-1" style="font-size: 25px">Data Keluarga</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Ayah</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu = mysqli_fetch_array($hasilortu)) {
             echo $dataortu['namaAyah']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Pekerjaan Ayah</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['pekerjaanAyah']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Domisili Ayah</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['domisiliAyah']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nomor HP Ayah</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['noAyah']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Gaji Ayah</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['gajiAyah']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nama Ibu</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['namaIbu']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Pekerjaan Ibu</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['pekerjaanIbu']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Domisili Ibu</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['domisiliIbu']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Nomor HP Ibu</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['noIbu']; 
            }
            ?>
              </div>
              <div class="col-md-3">
                <h5 style="font-size: 18px">Gaji Ibu</h5>
              </div>
              <div class="col-md-9 text-secondary">:
              <?php
            if ($dataortu) {
             echo $dataortu['gajiIbu']; 
            }
            ?>
              </div>
            </div>
          </div>
          <div class= "container">
          <?php
              if ($dataortu) {
              ?>
          <a href="delete.php?nik=<?php echo $dataortu['nik']; ?>" 
            class="btn btn-danger mb-4" onclick="return confirm('Apakah Anda ingin benar - benar menghapus?')">Hapus</a>
            <a href="editortu.php?nik=<?php echo $dataortu['nik']; ?>" 
            class="btn text-light mb-4" style="background-color: #2B2A4C;">Edit</a>
          <?php    
          }
              ?>
          </div>
        </div>
        <a class="btn text-light mb-4" href="dashboard.php" role="button" style="background-color: #2B2A4C;">Kembali</a>       
    </body>
    </html>