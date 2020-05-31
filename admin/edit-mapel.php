
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
                  <p class="card-category">Menambah Staff</p>
                </div>
                <div class="card-body">
                <?php
                include 'koneksi.php';
                $id_mapel = (isset($_GET['id_mapel']) ? $_GET['id_mapel'] : '');
                $data = mysqli_query($conn,"select * from mata_pelajaran where id_mapel='$id_mapel'");
                while($d = mysqli_fetch_array($data)){
                    ?>
                  <form action="../config/edit-mapel.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID-Mapel</label>
                          <!-- <input name="id_mapel" type="hidden" value="<?php echo $d['id_mapel']; ?>"> -->
                          <br>
                          <input type="text" class="form-control" name="id_mapel" value="<?php echo $d['id_mapel']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama-Matapelajaran</label>
                          <input type="text" class="form-control" name="nama_pelajaran" value="<?php echo $d['nama_pelajaran']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Jenis-Matapelajaran</label>
                          <select class="form-control"  name="jenis_pelajaran" value="<?php echo $d['jenis_pelajaran']; ?>" required>
                            <option>Mapel-Wajib Jurusan</option>
                            <option>Mapel-Umum</option>
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
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Edit Data Staff</button>
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