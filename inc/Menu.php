<?php
@$page = $_GET['page'];

switch ($page)
{   
    

    case 'Form':
        include '../pages/form/tampil.php';
    break;

    case 'Hasil':
        include '../pages/hasil/hasil.php';
    break;

    case 'Upload':
        include '../pages/form/upload.php';
    break;

    default:
        include '../pages/form/tampil.php';
            break;
}
?>