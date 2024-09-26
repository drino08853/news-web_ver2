<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">

        <?php
        $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM kategori");
        $data = mysqli_fetch_array($count);
        ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totdata']; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM berita JOIN kategori 
                ON berita.id_kategori=kategori.id_kategori ORDER BY id_berita DESC");
        $data = mysqli_fetch_array($count);
        ?>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Berita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totdata']; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM tim");
        $data = mysqli_fetch_array($count);
        ?>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Team</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $data['totdata']; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $count = mysqli_query($koneksi, "SELECT COUNT(*) AS totdata FROM user");
        $data = mysqli_fetch_array($count);
        ?>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totdata']; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area Chart -->

    <!-- Pie Chart -->

    <!-- Invoice Example -->

    <!-- Message From Customer-->

</div>

<!--Row-->



</div>
<!---Container Fluid-->