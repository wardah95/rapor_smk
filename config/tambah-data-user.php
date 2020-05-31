<?php 

include "koneksi.php";
 
// menangkap data yang di kirim dari form


$username   = $_POST['name'];
$password   = $_POST['pw'];
$id_staf    = $_POST['id_staff'];
$level      = $_POST['level'];

$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username='$username'"));
    if ($cek > 0){
    echo "<script>window.alert('username yang anda masukan sudah ada')
    window.location='../admin/input-user.php'</script>";
    }else {
    $query = "INSERT INTO user (id_user, username, password, id_staf, level )VALUES('','$username','$password','$id_staf','$level')";
    mysqli_query($conn,$query);

    header("location: ../admin/index.php?content=user");
    }
 
?>
