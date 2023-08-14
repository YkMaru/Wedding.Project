<?php
$ID = mysqli_real_escape_string ($KONEKSI,$_POST
['IdKlien']);
$NAMA = mysqli_real_escape_string ($KONEKSI,$_POST
['NamaUser']);
$USERNAME = mysqli_real_escape_string ($KONEKSI,$_POST
['Username']);
$PASSWORD = mysqli_real_escape_string ($KONEKSI,$_POST
['Password']);


if ($ID =="" || $NAMA =="" || $USERNAME =="" || $PASSWORD =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Proses Edit Gagal
             </center>
          </div>
          ";
}
else {
$QUERY = mysqli_query ($KONEKSI, "UPDATE tbl_user SET
    nama_user = '$NAMA',
    username = '$USERNAME',
    password = '$PASSWORD' WHERE id_user ='$ID';") or die ("Gagal melakukan Update Data...!.mysqli_error($QUERY)");
    echo "<div class = 'alert alert-sucses'>
            <center>
                <strong>Edit Data Berhasil</strong> Halaman Akan di Redirect Otomatis
            </center>
        </div>
<meta http-equiv='refresh' content='1 url=index.php?page=Pengguna'>
";
}

?>