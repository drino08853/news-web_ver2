 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Contact US</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Contact US</li>
         </ol>
     </div>

     <?php
        $id_kontak = $_GET['id_kontak'];
        $ubah = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id_kontak = '$id_kontak'");
        $data = mysqli_fetch_array($ubah);
        ?>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Contact Person !</h6>
             </div>
             <div class="card-body">
                 <form action="contact/proses_update.php" method="POST">
                     <input type="hidden" name="id_kontak" class="form-control" value="<?php echo $data['id_kontak']; ?>">


                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label"><i class="fab fa-facebook-square"></i> Facebook</label>
                         <div class="col-sm-9">
                             <input type="text" name="facebook" class="form-control" value="<?php echo $data['facebook']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label"><i class="fab fa-instagram"></i> Instagram</label>
                         <div class="col-sm-9">
                             <input type="text" name="instagram" class="form-control" value="<?php echo $data['instagram']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label"><i class="fab fa-whatsapp"></i> No.Telp</label>
                         <div class="col-sm-9">
                             <input type="number" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
                         </div>
                     </div>


                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label"><i class="fas fa-map-signs"></i> Alamat</label>
                         <div class="col-sm-9">
                             <textarea class="form-control" name="alamat" rows="5"><?php echo $data['alamat']; ?></textarea>
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