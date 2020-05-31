<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form
$id_siswa       = $_POST['id'];
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

$update         =   "UPDATE siswa SET nis='$nis', nama_lengkap='$nama', tahun_masuk='$tahun', tempat_lahir='$tempat', tanggal_lahir='$tanggal', alamat_rumah='$alamat', nama_ayah='$ayah', pekerjaan_ayah='$pkayah', nama_ibu='$ibu', pekerjaan_ibu='$pkibu', jenis_kelamin='$jk', agama='$agama' where id_siswa='$id_siswa'";
$updatesiswa	=   mysqli_query($conn, $update)or die(mysqli_error());

if ($updatesiswa)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=siswa">';
    }
else {
    	//echo "<strong><center>Data Gagal Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
 

?>