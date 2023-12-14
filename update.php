<?php
include "koneksi.php";

if (isset($_POST["simpan"])){
$nik = $_POST['nik'];
$namaLengkap = $_POST["namaLengkap"];
$fotoDiri = $_POST["fotoDiri"];
$fotoKK = $_POST["fotoKK"];
$tempatLahir = $_POST["tempatLahir"];
$tglLahir = $_POST["tglLahir"];
$jenisKelamin = $_POST["jenisKelamin"];
$agama = $_POST["agama"];
$nomorHp = $_POST["nomorHp"];
$alamatDiri = $_POST["alamatDiri"];

$query = "UPDATE biodata set namaLengkap = '$namaLengkap', fotoDiri =  '$fotoDiri', fotoKK = '$fotoKK', tempatLahir = '$tempatLahir', tglLahir = '$tglLahir', jenisKelamin = '$jenisKelamin', agama = '$agama', nomorHp = '$nomorHp', alamatDiri = '$alamatDiri' where nik = $nik"; 
  
if(mysqli_query($koneksi, $query)) {
    echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'tampil.php'; </script>";
}
else{
    echo "Error: ". $mysqli ."". mysqli_error($koneksi);
}
}

if (isset($_POST["simpan1"])){
    $nik = $_POST['nik'];
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

    $query = "UPDATE ortu SET namaAyah = '$namaAyah', pekerjaanAyah = '$pekerjaanAyah', 
    domisiliAyah = '$domisiliAyah', noAyah = '$noAyah', gajiAyah = '$gajiAyah', 
    namaIbu = '$namaIbu', pekerjaanIbu = '$pekerjaanIbu', domisiliIbu = '$domisiliIbu', noIbu = '$noIbu', 
    gajiIbu = '$gajiIbu' where nik = '$nik'"; 
      
    if(mysqli_query($koneksi, $query)) {
        echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'tampil.php'; </script>";
    }
    else{
        echo "Error: ". $mysqli ."". mysqli_error($koneksi);
    }
    }

    if (isset($_POST["simpanbank"])){
            $nik = $_POST['nik'];
            $namaBank = $_POST["namaBank"];
            $noRek = $_POST["noRek"];
            $namaPemilik = $_POST["namaPemilik"];
        
            $query = "UPDATE bank SET namaBank = '$namaBank', noRek = '$noRek', namaPemilik = '$namaPemilik' 
            where nik = '$nik'"; 
              
            if(mysqli_query($koneksi, $query)) {
                echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'tampil.php'; </script>";
            }
            else{
                echo "Error: ". $mysqli ."". mysqli_error($koneksi);
            }
            }       
    
            if (isset($_POST["simpanbea"])){
                $selectedScholarship = $_POST["jenisBeasiswa"];
                switch ($selectedScholarship) {
                    case "1":
                        $nik = $_POST['nik'];
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
        
                        $query = "UPDATE beaprestasi SET jenisBeasiswa = '$selectedScholarship', jenjang = '$jenjang', nim = '$nim', perguruanTinggi = '$perguruanTinggi', ipk = '$ipk', 
                        angkatan = '$angkatan', prodi = '$prodi', suketAktif = '$suketAktif', 
                        prestasi = '$prestasi', kategori = '$kategori', bidang = '$bidang', peringkat = '$peringkat', tingkat = '$tingkat', 
                        penyelenggara = '$penyelenggara', sertifikatPrestasi = '$sertifikatPrestasi' where nik = '$nik'"; 
        
                        if(mysqli_query($koneksi, $query)) {
                            echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'table.php'; </script>";
                        }
                        else{
                            echo "Error: ". $mysqli ."". mysqli_error($koneksi);
                        }
                    break;
        
                    case "2":
                        $nik = $_POST['nik'];
                        $jenjang = $_POST["jenjang"];
                        $nim = $_POST["nim"];
                        $perguruanTinggi = $_POST["perguruanTinggi"];
                        $ipk = $_POST["ipk"];
                        $angkatan = $_POST["angkatan"];
                        $prodi = $_POST["prodi"];
                        $suketAktif = $_POST["suketAktif"];
                        $kategori = $_POST["kategori1"];
                        $karya = $_POST["karya"];
                        $penyelenggara = $_POST["penyelenggara1"];
                        $tahun = $_POST["tahun"];
                        $fileKarya = $_POST["fileKarya"];
        
                        $query = "UPDATE beatalenta SET jenisBeasiswa = '$selectedScholarship', jenjang = '$jenjang', nim = '$nim', perguruanTinggi = '$perguruanTinggi', ipk = '$ipk', 
                        angkatan = '$angkatan', prodi = '$prodi', suketAktif = '$suketAktif', 
                        kategori = '$kategori', penyelenggara = '$penyelenggara', tahun = '$tahun', fileKarya = '$fileKarya' where nik = '$nik'"; 
                        if(mysqli_query($koneksi, $query)) {
                            echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'table.php'; </script>";
                        }
                        else{
                            echo "Error: ". $mysqli ."". mysqli_error($koneksi);
                        }
                    break;
        
                    case "3":
                        $nik = $_POST['nik'];
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
        
                        $query = "UPDATE beatalenta SET jenisBeasiswa = '$selectedScholarship', jenjang = '$jenjang', nim = '$nim', perguruanTinggi = '$perguruanTinggi', ipk = '$ipk', 
                        angkatan = '$angkatan', prodi = '$prodi', suketAktif = '$suketAktif', 
                        slipGaji = '$slipGaji', sktm = '$sktm', buktiListrik = '$buktiListrik' where nik = '$nik'"; 
        
                        if(mysqli_query($koneksi, $query)) {
                            echo "<script>confirm('Data berhasil diupdate'); window.location.href = 'table.php'; </script>";
                        }
                        else{
                            echo "Error: ". $mysqli ."". mysqli_error($koneksi);
                        }
                        break;
                }
                }
?>