<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
// buat session login dan username
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 

// var_dump($username);
// var_dump($password);

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
// header("location: ../index.php?pesan=gagal");
if($cek > 0){
 
	$data = mysqli_fetch_array($login,MYSQLI_BOTH);
	
	$id_user        = $data['id_user'];
	$username       = $data['username'];
	$password       = $data['password'];
	$id_staf    	= $data['id_staf'];
	$level          = $data['level'];

	// cek jika user login sebagai admin
	if($data['level']=="Admin"){
 
		// buat session login dan username
		$_SESSION['id_user'] 	= $id_user;
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['id_staf'] 	= $id_staf;
		$_SESSION['level'] 		= $level;
		 
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");
		
		// echo "Anda login sebagai admin";
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="siswa"){

		$_SESSION['id_user'] 	= $id_user;
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['id_staf'] 	= $id_staf;
		$_SESSION['level'] 		= $level;
		// alihkan ke halaman dashboard pegawai
		// header("location:../siswa/page/index.php");
		echo "Anda login sebagai siswa";
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="Walikelas"){
		// buat session login dan username
		
		$_SESSION['id_user'] 	= $id_user;
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['id_staf'] 	= $id_staf;
		$_SESSION['level'] 		= $level;
		// alihkan ke halaman dashboard pengurus
		header("location:../walikelas/index.php");
		// echo "Anda login sebagai walikelas";
	
	// cek jika user login sebagai pengurus
	}else if($data['level']=="Kepala_Sekolah"){
		// buat session login dan username
		
		$_SESSION['id_user'] 	= $id_user;
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['id_staf'] 	= $id_staf;
		$_SESSION['level'] 		= $level;
		// alihkan ke halaman dashboard pengurus
		header("location:../kepalasekolah/index.php");
		// echo "Anda login sebagai Kepala_Sekolah";
 
	}else{
		
		// alihkan ke halaman login kembali
	}	
}else{
	echo "ERROR";
	header("location:index.php?pesan=gagal");
}
 
?>