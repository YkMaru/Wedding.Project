<h2>Data informasi</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Tambah Data </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Tambah']) {
    include "proses_tambah.php";
  }
  ?>
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="IdUser">ID Klien</label>
        <input type="text" name="IdUser" class="form-control" id="IdUser" value ="<?php echo AutoNumber('tbl_user', 'id_user',2,"US");?>" readonly>
      </div>
      <div class="form-group">
        <label for="NamaUser">Nama Klien</label>
        <input type="text" name="NamaUser" class="form-control" id="NamaUser" placeholder="Nama Pengguna">
      </div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="Username" class="form-control" id="Username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="Password" name="Password" class="form-control" id="Password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="UserLevel">UserLevel</label>
        <input type="text" name="UserLevel" class="form-control" id="UserLevel" value ="<?php echo "Murid"; ?>" readonly>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary" value = "Tambah Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=pengguna" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
</div>