<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
    
<a class="btn btn-success" href="input-user.php"> Tambah User </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data User </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.* FROM staf_sekolah a INNER JOIN user b on a.id_staf = b.id_staf");
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
                            <?php echo $hasil['username'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['level'] ?>
                        </td>
                        <td>
                            <a href="edit-user.php?id_user=<?php echo $hasil['id_staf'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus_user.php?id_user=<?php echo $hasil['id_user'] ?> " class="badge badge-danger"> Hapus </a>
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