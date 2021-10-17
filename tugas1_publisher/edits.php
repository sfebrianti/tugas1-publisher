<?php
include("config.php");

// cek apakah tombol simpan sudah bisa diklik atau belum?
if (isset($_POST['simpan'])){

	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];

	// buat query update
	$sql ="UPDATE mahasiswa SET nama='$nama',
	jurusan='$jurusan' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	// apakah query update berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman list.php
		header('location: list.php');
	} else {
		// kalau gagal tampilan pesan
		die("Gagal menyimpan perubahan...");
	}

} else {
	die("Akses dilarang...");
}
?>