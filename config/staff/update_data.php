<?php 

include "../koneksi.php";
 
// menangkap data yang di kirim dari form
$id_staf = $_POST['id'];
$nama_staf = $_POST['nama_staf'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$status_diri = $_POST['status_diri'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];

// var_dump($id_staf);
// $jabatan = $_POST['jabatan'];
 
// menginput data ke database

$update 	    = "UPDATE staf_sekolah SET nama_staf='$nama_staf', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', status_diri='$status_diri', pendidikan_terakhir='$pendidikan_terakhir' where id_staf='$id_staf'";
$updatestaff	= mysqli_query($conn, $update)or die(mysqli_error());

if ($updatestaff)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../../admin/index.php?content=staff">';
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







