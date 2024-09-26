 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Form Edit Berita</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Form Edit Berita</li>
         </ol>
     </div>

     <?php
        $id_berita = $_GET['id_berita'];
        $update = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori 
    ON berita.id_kategori=kategori.id_kategori WHERE id_berita='$id_berita'");
        while ($u = mysqli_fetch_array($update)) {
        ?>

         <!-- Horizontal Form -->
         <div class="col-lg-7">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Edit Berita</h6>
                 </div>
                 <div class="card-body">
                     <form action="berita/proses_update.php" method="POST" enctype="multipart/form-data">
                         <input type="hidden" name="id_berita" class="form-control" value="<?= $u['id_berita']; ?>">
                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Judul Berita</label>
                             <div class="col-sm-9">
                                 <input type="text" name="judul_berita" class="form-control" value="<?= $u['judul_berita']; ?>">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Kategori Berita</label>
                             <div class="col-sm-9">
                                 <select class="select2-single-placeholder form-control" name="id_kategori">
                                     <option value="">Select</option>
                                     <?php
                                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($k = mysqli_fetch_array($kategori)) {
                                        ?>
                                         <option value="<?php echo $k['id_kategori'] ?>" <?php echo $k['id_kategori'] == $u['id_kategori'] ? 'selected'  : '' ?>>
                                             <?php echo $k['nama_kategori'] ?>
                                         </option>
                                     <?php
                                        }
                                        ?>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Tgl.Berita</label>
                             <div class="col-sm-9">
                                 <input type="date" name="tgl_berita" class="form-control" value="<?= $u['tgl_berita']; ?>" readonly>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Isi Berita</label>
                             <div class="col-sm-9">
                                 <textarea class="form-control" name="isi_berita" rows="5"><?= $u['isi_berita']; ?></textarea>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Gambar Berita</label>
                             <div class="col-sm-9">
                                 <img src="assets/images/<?= $u['gambar_berita']; ?>" width="420px" height="250px" alt="Image Not Found">
                                 <input type="hidden" name="foto_lama" class="form-control" value="<?= $u['gambar_berita']; ?>">
                                 <input type="file" name="gambar_berita" class="form-control">
                             </div>
                         </div>


                         <div class="form-group row">
                             <div class="col-sm-10">
                                 <button type="submit" class="btn btn-primary">Update</button>
                             </div>
                         </div>
                     </form>
                 <?php
                }
                    ?>
                 </div>
             </div>
         </div>
 </div>