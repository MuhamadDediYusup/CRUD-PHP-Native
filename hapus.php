<?php
include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id_mhs='$id'");

if ($hapus) {
    echo "<script>
        window.alert('Data Berhasil Di Hapus');
        window.location = 'index.php'
    </script>";
}


//cek login