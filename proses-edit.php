<?php 

include('config.php');

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jo = $_POST['jenis_olimpiade'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query update
    $sql = "UPDATE calon_peserta SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', jenis_olimpiade='$jo', asal_sekolah='$sekolah' WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_peserta.php');
    } else {
        // Kalau gagal tampilkan pesan
        die("Gagal Menyimpan perubahan");
    }
} else {
    die("Akses dilarang....");
}

?>