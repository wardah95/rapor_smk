<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Siswa</title>
</head>
<body>
    
<a class="btn btn-success" href="input-walikelas.php"> Tambah Data Walikelas </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Walikelas</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Walikelas</th>
                        <th>Jurusan</th>
                        <th>Nama Siswa</th>
                        <th>Nama Kelas</th>
                        <th>Opsi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.*,c.*,d.* FROM walikelas a JOIN staf_sekolah b on a.id_staf =b.id_staf JOIN kelas c on a.id_kelas =c.id_kelas JOIN siswa d on a.id_siswa =d.id_siswa");
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
                            <?php echo $hasil['jurusan'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_lengkap'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_kelas'] ?>
                        </td>
                        <td>
                            <a href="edit-kelas.php?id_kelas=<?php echo $hasil['id_kelas'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus-walikelas.php?id_walikelas=<?php echo $hasil['id_walikelas'] ?> " class="badge badge-danger"> Hapus </a>
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