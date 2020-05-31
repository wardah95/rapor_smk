<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Siswa</title>
</head>
<body>
    
<a class="btn btn-success" href="input-walikelas.php"> Tambah Data Kelas </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Siswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Pengajar</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Opsi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.*,c.* FROM kelas a JOIN staf_sekolah b on a.id_staf = b.id_staf JOIN mata_pelajaran c on a.id_mapel =c.id_mapel");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_pelajaran'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_staf'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['kelas'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['jurusan'] ?>
                        </td>
                       
                        <td>
                            <a href="edit-kelas.php?id_kelas=<?php echo $hasil['id_kelas'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus-kelas.php?id_kelas=<?php echo $hasil['id_kelas'] ?> " class="badge badge-danger"> Hapus </a>
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