<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Photo</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_form ORDER BY nama_pria ASC ");
                $NO = 1;
                while($PENGGUNA = mysqli_fetch_array($DATA)) {
                ?>
              <tr>
              <td><?php echo $NO; ?></td>
                <td><?php echo $PENGGUNA['nama_user'];?></td>
                <td><center><img src="../images/pengguna/<?php echo $PENGGUNA['photo_user'];?>" alt="Foto pengguna" width="75px" height="75px"></center></td>
                <td><?php echo $PENGGUNA['id_userlevel'];?></td>
                <td>
                  <a href="index.php?page=Pengguna&poseidon=edit&id=<?php echo $PENGGUNA['id_user'];?>"><i class="fas fa-edit" style="font-size:20px;color:red"></i>Edit</a><br>
                  <a href="index.php?page=Pengguna&poseidon=hapus&id=<?php echo $PENGGUNA['id_user'];?>"><i class="fas fa-trash" style="font-size:20px;color:green"></i>Detele</td>
              </tr>
              <?php 
              $NO++;
              };?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Photo</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->

<script src="../assets/js/print.js"></script>