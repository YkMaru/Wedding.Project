<?php 
@session_start();
include 'koneksi.php';
$USER = addslashes(@$_POST['Username']);
$PASS = addslashes(@$_POST['Password']);

$QUERY = mysqli_query($KONEKSI,"SELECT * FROM tbl_user WHERE username = '$USER' AND password = '$PASS' ");

$HASIL = mysqli_num_rows($QUERY);
$DATA = mysqli_fetch_array($QUERY);

if ($HASIL == 1) {
    $_SESSION['username'] = $DATA ['username'];
    $_SESSION['name'] = $DATA ['nama_user'];

    echo "Login berhasil";
    header('location:../admin/index.php');
} else {
    echo "Login Gagal";

}

?>