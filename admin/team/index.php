<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Team</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Team</li>
        </ol>
    </div>

    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                <h6 class="m-0 font-weight-bold text-primary">Data Team</h6>
                <button type="button" class="btn btn-outline-primary btn-sm float-right" onclick="location.href=('?page=team/tambah')"> <i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Photo</th>
                            <th>Nama Team</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM tim ;");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img src="assets/images/<?= $d['foto']; ?>" width="110px" height="90px" alt="Image Not Found"></td>
                                <td><?= $d['nama_tim']; ?></td>
                                <td><?= $d['jabatan']; ?></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-xs" href="?page=team/edit&id_tim=<?= $d['id_tim']; ?>"> <i class="fas fa-edit"></i>Edit </a></a>
                                    <a class="btn btn-outline-danger btn-xs" href="team/proses_hapus.php?id_tim=<?= $d['id_tim']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');"><i class="fa fa-trash"></i>Hapus</a></a>
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