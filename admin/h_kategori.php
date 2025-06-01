<?php
include "koneksi.php";
$id = $_GET['id'];

<<<<<<< HEAD
$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori = '$id'");
=======
$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori = '$id'");
>>>>>>> 6aa24a0d93906641014d5809102ff9bebc1ca676

if($hapus){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    header("refresh:0, kategori.php");
}else{
    echo "<script>alert('Data gagal dihapus!')</script>";
    header("refresh:0, kategori.php");
}
?>