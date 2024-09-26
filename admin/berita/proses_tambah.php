<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = $_POST['isi_berita'];
$gambar_berita = $_FILES['gambar_berita']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_berita  != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_berita); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_berita']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_berita; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../assets/images/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO berita (id_kategori,judul_berita,tgl_berita,isi_berita,gambar_berita) VALUES ('$id_kategori','$judul_berita','$tgl_berita','$isi_berita','$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data Berhasil DiSimpan !');window.location='../?page=berita/index';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi Gambar Yang Boleh Hanya jpg atau png.');window.location='../?page=berita/tambah';</script>";
    }
} else {
    $query = "INSERT INTO berita (id_kategori,judul_berita,tgl_berita,isi_berita,gambar_berita) VALUES ('$id_berita','$id_kategori','$judul_berita','$tgl_berita','$isi_berita', null)";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data Berhasil Ditambah !');window.location='../?page=berita/index';</script>";
    }
}
