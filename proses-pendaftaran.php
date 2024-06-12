<?php

include("config.php");

if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jo = $_POST['jenis_olimpiade'];
    $sekolah = $_POST['asal_sekolah'];

    //buat array
    
    $sql = "INSERT INTO calon_peserta (nama, alamat, jenis_kelamin, jenis_olimpiade, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$jo', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //apakah queery simpan berhasil?
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}

?>