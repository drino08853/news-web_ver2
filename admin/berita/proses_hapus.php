<?php
// koneksi database
include '../../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_berita = $_GET['id_berita'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil DiHapus!');
			document.location.href = '../?page=berita/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal DiHapus!');
    document.location.href = '../?page=berita/index';
    </script>";
}
