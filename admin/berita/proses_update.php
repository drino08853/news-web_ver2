<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = str_replace("'", '', $_POST['isi_berita']);


if ($_FILES['gambar_berita']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    // Jika Mengubah Gambar
    // ambil data file
    $namafile   = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];
    //pindahkan file 
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

//Query Insert ke Database 
$ubah = mysqli_query($koneksi, "UPDATE berita SET id_kategori='$id_kategori',judul_berita='$judul_berita',
tgl_berita='$tgl_berita',isi_berita='$isi_berita',gambar_berita='$namafile'
WHERE id_berita='$id_berita'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=berita/index';
		</script>";

    //Jika query gagal


} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=berita/edita&id_berita=$id_berita'
    </script>";
}
