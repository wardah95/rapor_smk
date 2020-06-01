<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_staf    = $_GET['id_staf'];
$jurusan    = $_GET['jurusan'];
$nama_kelas =$_GET['nama_kelas'];
 
// menghapus data dari database
mysqli_query($conn,"delete from walikelas where id_staf='$id_staf' AND jurusan='$jurusan' AND nama_kelas='$nama_kelas' ");
 
 // mengalihkan halaman kembali ke index.php
 header('location: ../admin/index.php?content=wali');
?>