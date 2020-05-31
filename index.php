<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="coba.css">
</head>
<body>
 
	<h1> Lakukan Login <br/>Silahkan Login Terlebih dahulu</h1>
 
	<?php 
	// if(isset($_GET['pesan'])){
	// 	if($_GET['pesan']=="gagal"){
	// 		echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
	// 	}
	// }
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login"><strong>Silahkan login</strong></p>
		<br>
 
		<form action="config/cek_login.php" method="post">
			<label for="username">Username</label>
			<br></br>
			<input type="text" name="username" class="form_login" placeholder="Masukan Username Anda .." required="required" id="username">
 
			<label for="password">Password</label>
			<br></br>
			<input type="password" name="password" class="form_login" placeholder="Masukan Password Anda .." required="required" id="password">
 
			<input type="submit" class="logbtn" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>