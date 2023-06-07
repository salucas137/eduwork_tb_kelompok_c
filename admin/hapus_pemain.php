<?php 
	require 'koneksi.php';
	$id_pemain = $_GET['id_pemain'];
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM pemain WHERE id_pemain = '$id_pemain'"));
	$nama_pemain = ucwords($data['nama_pemain']);
	if (isset($id_pemain)) {
		if (hapusPemain($id_pemain) > 0) {
			setAlert("Berhasil dihapus", "Pemain $nama_pemain berhasil dihapus", "success");
      		header("Location: pemain.php");
		}
	}
?>