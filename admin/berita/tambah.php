 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Form Add Berita</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Form Add Berita</li>
         </ol>
     </div>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Form Add Berita</h6>
             </div>
             <div class="card-body">
                 <form action="berita/proses_tambah.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Judul Berita</label>
                         <div class="col-sm-9">
                             <input type="text" name="judul_berita" class="form-control">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Kategori Berita</label>
                         <div class="col-sm-9">
                             <select class="select2-single-placeholder form-control" name="id_kategori">
                                 <option value="">Select</option>
                                 <?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                     <option value="<?php echo $d['id_kategori']; ?>"><?php echo $d['nama_kategori']; ?></option>
                                 <?php
                                    }
                                    ?>
                             </select>
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Tgl.Berita</label>
                         <div class="col-sm-9">
                             <input type="date" name="tgl_berita" class="form-control">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Isi Berita</label>
                         <div class="col-sm-9">
                             <textarea class="form-control" name="isi_berita" rows="5"></textarea>
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Gambar Berita</label>
                         <div class="col-sm-9">
                             <input type="file" name="gambar_berita" class="form-control">
                         </div>
                     </div>


                     <div class="form-group row">
                         <div class="col-sm-10">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>