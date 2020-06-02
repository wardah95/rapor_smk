<?php
    // error_reporting(0);
    include '../config/koneksi.php';
    $id_siswa = $_GET['id_siswa'];

    $siswa   = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($conn, $siswa)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);
?>
<div class="content">
        <div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Siswa : <?= $data['nama_lengkap']?> </h4>
                </div>
                
<table>  
  <tr>
    <td>NIS</td>
    <td><?= $data['nis']?></td>
  </tr>
  <tr>
    <td>Tahun Masuk</td>
    <td><?= $data['tahun_masuk']?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><?= $data['tempat_lahir']?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?= $data['tanggal_lahir']?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?= $data['jenis_kelamin']?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td><?= $data['agama']?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?= $data['alamat_rumah']?></td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td><?= $data['nama_ayah']?></td>
  </tr>
  <tr>
    <td>Pekerjaan Ayah</td>
    <td><?= $data['pekerjaan_ayah']?></td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
    <td><?= $data['nama_ibu']?></td>
  </tr>
  <tr>
    <td>Pekerjaan Ibu</td>
    <td><?= $data['pekerjaan_ibu']?></td>
  </tr>
  
</table>

