<?php
include "koneksi.php";


$nik = $_GET['nik'];

$mysqlibio = "DELETE FROM biodata where nik = $nik";

if(mysqli_query($koneksi, $mysqlibio)) {
    echo "<script>confirm('Data berhasil dihapus'); window.location.href = 'tampil.php'; </script>";
}
else{
    echo "Data Gagal Dihapus ". $mysqlibio ."". mysqli_error($koneksi);
}

    $mysqliortu = "DELETE FROM ortu where nik = $nik";
    
    if(mysqli_query($koneksi, $mysqliortu)) {
        echo "<script>confirm('Data berhasil dihapus'); window.location.href = 'tampil.php'; </script>";
    }
    else{
        echo "Data Gagal Dihapus ". $mysqliortu ."". mysqli_error($koneksi);
    }

   
        $mysqlibank = "DELETE FROM bank where nik = $nik";
        
        if(mysqli_query($koneksi, $mysqlibank)) {
            echo "<script>confirm('Data berhasil dihapus'); window.location.href = 'tampil.php'; </script>";
        }
        else{
            echo "Data Gagal Dihapus ". $mysqlibank ."". mysqli_error($koneksi);
        }
    
        
?>