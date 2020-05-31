<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form

$nis            = $_POST['nis'];
$nama           = $_POST['nama_lengkap'];
$tahun          = $_POST['tahun_masuk'];
$tempat         = $_POST['tempat_lahir'];
$tanggal        = $_POST['tanggal_lahir'];
$alamat         = $_POST['alamat_rumah'];
$ayah           = $_POST['nama_ayah'];
$pkayah         = $_POST['pekerjaan_ayah'];
$ibu            = $_POST['nama_ibu'];
$pkibu          = $_POST['pekerjaan_ibu'];
$jk             = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];
 

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO siswa VALUES('','$nis','$nama','$tahun','$tempat','$tanggal','$alamat','$ayah','$pkayah','$ibu','$pkibu','$jk','$agama')");

header("location: ../admin/index.php?content=siswa");
 
?>







