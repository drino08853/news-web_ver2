  <?php
    $id_kategori = $_GET['id_kategori'];
    $ubah = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
    $data = mysqli_fetch_array($ubah);
    ?>

  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
          </ol>
      </div>

      <!-- Horizontal Form -->
      <div class="col-lg-7">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
              </div>
              <div class="card-body">
                  <form action="kategori/proses_ubah.php" method="POST">
                      <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori'] ?>">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Kategori</label>
                          <div class="col-sm-9">
                              <input type="text" name="nama_kategori" class="form-control" value="<?php echo $data['nama_kategori'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  </div>