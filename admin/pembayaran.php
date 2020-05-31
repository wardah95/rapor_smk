<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
    
<a class="btn btn-success" href="index.php?content=rincian"> Rincian </a>

<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Rincian Keuangan</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT * FROM rincian");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['nominal'] ?>
                        </td>
                        <td>
                            <?php echo $hasil['keterangan'] ?>
                        </td>
                        <td>
                            <a href="index.php?content=edit_rinciand&&id_rincian=<?= $hasil['id_rincian'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus_rincian.php?id_rincian=<?= $hasil['id_rincian'] ?>" class="badge badge-danger"> Hapus </a>
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

      <a class="btn btn-success" href=".php"> Pemnbayaran </a>

</body>
</html>