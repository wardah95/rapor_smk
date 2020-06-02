<?php

session_start();
$out=session_destroy();
if($out)
{
	echo "<br><br><br><br><strong><center><i>Anda berhasil keluar!";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '1;url=../index.php'>