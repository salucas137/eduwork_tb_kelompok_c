<?php 
	require 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'"));
	$nama_user = ucwords($data['name']);
	if (isset($id)) {
		if (hapusUsers($id) > 0) {
			setAlert("Berhasil dihapus", "user $nama_user berhasil dihapus", "success");
      		header("Location: users.php");
		}
	}
	?>