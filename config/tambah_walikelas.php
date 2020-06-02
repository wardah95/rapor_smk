<?php 
error_reporting(0);
include "koneksi.php";
 
// menangkap data yang di kirim dari form


$id_staf        = $_POST['id_staf'];
$id_siswa       = $_POST['id_siswa'];
$jurusan        = $_POST['jurusan'];
$nama_kelas     = $_POST['nama_kelas'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO walikelas VALUES('','$id_staf','$id_siswa','$jurusan','$nama_kelas')");

header("location: ../admin/index.php?content=wali");
?>
