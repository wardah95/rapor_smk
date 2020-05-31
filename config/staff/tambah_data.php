<?php 

include "../koneksi.php";
 
// menangkap data yang di kirim dari form

$nama_staf          = $_POST['nama_staf'];
$tempat_lahir       = $_POST['tempat_lahir'];
$tgl_lahir          = $_POST['tgl_lahir'];
$alamat             = $_POST['alamat'];
$status_diri        = $_POST['status_diri'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO staf_sekolah VALUES('','$nama_staf','$tempat_lahir','$tgl_lahir','$alamat','$status_diri','$pendidikan_terakhir')");

header("location: ../../admin/index.php?content=staff")
 
?>







