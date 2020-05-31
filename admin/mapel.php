<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mapel </title>
</head>
<body>
    
<a class="btn btn-success" href="input-mapel.php"> Input Data Matapelajaran </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> Matapelajaran </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>ID-Mapel</th>
                        <th>Nama-Mapel</th>
                        <th>Guru</th>
                        <th>Jenis</th>
                        <th>Jurusan</th>
                        <th>Tingkat</th>
                        <th>Opsi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.id_staf, b.nama_staf FROM mata_pelajaran a 
                            INNER JOIN staf_sekolah b ON a.id_staf=b.id_staf");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['id_mapel'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_pelajaran'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_staf'] ?>
                        </td>
                        
                        <td>
                            <?php echo $hasil['jenis_pelajaran'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['jurusan'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tingkat'] ?>
                        </td>
                        <td>
                            <a href="edit-mapel.php?id_mapel=<?php echo $hasil['id_mapel'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus-mapel.php?id_mapel=<?php echo $hasil['id_mapel'] ?> " class="badge badge-danger"> Hapus </a>
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