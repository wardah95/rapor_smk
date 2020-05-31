<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Rincian  </h4>
                  <p class="card-category">Menambah rincian Pembayaran </p>
                </div>
                <div class="card-body">
                  <form action="../config/tambah_rincian.php" method="POST">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" name="nama" required>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nominal </label>
                          <input type="text" class="form-control" name="nominal" required>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Keterangan</label>
                          <input type="text" class="form-control" name="keterangan" required>
                        </div>   
                      </div>
                      </div>
                    <button type="submit" name="simpan" class="btn btn-primary pull-right">Tambah Siswa </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    </div>
  </div>