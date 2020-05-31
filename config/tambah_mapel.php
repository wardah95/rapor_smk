<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form

$nama_pelajaran     = $_POST['nama_pelajaran'];
$jenis_pelajaran    = $_POST['jenis_pelajaran'];
$id_staf            = $_POST['id_staf'];
$jurusan            = $_POST['jurusan'];
$tingkat            = $_POST['tingkat'];


 
// menginput data ke database
mysqli_query($conn,"INSERT INTO mata_pelajaran VALUES('','$id_staf','$nama_pelajaran','$jenis_pelajaran','$jurusan','$tingkat')");

header("location: ../admin/index.php?content=mapel");
?>
