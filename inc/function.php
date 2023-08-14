<?php


function AutoNumber($tabel, $kolom, $lebar = 0, $awalan)
{
	include "koneksi.php";

	$AUTO = mysqli_query($KONEKSI, "SELECT $kolom FROM $tabel ORDER BY $kolom desc limit 1") or die(mysqli_connect_error($AUTO));

	$JUMLAH_RECORD = mysqli_num_rows($AUTO);
	if ($JUMLAH_RECORD == 0) {
		$NUMBER = 1;
	} else {
		$ROW = mysqli_fetch_array($AUTO);
		$NUMBER = intval(substr($ROW[0], strlen($awalan))) + 1;
	}

	if ($lebar > 0) {
		$ANGKA = $awalan . str_pad($NUMBER, $lebar, "0", STR_PAD_LEFT);
	} else {
		$ANGKA = $awalan . $NUMBER;
	}
	return $ANGKA;
}
//Cek nama user
function userlogin($login)
{
	include "koneksi.php";

	$USER = $login;
	$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' ");

	$DATA = mysqli_fetch_array($QUERY);
	$PENGGUNA = $DATA['nama_user'];
	return $PENGGUNA;
}
//echo userlogin($_SESSION['username']);


// Function untuk penomoran ID

