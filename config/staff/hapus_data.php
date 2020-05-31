<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_staf = $_GET['id_staf'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from staf_sekolah where id_staf='$id_staf'");
 
 // mengalihkan halaman kembali ke index.php
 header('location: ../../admin/index.php?content=staff');
?>