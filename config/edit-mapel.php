<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form
$id_mapel           = $_POST['id_mapel'];
$nama_pelajaran     = $_POST['nama_pelajaran'];
$jenis_pelajaran    = $_POST['jenis_pelajaran'];

 
// menginput data ke database

$update         =   "UPDATE mata_pelajaran SET id_mapel='$id_mapel', nama_pelajaran='$nama_pelajaran', jenis_pelajaran='$jenis_pelajaran' where 
id_mapel='$id_mapel'";

$updatemapel	    = mysqli_query($conn, $update)or die(mysqli_error());



if ($updatemapel)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=mapel">';
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
 