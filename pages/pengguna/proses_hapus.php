<strong>Hapus Data Berhasil</strong> Halaman Akan di Redirect Otomatis<?php
$ID=$_GET['id'];

$SQL="DELETE FROM `tbl_user` WHERE id_user='$ID'";

mysqli_query($KONEKSI,$SQL);


?>
<meta http-equiv="refresh" content="1; url=index.php?page=Pengguna">
