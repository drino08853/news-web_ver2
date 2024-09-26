<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data User</li>
        </ol>
    </div>

    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                <button type="button" class="btn btn-outline-primary btn-sm float-right" onclick="location.href=('?page=user/tambah')"> <i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>User Name</th>
                            <th>Nama Lengkap</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM user ;");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img src="assets/images/<?= $d['foto']; ?>" width="110px" height="90px" alt="Image Not Found"></td>
                                <td><?= $d['username']; ?></td>
                                <td><?= $d['nama_lengkap']; ?></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-xs" href="?page=user/edit&id_user=<?= $d['id_user']; ?>"> <i class="fas fa-edit"></i>Edit </a></a>
                                    <a class="btn btn-outline-danger btn-xs" href="user/proses_hapus.php?id_user=<?= $d['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');"><i class="fa fa-trash"></i>Hapus</a></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>