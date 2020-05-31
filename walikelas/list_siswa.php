<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Siswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.* FROM walikelas a 
                            INNER join siswa b on a.id_siswa= b.id_siswa
                            WHERE id_staf=$id_staf");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $hasil['nama_lengkap'] ?>
                        </td>
                        <td>
                            <a href="index.php?content=detail_siswa&&id_siswa=<?= $hasil['id_siswa'] ?>" class="badge badge-success"> Detail </a>
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