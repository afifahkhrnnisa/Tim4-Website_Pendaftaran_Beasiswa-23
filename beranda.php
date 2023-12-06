<?php
include "koneksi.php";
session_start();

if(isset($_SESSION["login"])){
  header("Location: dashboard.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .image img{
            box-shadow: 0px 0px 5px 5px grey;
            border-radius: 20px; 
      }
    </style>
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg p-5 " style="background-color: #2B2A4C;">
        <div class="container">
            <span class="navbar-text text-light fw-bold">BEASISWA FAVORIT</span>
            <div class="nav justify-content-end" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page" href="#jenis">Jenis Beasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light fw-bold" href="#jadwal">Jadwal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light fw-bold" href="#FAQ">FAQ</a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>
      
      <div class="p-3 mb-5 text-white " style="background-color: #2B2A4C; height: 100vh;">
        <div class="container mb-5">
            <div class="image">
              <img src="toga.jpg" class="float-end" alt="gambar" >
            </div>
        </div>
        <div class="container position-relative py-4 px-0">
          <h1 class="display-5 fw-bold">Beasiswa Favorit</h1>
          <p>Siapkah dirimu menjadi awardee beasiswa favorit selanjutnya? <br>
            Raih masa depan yang cerah bersama beasiswa favorit untuk <br>
            menjadi insan yang cerdas dan berakhlak mulia
          </p>
          <p><a class="btn btn-light btn-lg text-primary" href="login.php" role="button">Login/Registrasi &raquo;</a></p>
        </div>
      </div>

      <div class="container mb-5" style="height: 100vh;" id="jenis">
        <h2 class="fw-bold text-center mb-4 ">Jenis Beasiswa Favorit</h2>
        <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <img src="prestasi.jpg" class="card-img-top" alt="Gambar 1">
                  <div class="card-body">
                      <h5 class="card-title">Prestasi Akademik</h5>
                      <p class="card-text">Diberikan kepada mereka yang memiliki segudang prestasi di bidang akademik seperti 
                        olimpiade ilmu/ilimiah ataupun di bidang non-akademik seperti olahraga, seni dan budaya.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="talenta.jpg" class="card-img-top" alt="Gambar 2">
                  <div class="card-body">
                      <h5 class="card-title">Talenta</h5>
                      <p class="card-text">Diberikan kepada mereka yang memiliki talenta/bakat yang diakui oleh masyarakat
                        dan telah dipublikasi dalam media sosial/media pemberitaan atau telah diberikan sertifikat penghargaan terkait. </p>
                  </div>
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="ekonomi.jpg" class="card-img-top" alt="Gambar 3">
                  <div class="card-body">
                      <h5 class="card-title">Ekonomi</h5>
                      <p class="card-text">Diberikan kepada mereka yang memiliki keinginan yang kuat untuk belajar dan
                        terus berkembang namun terhalang oleh kondisi ekonomi, dibuktikan adanya SKTM yang dikeluarkan oleh lurah/camat setempat. </p>
                  </div>
              </div>
          </div>
        </div>
      </div> 
    
  <div class="p-3 mb-5 text-white " style="background-color: #F2F3F7; height: 120vh;" id="jadwal">
      <h2 class="fw-bold text-center mb-5 mt-5 text-primary" id="jadwal">Jadwal Pendaftaran dan Seleksi</h2>
      <div class="container shadow-lg bg-body-tertiary rounded" style="background-color: #ffff">
          <table class="table table-borderless table-striped">
              <thead>
                <tr>
                  <th scope="col" style="line-height: 3;">No</th>
                  <th scope="col" style="line-height: 3;">Kegiatan</th>
                  <th scope="col" style="line-height: 3;">Jadwal Pelaksanaan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="line-height: 3;">1</td>
                  <td style="line-height: 3;">Pendaftaran Beasiswa Unggulan</td>
                  <td style="line-height: 3;">03 s.d. 17 Desember 2023</td>
                </tr>
                <tr>
                  <td style="line-height: 3;">2</td>
                  <td style="line-height: 3;">Seleksi Tahap I</td>
                  <td style="line-height: 3;">18 s.d. 22 Desember 2023</td>
                </tr>
                <tr>
                  <td style="line-height: 3;">3</td>
                  <td style="line-height: 3;">Pengumuman Hasil Seleksi Tahap I</td>
                  <td style="line-height: 3;">23 Desember 2023</td>
                </tr>
                <tr>
                  <td style="line-height: 3;">4</td>
                  <td style="line-height: 3;">Seleksi Tahap II</td>
                  <td style="line-height: 3;">04 s.d. 12 Januari 2024</td>
                </tr>
                <tr>
                  <td style="line-height: 3;">5</td>
                  <td style="line-height: 3;">Pengumuman Hasil Seleksi Tahap II</td>
                  <td style="line-height: 3;">18 Januari 2024</td>
                </tr>
                <tr>
                  <td style="line-height: 3;">6</td>
                  <td style="line-height: 3;">Pembekalan dan Penjelasan Teknis Penanda tanganan Kontrak</td>
                  <td style="line-height: 3;">21 s.d. 30 Januari 2024</td>
                </tr>
              </tbody>
            </table>
      </div>
  </div>

  <div class="p-3 mb-5 " style="background-color: #FFFF; height: 80vh;" id="FAQ">
    <h2 class="fw-bold text-center text-primary">FAQ</h2>
    <h5 class="fw-bold text-center mb-5 text-secondary" id="jadwal">Paling Sering Ditanyakan</h5>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Apa itu Beasiswa Favorit?</h5>
            <p class="card-text">Beasiswa Favorit adalah pemberian biaya pendidikan kepada 
              mahasiswa mahasiswi bangsa Indonesia pada perguruan tinggi yang bekerja sama dengan program 
              Beasiswa Favorit.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Apa saja jenis Beasiswa Favorit?</h5>
            <p class="card-text">Beasiswa Favorit terdiri atas Beasiswa Prestasi Akademik, Beasiswa Talenta dan Beasiswa Ekonomi. 
              Dimana masing - masing beasiswa tersebut dapat diikuti oleh mahasiswa mahasiswi di Indonesia</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Apa dokumen yang perlu dipersiapkan?</h5>
            <p class="card-text">Dokumen yang perlu dipersiapkan tergantung pada jenis beasiswa apa yang kamu pilih. 
              Namun semua jenis Beasiswa Favorit memerlukan surat akreditasi perguruan tinggi, kartu keluarga dan fakta integritas diri.  
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Apa mahasiswa semester akhir bisa mendaftar?</h5>
            <p class="card-text">Mohon maaf, namun untuk saat ini Beasiswa Favorit hanya diperuntukkan untuk mahasiswa mahasiswi 
              yang sedang menempuh maksimal semester 5 saja.
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="p-3" style="background-color: #F8FCFD;">
  <div class="container py-4 py-md-5 px-4 px-md-3 ">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" 
        href="/" aria-label="website">
          <span class="fs-5">Beasiswa Favorit</span>
        </a>
        <ul class="list-unstyled small">
          <li class="mb-2">
            Jl. Bumi No.50, pasarbaru,
            Kec. kotalama , Kota Makassar
            Sulawesi Selatan 0123</li>
          <li class="mb-2">From our heart to all.</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Links</h5>
        <div class="list-unstyled">
          <li class="mb-2"><a href="#">Terbaru</a></li>
          <li class="mb-2"><a href="#">Rekomendasi</a></li>
          <li class="mb-2"><a href="#">Contoh</a></li>
        </div>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Guides</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Alumni</a></li>
          <li class="mb-2"><a href="#">Tutorial</a></li>
          <li class="mb-2"><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>About Us</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Dukung Kami</a></li>
          <li class="mb-2"><a href="#">Cerita Kami</a></li>
          <li class="mb-2"><a href="#">Layanan Kami</a></li>     
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Community</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Karir</a></li>
          <li class="mb-2"><a href="#">Diskusi</a></li>
          <li class="mb-2"><a href="#">Helpdesk</a></li>   
        </ul>
      </div>
    </div>
  </div>
  </div>
  <footer style="background-color: #F8FCFD">
    <div class="container">
        <div class="row">
          <p>&copy; 2023 Kelompok 4</p>			
        </div>
    </div>
  </footer>
</body>
</html>
