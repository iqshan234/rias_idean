<?php
include 'koneksi.php';

$id_gambar = $_GET["id_gambar"];
$gambar = $_GET["gambar"];
$sql = "delete from gambar2 where id_gambar=$id_gambar";
$hapus_bank = mysqli_query($kon, $sql);

//Menghapus file gambar
unlink("gambar/" . $gambar);

if ($hapus_bank) {
     header("Location:up_ten.php?hapus=berhasil");
} else {
     header("Location:up_ten.php?hapus=gagal");
}
