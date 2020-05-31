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
  Input Data Staff
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
                  <h4 class="card-title">Tambah Staff</h4>
                  <p class="card-category">Menambah Staff</p>
                </div>
                <div class="card-body">
                  <form action="../config/staff/tambah_data.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_staf" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tgl_lahir" required>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="alamat" required>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <select class="form-control"  name="status_diri" required>
                            <option>Kawin</option>
                            <option>Belum Kawin</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_terakhir" required>
                        </div>
                      </div>
                    </div>               
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Tambah Staff</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>

</body>

</html>