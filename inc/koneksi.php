<?php
$SERVER = 'localhost';
$USERNAME = 'root';
$PASS = '';
$DATABASE = 'db_pernikahan';

$KONEKSI = mysqli_connect($SERVER,$USERNAME,$PASS,$DATABASE);
if (!$KONEKSI) {
    echo "<br>Koneksi ke Database gagal bro...!".mysqli_connect_error();
}
?>