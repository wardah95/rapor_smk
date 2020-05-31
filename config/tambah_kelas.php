<?php 
error_reporting(0);
include "koneksi.php";
 
// menangkap data yang di kirim dari form


$id_mapel               = $_POST['id_mapel'];
$id_staf                = $_POST['id_staf'];
$kelas                  = $_POST['kelas'];
$jurusan                = $_POST['jurusan'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO kelas VALUES('','$id_mapel','$id_staf','$kelas','$jurusan')");

header("location: ../admin/index.php?content=kelas");
?>
