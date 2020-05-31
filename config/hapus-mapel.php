<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_mapel = $_GET['id_mapel'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from mata_pelajaran where id_mapel='$id_mapel'");
 
 // mengalihkan halaman kembali ke index.php
 header('location: ../admin/index.php?content=mapel');
?>