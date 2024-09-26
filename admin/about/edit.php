 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">About</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">About</li>
         </ol>
     </div>

     <?php
        $id_about = $_GET['id_about'];
        $ubah = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about = '$id_about'");
        $data = mysqli_fetch_array($ubah);
        ?>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">About !</h6>
             </div>
             <div class="card-body">
                 <form action="about/proses_update.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id_about" class="form-control" value="<?php echo $data['id_about']; ?>">

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Visi</label>
                         <div class="col-sm-9">
                             <input type="text" name="visi" class="form-control" value="<?php echo $data['visi']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Misi</label>
                         <div class="col-sm-9">
                             <input type="text" name="misi" class="form-control" value="<?php echo $data['misi']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Gambar About</label>
                         <div class="col-sm-9">
                             <img src="assets/images/<?php echo $data['gambar_about']; ?>" width="200px" height="200px" alt="Image Not Found">
                             <input type="hidden" name="foto_lama" class="form-control" value="<?php echo $data['gambar_about']; ?>">
                             <input type="file" name="gambar_about" class="form-control">
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