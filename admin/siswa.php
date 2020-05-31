<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Siswa</title>
</head>
<body>
    
<a class="btn btn-success" href="input-siswa.php"> Tambah Data Siswa </a>

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
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Tahun Masuk</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat Rumah</th>
                        <th>Nama Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Jenis Kelamin</th>
                        <th> Agama </th>
                        <th>Opsi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT * FROM siswa");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['nis'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_lengkap'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tahun_masuk'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tempat_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['tanggal_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['alamat_rumah'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_ayah'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['pekerjaan_ayah'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_ibu'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['pekerjaan_ibu'] ?>
                        </td>
                        <td>   
                            <?php echo $hasil['jenis_kelamin'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['agama'] ?>
                        </td>
                        <td>
                            <a href="edit-siswa.php?id_siswa=<?php echo $hasil['id_siswa'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus_siswa.php?id_siswa=<?php echo $hasil['id_siswa'] ?> " class="badge badge-danger"> Hapus </a>
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