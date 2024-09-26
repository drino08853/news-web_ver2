 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Form Edit Tim</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Form Edit Tim</li>
         </ol>
     </div>
     <?php
        $id_tim = $_GET['id_tim'];
        $ubah = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim = '$id_tim'");
        $data = mysqli_fetch_array($ubah);
        ?>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Edit Team</h6>
             </div>
             <div class="card-body">
                 <form action="team/proses_update.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id_tim" class="form-control" value="<?php echo $data['id_tim']; ?>">

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Nama Team</label>
                         <div class="col-sm-9">
                             <input type="text" name="nama_tim" class="form-control" value="<?php echo $data['nama_tim']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Jabatan</label>
                         <div class="col-sm-9">
                             <input type="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>">
                         </div>
                     </div>


                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Foto</label>
                         <div class="col-sm-9">
                             <img src="assets/images/<?php echo $data['foto']; ?>" width="200px" height="200px" alt="Image Not Found">
                             <input type="hidden" name="foto_lama" class="form-control" value="<?php echo $data['foto']; ?>">
                             <input type="file" name="foto" class="form-control">
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