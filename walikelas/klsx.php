<?php
    // error_reporting(0);
    include '../config/koneksi.php';
    $id_siswa   = $_GET['id_siswa'];
    $jurusan    = $_GET['jurusan'];

    $siswa   = "SELECT a.*, b.*, c.id_siswa, c.nama_lengkap FROM mata_pelajaran a 
    INNER JOIN walikelas b ON a.jurusan= b.jurusan
    JOIN siswa c ON b.id_siswa=b.id_siswa
    WHERE c.id_siswa='$id_siswa' AND a.jurusan='$jurusan' AND a.tingkat='10' ";
    $hasil   = mysqli_query($conn, $siswa)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
?>
<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Matapelajaran Saudara/i <?= $data['nama_lengkap']?>  </h4>
                    <h4>  <?= $data['jurusan']?> Kelas <?= $data['tingkat']?> </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Matapelajaran</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                          include '../config/koneksi.php';
                            $no = 1;
                            $select = mysqli_query($conn, "SELECT a.*, b.*, c.id_siswa, c.nama_lengkap FROM mata_pelajaran a 
                            INNER JOIN walikelas b ON a.jurusan= b.jurusan
                            JOIN siswa c ON b.id_siswa=b.id_siswa
                            WHERE c.id_siswa='$id_siswa' AND a.jurusan='$jurusan'");
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
                            <?php $jenis=$hasil['jenis_pelajaran'];
                            if ($jenis=="A"){
                              echo "Muatan Nasional";
                            }elseif ($jenis=="B"){
                              echo "Muatan Kewilayahan";
                            }elseif ($jenis=="C1"){
                              echo "Muatan Permintaan Kejuruan-Dasar Bidang Keahlian";
                            }elseif ($jenis=="C2"){
                              echo 'Muatan Permintaan Kejuruan-Dasar Program Keahlian';
                            }       
                            else{echo 'Muatan Lokal';}
                            ?>
                        </td>
                        <td>
                            <a href="index.php?content=input_nilai&&id_siswa=<?=$data['id_siswa']?>&&id_mapel=<?=$data['id_mapel']?>" class="badge badge-success">INPUT</a>
                        </td>
                        <?php } ?>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>