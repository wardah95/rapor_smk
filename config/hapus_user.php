<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_user = $_GET['id_user'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from user where id_user='$id_user'");
 
 // mengalihkan halaman kembali ke index.php
 header('location: ../admin/index.php?content=user');
?>