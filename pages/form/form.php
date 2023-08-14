<?php
@$page = $_GET['poseidon'];

switch ($page)
{

    case 'proses_tambah':
        include 'proses_tambah.php';
    break;

    case 'hasil':
        include 'hasil.php';
    break;

    case 'wedding':
        include '../wedding/index.php';
    break;

    case 'upload':
        include 'upload.php';
    break;

    default:
        include 'tampil.php';
    break;
}
?>