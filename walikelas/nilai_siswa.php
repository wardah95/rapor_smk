<?php
include '../config/koneksi.php';
$h      = "SELECT * FROM walikelas WHERE id_staf = '$id_staf'";
$hasil  = mysqli_query($conn, $h)or die(mysql_error());
$data   = mysqli_fetch_array($hasil);
?>
<div class="content">
    <div class="container-fluid">   
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Jurusan <?=$data['jurusan']?>, <?=$data['nama_kelas']?></h4>
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
                          include '../config/koneksi.php';
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
                            <a href="index.php?content=klsx&&jurusan=<?=$data['jurusan']?>&&id_siswa=<?=$hasil['id_siswa']?>" class="badge badge-success"> kelas X </a>
                            <a href="index.php?content=klsx&&jurusan=<?=$data['jurusan']?>&&id_siswa=<?=$hasil['id_siswa']?>" class="badge badge-success"> kelas XI </a>
                            <a href="index.php?content=klsx&&jurusan=<?=$data['jurusan']?>&&id_siswa=<?=$hasil['id_siswa']?>" class="badge badge-success"> kelas XII </a>
                        
                        </td>
                        <?php } ?>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>