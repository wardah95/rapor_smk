<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_rincian = $_GET['id_rincian'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from rincian where id_rincian='$id_rincian'");
 
 // mengalihkan halaman kembali ke index.php
 header('location: ../admin/index.php?content=pembayaran');
?>