<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
    
<a class="btn btn-success" href="input-staff.php"> Tambah Data Staf </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Staff</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Staff</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Status Diri</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Opsi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT * FROM staf_sekolah");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_staf'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tempat_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tgl_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['alamat'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['status_diri'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['pendidikan_terakhir'] ?>
                        </td>
                        <td>
                            <a href="edit-staff.php?id_staf=<?php echo $hasil['id_staf'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/staff/hapus_data.php?id_staf=<?php echo $hasil['id_staf'] ?> " class="badge badge-danger"> Hapus </a>
                        </td>
                        <?php } ?>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


</body>
</html>