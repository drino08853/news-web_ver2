 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Form Edit User</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Form Edit User</li>
         </ol>
     </div>
     <?php
        $id_user = $_GET['id_user'];
        $ubah = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
        $data = mysqli_fetch_array($ubah);
        ?>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
             </div>
             <div class="card-body">
                 <form action="user/proses_update.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>">

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">User Name</label>
                         <div class="col-sm-9">
                             <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-9">
                             <input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                         <div class="col-sm-9">
                             <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>">
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