<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
        </ol>
    </div>

    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                <button type="button" class="btn btn-outline-primary btn-sm float-right" onclick="location.href=('?page=kategori/tambah')"> <i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $d['nama_kategori']; ?></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-xs" href="?page=kategori/edit&id_kategori=<?= $d['id_kategori']; ?>"> <i class="fas fa-edit"></i>Edit </a></a>
                                    <a class="btn btn-outline-danger btn-xs" href="kategori/proses_hapus.php?id_kategori=<?= $d['id_kategori']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');"><i class="fa fa-trash"></i>Hapus</a></a>
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