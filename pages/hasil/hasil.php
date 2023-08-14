<?php
@$page = $_GET['poseidon'];

switch ($page)
{

    case 'proses_tambah':
        include 'proses_tambah.php';
    break;

    default:
        include 'tampil.php';
    break;
}
?>