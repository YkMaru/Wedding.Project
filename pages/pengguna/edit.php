<?php 
$ID_KLIEN = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_user WHERE id_user ='$ID_KLIEN'" or die ("Gagal melakukan query!!!".mysqli_connect_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while($ROW = mysqli_fetch_array($HASILEDIT)) {
    $NAMA = $ROW['nama_user'];
    $USERNAME = $ROW['username'];
    $PASSWORD = $ROW['password'];
}


?>
<h2>Edit Data</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Edit Data </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Edit']) {
    include "proses_edit.php";
  }
  ?>
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="IdKlien">ID Klien</label>
        <input type="text" name="IdKlien" class="form-control" id="IdKlien" value ="<?php echo $ID_KLIEN;?>" readonly>
      </div>
      <div class="form-group">
        <label for="NamaUser">Nama Klien</label>
        <input type="text" name="NamaUser" class="form-control" id="NamaUser" value="<?php echo $NAMA;?>">
      </div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="Username" class="form-control" id="Username" value="<?php echo $USERNAME;?>">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="Password" name="Password" class="form-control" id="Password" value="<?php echo $PASSWORD;?>">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="Edit" class="btn btn-primary" value="Edit Data"></input>
      <input type="reset" name="Hapus" class="btn btn-danger" value="Reset"></input>
      <a href = "index.php?page=Pengguna" nama="Cancel" class="btn btn-warning">Cancel</a>
    </div>
  </form>
</div>
</div>