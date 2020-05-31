<?php 
error_reporting(0);
include "koneksi.php";
 
// menangkap data yang di kirim dari form


$id_staf        = $_POST['id_staf'];
$id_kelas       = $_POST['id_kelas'];
$id_siswa       = $_POST['id_siswa'];
$nama_kelas     = $_POST['namakelas'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO walikelas VALUES('','$id_staf','$id_kelas','$id_siswa','$nama_kelas')");

header("location: ../admin/index.php?content=wali");
?>
