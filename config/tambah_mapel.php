<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form

$nama_pelajaran              = $_POST['nama_pelajaran'];
$jenis_pelajaran            = $_POST['jenis_pelajaran'];
// $tempat         = $_POST['tempat_lahir'];
// $tanggal        = $_POST['tanggal_lahir'];
// $alamat         = $_POST['alamat_rumah'];
// $ayah           = $_POST['nama_ayah'];
// $pkayah         = $_POST['pekerjaan_ayah'];
// $ibu            = $_POST['nama_ibu'];
// $pkibu          = $_POST['pekerjaan_ibu'];
// $jk             = $_POST['jenis_kelamin'];
// $agama          = $_POST['agama'];
 

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO mata_pelajaran VALUES('','$nama_pelajaran','$jenis_pelajaran')");

header("location: ../admin/index.php?content=mapel");
?>
