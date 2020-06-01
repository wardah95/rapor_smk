<?php

    // error_reporting(0);

    include '../config/koneksi.php';
    $id_staf    = $_GET['id_staf'];
    $jurusan    = $_GET['jurusan'];
    $nama_kelas = $_GET['nama_kelas'];
    $siswa   = "SELECT a.*, b.id_staf, b.nama_staf FROM walikelas a
    INNER JOIN staf_sekolah b on a.id_staf=b.id_staf 
    WHERE a.id_staf = '$id_staf' AND a.jurusan='$jurusan' AND a.nama_kelas='$nama_kelas'";
    $hasil   = mysqli_query($conn, $siswa)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
?>
<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Kelas : <?= $data['nama_kelas']?> Jurusan : <?= $_GET['jurusan']?> walikelas :<?= $data['nama_staf']?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama</th>
                      </thead>
                      <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.id_siswa, b.nama_lengkap FROM walikelas a
                            INNER JOIN siswa b on a.id_siswa=b.id_siswa 
                            WHERE a.id_staf = '$id_staf' AND a.jurusan='$jurusan' AND a.nama_kelas='$nama_kelas'");
                            while($hasil = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?= $hasil['nama_lengkap'] ?>
                        </td>
                        <td>
                            <!-- <a href="edit-siswa.php?id_siswa=<?php echo $hasil['id_siswa'] ?>" class="badge badge-success"> Edit </a>
                            <a href="../config/hapus_siswa.php?id_siswa=<?php echo $hasil['id_siswa'] ?> " class="badge badge-danger"> Hapus </a> -->
                        </td>
                        <?php } ?>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>                
