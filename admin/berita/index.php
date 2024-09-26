<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Berita</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Berita</li>
        </ol>
    </div>

    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                <button type="button" class="btn btn-outline-primary btn-sm float-right" onclick="location.href=('?page=berita/tambah')"> <i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Tgl.Publish</th>
                            <th>Isi Berita</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori 
                ON berita.id_kategori=kategori.id_kategori ORDER BY id_berita DESC;");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img src="assets/images/<?= $d['gambar_berita']; ?>" width="110px" height="90px" alt="Image Not Found"></td>
                                <td><?= $d['judul_berita']; ?></td>
                                <td><?= $d['nama_kategori']; ?></td>
                                <td><?= date('d/m/Y', strtotime($d['tgl_berita'])); ?></td>
                                <td><?= substr($d['isi_berita'], 0, 30) ?></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-xs" href="?page=berita/edit&id_berita=<?= $d['id_berita']; ?>"> <i class="fas fa-edit"></i>Edit </a></a>
                                    <a class="btn btn-outline-danger btn-xs" href="berita/proses_hapus.php?id_berita=<?= $d['id_berita']; ?>" onclick="return confirm('Apakah anda yakin akan dihapus!');"><i class="fa fa-trash"></i>Hapus</a></a>
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