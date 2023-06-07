<?php 
	require 'koneksi.php';
	$id_kategori = $_GET['id_kategori'];
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_genre WHERE id_kategori = '$id_kategori'"));
	$nama_kategori = ucwords($data['nama_kategori']);
	if (isset($id_kategori)) {
		if (hapusGenre($id_kategori) > 0) {
			setAlert("Berhasil dihapus", "Genre $nama_kategori berhasil dihapus", "success");
      		header("Location: kategori.php");
		}
	}