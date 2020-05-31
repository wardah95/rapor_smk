<!DOCTYPE html>
<html lang="en">

<head>
  <title>
  Input 
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
                  <h4 class="card-title">Tambah Data Kelas</h4>
                  <p class="card-category">Menambah Data Kelas </p>
                </div>
                <div class="card-body">
                  <form action="../config/tambah_kelas.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">MataPelajaran</label>
                          <select class="form-control" name="id_mapel" aria-describedby="basic-addon1" required>
                          <?php
                    include 'koneksi.php';
                    $stf = "SELECT * FROM mata_pelajaran";
                    $querystf = mysqli_query($conn,$stf);
                    while ($dt = mysqli_fetch_array($querystf)) { ?>
                    <option value="<?php echo $dt['id_mapel'] ?>"> <?php echo $dt['nama_pelajaran'] ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group">  
                        <label class="bmd-label-floating">Nama Guru</label>
                          <select class="form-control" name="id_staf" aria-describedby="basic-addon1" required>
                          <?php
                    include 'koneksi.php';
                    $stf = "SELECT * FROM staf_sekolah";
                    $querystf = mysqli_query($conn,$stf);
                    while ($dt = mysqli_fetch_array($querystf)) { ?>
                    <option value="<?php echo $dt['id_staf'] ?>"> <?php echo $dt['nama_staf'] ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kelas </label>
                          <select class="form-control"  name="kelas" required>
                          <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Jurusan</label>
                          <select class="form-control"  name="jurusan" required>
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
                          <label class="bmd-label-floating">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_terakhir" required>
                        </div>
                      </div>
                    </div>                -->
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Tambah Kelas </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>

</body>

</html>