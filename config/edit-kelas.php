<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form
$id_kelas               = $_POST['id_kelas'];
$id_mapel               = $_POST['id_mapel'];
$id_staf                = $_POST['id_staf'];
$kelas                  = $_POST['kelas'];
$jurusan                = $_POST['jurusan'];

 
// menginput data ke database

$update         =   "UPDATE kelas SET id_kelas='$id_kelas', id_mapel='$id_mapel', id_staf='$id_staf', kelas='$kelas', jurusan='$jurusan' where 
id_kelas='$id_kelas'";

$updatekelas	    = mysqli_query($conn, $update)or die(mysqli_error());



if ($updatekelas)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=kelas">';
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
 