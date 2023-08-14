<?php
date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");

if (@$_POST['Tambah']) {
  include "proses_tambah.php";
}
  //if (@$_POST['upload']) {
  //  include "upload.php";
  //}

  $ID = "1";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pernikahan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_undangan, nama_pria, nama_perempuan, kepada_yth,
akad_nikah, syukuran, tanggal, waktu,nama_ayah_pria,
nama_ibu_pria, nama_ayah_perempuan, nama_ibu_perempuan, 
mengundang1, mengundang2, mengundang3, mengundang4,
mengundang5, mengundang6, mengundang7, mengundang8, gambar1 FROM tbl_form WHERE id_undangan ='1'";

// Step 3: Execute the query
$result = $conn->query($sql);

// Step 4: Fetch and echo the data
$pria = "Default Name";
$perempuan = "Default Name"; // Nilai default jika data tidak ditemukan

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $pria = $row["nama_pria"];
  $perempuan = $row["nama_perempuan"];
  $tanggal = $row["tanggal"];
}

// Step 5: Close the database connection
$conn->close();

?>
<form action="" method="post" enctype="multipart/form-data">
<div class="container-fluid">
      <div class="form-group">
        <input type="hidden" name="Id" class="form-control" id="Id" value="<?php echo $ID;?>">
      </div>
        <!-- SELECT2 EXAMPLE -->
        <span><center>Nama Mempelai</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="NamaPria" class="form-control" id="NamaPria" placeholder="Nama Pria" value="<?php echo $row["nama_pria"]; ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="NamaPerempuan" class="form-control" id="NamaPerempuan" placeholder="Nama Perempuan" value="<?php echo $row["nama_perempuan"]; ?>">
                  </div>
             </div>
             </div><hr>  
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <div class="input-group">    
					
                      <label for="file">Photo Pria:</label>
                      <input type="file" name="file_photo_pria" id="file_pria">
                    
                      <label for="file">Photo Perempuan:</label>
                      <input type="file" name="file_photo_perempuan" id="file">
                    </div>
                  </div>
              </div>
            </div><hr>
            </div>
            <span><center>Kepada dan Tanggal</center></span>
            <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="KepadaYth" class="form-control" id="KepadaYth" placeholder="Kepada Yth" value="<?php echo $row["kepada_yth"]; ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" name="Tanggal" class="form-control" value="<?php echo $row["tanggal"]; ?>">
                  </div>
              </div>
            </div><hr>  
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Background:</label>
                      <input type="file" name="foto_background" id="file">
                    
                     
                     <label for="file">Logo:</label>
                     <input type="file" name="logo" id="file">
                    
                    </div>
                  </div>
              </div>
            </div><hr>
            <span><center>Our Story</center></span>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 1:</label>
                      <input type="file" name="gambar1" id="file">
                    
                     
                     <label for="file">Gambar 2:</label>
                     <input type="file" name="gambar2" id="file">
                    
                    </div>
                  </div>
              </div>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 3:</label>
                      <input type="file" name="gambar3" id="file">
                  
                    </div>
                  </div>
              </div>
            </div>
            </div><hr>
            <span><center>Wdding Gallery</center></span>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 1:</label>
                      <input type="file" name="galery1" id="file">
              
                      
                      <label for="file">Gambar 2:</label>
                      <input type="file" name="galery2" id="file">
                
                    </div>
                  </div>
              </div>
            </div>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 3:</label>
                      <input type="file" name="galery3" id="file">
                 
                      
                      <label for="file">Gambar 4:</label>
                      <input type="file" name="galery4" id="file">
             
                    </div>
                  </div>
              </div>
            </div>
            </div>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 5:</label>
                      <input type="file" name="galery5" id="file">
                 
                      
                      <label for="file">Gambar 6:</label>
                      <input type="file" name="galery6" id="file">
             
                    </div>
                  </div>
              </div>
            </div>
            </div><hr>
            <span><center>Wishes</center></span>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 1:</label>
                      <input type="file" name="wishes1" id="file">
                    
                     
                     <label for="file">Gambar 2:</label>
                     <input type="file" name="wishes2" id="file">
                    
                    </div>
                  </div>
              </div>
            <div class="row pt-3">
              <div class="col-md-12">
                  <div class="form-group">
                      <div class="input-group">
                      
                      <label for="file">Gambar 3:</label>
                      <input type="file" name="wishes3" id="file">
                  
                    </div>
                  </div>
              </div>
            </div>
            </div><hr>
            <span><center>Akad Nikah Dan Syukuran</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="AkadNikah" class="form-control" id="AkadNikah" placeholder="Akad Nikah" value="<?php echo $row["akad_nikah"]; ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="Syukuran" class="form-control" id="Syukuran" placeholder="Syukuran" value="<?php echo $row["syukuran"]; ?>">
                  </div>
              </div>
            </div><hr>
            <span><center>Keluargan Pria</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="AyahPria" class="form-control" id="AyahPria" placeholder="Ayah Pria" value="<?php echo $row["nama_ayah_pria"]; ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="IbuPria" class="form-control" id="IbuPria" placeholder="Ibu Pria" value="<?php echo $row["nama_ayah_pria"]; ?>">
                  </div>
              </div>
            </div>
            <span><center>Keluarga Perempuan</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="AyahPerempuan" class="form-control" id="AyahPerempuan" placeholder="Ayah Perempuan" value="<?php echo $row["nama_ayah_perempuan"]; ?>">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="IbuPerempuan" class="form-control" id="IbuPerempuan" placeholder="Ibu Perempuan" value="<?php echo $row["nama_ibu_perempuan"]; ?>">
                  </div>
              </div>
            </div><hr>
            <span><center>Peta Lokasi</center></span>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="Peta" class="form-control" id="Peta" placeholder="Masukkan Link" value="<?php echo $row["kepada_yth"]; ?>">
                  </div>
              </div>
            </div><hr>
            <span><center>Turut Mengundang</center></span><br>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama1" class="form-control" id="Nama1" placeholder="Nama 1" value="<?php echo $row["mengundang1"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama2" class="form-control" id="Nama2" placeholder="Nama 2" value="<?php echo $row["mengundang2"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama3" class="form-control" id="Nama3" placeholder="Nama 3" value="<?php echo $row["mengundang3"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama4" class="form-control" id="Nama4" placeholder="Nama 4" value="<?php echo $row["mengundang4"]; ?>">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama5" class="form-control" id="Nama5" placeholder="Nama 5" value="<?php echo $row["mengundang5"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama6" class="form-control" id="Nama6" placeholder="Nama 6" value="<?php echo $row["mengundang6"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama7" class="form-control" id="Nama7" placeholder="Nama 7" value="<?php echo $row["mengundang7"]; ?>">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama8" class="form-control" id="Nama8" placeholder="Nama 8" value="<?php echo $row["mengundang8"]; ?>">
                  </div>
              </div>
            </div><hr>
            <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=pengguna" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>       
</div>
</form>