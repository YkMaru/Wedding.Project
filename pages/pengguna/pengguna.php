<?php
@$page = $_GET['hades'];

switch ($page)
{

    case 'tambah':
        include 'tambah.php';
    break;

    case 'proses_tambah':
        include 'proses_tambah.php';
    break;

    case 'edit':
        include 'edit.php';
    break;

    case 'hapus':	
        include "hapus.php";
            break;

    case 'proses_hapus': 	
        include "proses_hapus.php";
            break;

    case 'laporan': 	
        include "../laporan/laporan_pengguna.php";
            break;

    default:
        include 'tampil.php';
    break;
}
?>