

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card card-statistics">
              <div class='card-header'">
                Kelola Kategori
              </div>
                <div class="card-body p-0">
                  <div class="row" style="padding:10px">
                    <div class='col-md-6'>
                      <form action="<?= base_url('addKategori') ?>" method="post">

                        <div class='form-group'>
                          <label>Id Kategori</label>
                          <input type="text" name='nama' class='form-control'>
                        </div>

                        <div class='form-group'>
                          <label>Nama Kategori</label>
                          <input type="text" name='harga' class='form-control'>
                        </div>
                        <button class='btn btn-success btn-block'>Tambah </button>
                      </form>
                    </div>
                    <div class='col-md-6'>

                      <table class='table table-condensed'>

                        <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>



                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
