
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Web Raport Bkm2
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
    <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah </h4>
                  <p class="card-category">Menambah Kelas</p>
                </div>
                <div class="card-body">
                <?php
                include 'koneksi.php';
                $id_kelas = (isset($_GET['id_kelas']) ? $_GET['id_kelas'] : '');
                $data = mysqli_query($conn,"select * from kelas where id_kelas='$id_kelas'");
                while($d = mysqli_fetch_array($data)){
                    ?>
                  <form action="../config/edit-kelas.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID-Kelas</label>
                          <!-- <input name="id_mapel" type="hidden" value="<?php echo $d['id_kelas']; ?>"> -->
                          <br>
                          <input type="text" class="form-control" name="id_kelas" value="<?php echo $d['id_kelas']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID-Mapel</label>
                          <input type="text" class="form-control" name="id_mapel" value="<?php echo $d['id_mapel']; ?>" required>
                        </div>
                      </div>
                      </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID-Staff</label>
                          <input type="text" class="form-control" name="id_staf" value="<?php echo $d['id_staf']; ?>" required>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kelas</label>
                          <input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas']; ?>" required>
                        </div>
                      </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Jurusan</label>
                          <select class="form-control"  name="jurusan" value="<?php echo $d['jurusan']; ?>" required>
                            <option>Teknik Komputer Jaringan</option>
                            <option>Teknik Kendaraan Ringan</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Sepeda Motor</option>
                            <option>Teknik Broadcasting </option>
                            </select>
                            </div>
                        </div>   
                        </div>
    
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jabatan</label>
                          <select class="form-control" name="jabatan" value="" required>
                                        <option>Admin</option>
                                        <option>Kepala Sekolah</option>
                                        <option>Guru</option>
                                        </select>
                        </div>
                      </div> -->
                    </div>               
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Edit Data Kelas</button>
                    <div class="clearfix"></div>
                
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
            
    </div>
  </div>

</body>

</html>