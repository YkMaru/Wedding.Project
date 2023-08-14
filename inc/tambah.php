<?php
include 'function.php';
include 'koneksi.php';
ob_start();

$ID = AutoNumber('tbl_user', 'id_user', 2 ,'US');
$NAMA = mysqli_real_escape_string($KONEKSI,$_POST['Name']);
$USERNAME = mysqli_real_escape_string($KONEKSI,$_POST['Username']);
$PASSWORD = mysqli_real_escape_string($KONEKSI,$_POST['Password']);

// echo $ID;
// echo $NAMA;
// echo $USERNAME;
// echo $PASSWORD;
// echo $USERLEVEL;


if ($ID == "" || $NAMA == "" || $USERNAME == "" || $PASSWORD == "") {
    echo "Gagal";
    } else {
            mysqli_query($KONEKSI,"INSERT INTO tbl_user SET
            id_user  = '$ID',
            nama_user = '$NAMA',
            username = '$USERNAME',
            password = '$PASSWORD'") or die (mysqli_error($KONEKSI));

            @session_start();

            $QUERY = mysqli_query($KONEKSI,"SELECT * FROM tbl_user WHERE username = '$USERNAME' AND password = '$PASSWORD' ");

            $HASIL = mysqli_num_rows($QUERY);
            $DATA = mysqli_fetch_array($QUERY);

            $_SESSION['username'] = $DATA['username'];
            $_SESSION['name'] = $DATA['nama_user'];

            if($HASIL == 1) {    

                echo "Login berhasil";
                header('location:../admin/index.php');
            } else {
                echo "Login Gagal";

            }
                }
?>
<meta http-equiv="refresh" content="3; url=../admin/index.php">