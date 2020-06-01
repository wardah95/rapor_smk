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
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.* ,b.* FROM walikelas a
                            JOIN staf_sekolah b on a.id_staf =b.id_staf
                            Group by a. Id_staf, a. Jurusan, a.nama_kelas");
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
                            <?php echo $hasil['nama_kelas'] ?>
                        </td>
                        <td>
                            <a href="index.php?content=detail-kelas&&id_staf=<?=$hasil['id_staf']?>&&jurusan=<?=$hasil['jurusan']?>&&nama_kelas=<?=$hasil['nama_kelas']?>" class="badge badge-success"> Detail </a>
                            <a href="../config/hapus-walikelas.php?id_staf=<?=$hasil['id_staf']?>&&jurusan=<?=$hasil['jurusan']?>&&nama_kelas=<?=$hasil['nama_kelas']?>" class="badge badge-danger"> Hapus </a>
            
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