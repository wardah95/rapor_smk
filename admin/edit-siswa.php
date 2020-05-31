<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Input Data </title>
</head>
<body>
    <h2> Input Data Staff </h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;"> Kembali </a> <br> <br>
    <form action="" method="POST">
 <table>
                
                <input type="" name="id_staf" >
                </tr>
                <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td> <input type="text" name="nama_staf" placeholder="Nama Lengkap" required> </td>
                </tr>
                <tr>    
                <td> Tempat Lahir </td>
                <td> : </td>
                <td> <input type="text" name="tempat" placeholder="Tempat Lahir" required> </td>
                </tr>
                <tr>
                <td> Tanggal Lahir </td>
                <td> : </td>
                <td> <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required> </td>
                </tr>
                <tr>
                <td> Alamat </td>
                <td> : </td>
                <td> <input type="text" name="alamat" placeholder="Alamat" required> </td>
                </tr>
                <tr>
                <td> Status Diri </td>
                <td> : </td>
                <td> <input type="text" name="status_diri" placeholder="Status Diri" required> </td>
                </tr>
                <tr>
                <td> Pendidikan Terakhir </td>
                <td> : </td>
                <td> <input type="text" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required> </td>
                </tr>
                <tr>
                <td> Jabatan </td>
                <td> : </td>
                <td> <input type="text" name="jabatan" placeholder="Jabatan" required> </td>
                </tr>
               <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="simpan" value="Simpan"> </td>
                </tr>
    </table>
    </form>           
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
  Input Siswa
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
                  <h4 class="card-title">Tambah Siswa </h4>
                  <p class="card-category">Menambah Data Siswa </p>
                </div>
                <div class="card-body">
                        <?php
                        include 'koneksi.php';
                        $id_siswa = (isset($_GET['id_siswa']) ? $_GET['id_siswa'] : '');
                        $data = mysqli_query($conn,"select * from siswa where id_siswa='$id_siswa'");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                  <form action="../config/edit-siswa.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIS</label>
                          <input name="id" type="hidden" value="<?php echo $d['id_siswa']; ?>">
                          <input type="text" class="form-control" name="nis" value="<?php echo $d['nis']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap </label>
                          <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>"required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tahun Masuk</label>
                          <input type="text" class="form-control" name="tahun_masuk" value="<?php echo $d['tahun_masuk']; ?>"required>
                        </div>   
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir </label>
                          <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Lahir </label>
                          <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat Rumah </label>
                          <input type="text" class="form-control" name="alamat_rumah" value="<?php echo $d['alamat_rumah']; ?>"required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Ayah </label>
                          <input type="text" class="form-control" name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>"required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pekerjaan Ayah </label>
                          <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $d['pekerjaan_ayah']; ?>"required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Ibu  </label>
                          <input type="text" class="form-control" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>"required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pekerjaan Ibu </label>
                          <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $d['pekerjaan_ibu']; ?>"required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label>
                          <select class="form-control"  name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"required>
                            <option>Perempuan</option>
                            <option>Laki-Laki</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Agama </label>
                          <input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?>"required>
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
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Edit Data Siswa </button>
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