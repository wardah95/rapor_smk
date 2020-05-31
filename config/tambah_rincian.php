<?php 
error_reporting(0);
include "koneksi.php";
 
// menangkap data yang di kirim dari form

$nama       = $_POST['nama'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO rincian VALUES('','$nama','$nominal','$keterangan')");

header("location: ../admin/index.php?content=pembayaran");
?>
