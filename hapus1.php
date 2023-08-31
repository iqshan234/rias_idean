<?php
include 'koneksi.php';

$id_gambar = $_GET["id_gambar"];
$gambar = $_GET["gambar"];
$sql = "delete from gambar1 where id_gambar=$id_gambar";
$hapus_bank = mysqli_query($kon, $sql);

//Menghapus file gambar
unlink("gambar/" . $gambar);

if ($hapus_bank) {
     header("Location:up_su.php?hapus=berhasil");
} else {
     header("Location:up_su.php?hapus=gagal");
}
