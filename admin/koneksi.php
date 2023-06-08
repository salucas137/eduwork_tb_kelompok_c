<?php
	session_start();
	date_default_timezone_set('Asia/Jakarta');

	$server 	= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "db_film";
	
	$koneksi = mysqli_connect($server,$user,$password) or die("Koneksi Server Gagal!");
	$db = mysqli_select_db($koneksi, $database) or die("Gagal Pilih Database!");

// ====================== FUNCTION ======================
function setAlert($title='', $text='', $type='', $buttons='') {
	$_SESSION["alert"]["title"]		= $title;
	$_SESSION["alert"]["text"] 		= $text;
	$_SESSION["alert"]["type"] 		= $type;
	$_SESSION["alert"]["buttons"]	= $buttons; 
}

if (isset($_SESSION['alert'])) {
	$title 		= $_SESSION["alert"]["title"];
	$text 		= $_SESSION["alert"]["text"];
	$type 		= $_SESSION["alert"]["type"];
	$buttons	= $_SESSION["alert"]["buttons"];

	echo"
		<div id='msg' data-title='".$title."' data-type='".$type."' data-text='".$text."' data-buttons='".$buttons."'></div>
		<script>
			let title 		= $('#msg').data('title');
			let type 		= $('#msg').data('type');
			let text 		= $('#msg').data('text');
			let buttons		= $('#msg').data('buttons');

			if(text != '' && type != '' && title != '') {
				Swal.fire({
					title: title,
					text: text,
					icon: type,
				});
			}
		</script>
	";
	unset($_SESSION["alert"]);
}

function checkLogin() {
	if (!isset($_SESSION['id_admin'])) {
		setAlert("Akses ditolak!", "Login terlebih dahulu!", "error");
		header('Location: login.php');
	} 
}

function checkLoginAtLogin() {
	if (isset($_SESSION['id_admin'])) {
		setAlert("Anda sudah login!", "Selamat Datang!", "success");
		header('Location: index.php');
	}
}
// DATA USER
function dataUser() {
	global $koneksi;
	if (isset($_SESSION['id_admin'])) {
		$id_admin = $_SESSION['id_admin'];
		return mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM admins WHERE id_admin = '$id_admin'"));
	} else {
		echo "
		  <script>
		    document.location.href='logout.php'
		  </script>
		";
	}
}

function riwayat($id_admin, $tindakan) {
	global $koneksi;
	$tanggal = time();
	mysqli_query($koneksi, "INSERT INTO riwayat VALUES ('', '$id_admin', '$tindakan', '$tanggal')");
	return mysqli_affected_rows($koneksi);
}

function ubahGenre($data) {
	global $koneksi;
	$id_kategori = htmlspecialchars($data['id_kategori']);
	$nama_kategori = htmlspecialchars(addslashes(ucwords($data['nama_kategori'])));
	mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'");
	riwayat($_SESSION['id_admin'], "Berhasil mengubah genre film $nama_kategori");
	return mysqli_affected_rows($koneksi);
}

function tambahGenre($data) {
	global $koneksi;
	$nama_kategori = htmlspecialchars(addslashes(ucwords($data['nama_kategori'])));
	mysqli_query($koneksi, "INSERT INTO kategori VALUES('', '$nama_kategori')");
	riwayat($_SESSION['id_admin'], "Berhasil menambahkan genre film $nama_kategori");
	return mysqli_affected_rows($koneksi);
}

function hapusGenre($id) {
	global $koneksi;
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id'"));
	$nama_kategori = ucwords($data['nama_kategori']);
	mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id'");
	riwayat($_SESSION['id_admin'], "Berhasil menghapus genre film $nama_kategori");
	return mysqli_affected_rows($koneksi);
}

function tambahFilm($data) {
	global $koneksi;
	$nama_film = htmlspecialchars(addslashes($data['nama_film']));
	$sinopsis = htmlspecialchars($data['sinopsis']);
	$durasi = htmlspecialchars(addslashes(ucwords($data['durasi'])));
	$tahun_rillis = htmlspecialchars(addslashes($data['tahun_rillis']));
	$rating = htmlspecialchars($data['rating']);
	$gambar = htmlspecialchars(addslashes($data['gambar']));
	$id_admin = $_SESSION['id_admin'];
	if (!$gambar) {
		return false;
	}
	mysqli_query($koneksi, "INSERT INTO film VALUES ('', '$nama_film',  '$sinopsis', '$durasi',  '$tahun_rillis', '$rating',  '$gambar', '$id_admin')");
	riwayat($id_admin, "Berhasil menambahkan film $nama_film");
	return mysqli_affected_rows($koneksi);
}

function hapusFilm($id) {
	global $koneksi;
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM film WHERE id_film = '$id'"));
	$nama_film = ucwords($data['nama_film']);
	mysqli_query($koneksi, "DELETE FROM film WHERE id_film = '$id'");
	riwayat($_SESSION['id_admin'], "Berhasil menghapus film $nama_film");
	return mysqli_affected_rows($koneksi);
}

function ubahFilm($data) {
	global $koneksi;
	$id_film = htmlspecialchars($data['id_film']);
	$nama_film = htmlspecialchars(addslashes($data['nama_film']));
	$sinopsis = htmlspecialchars($data['sinopsis']);
	$durasi = htmlspecialchars(addslashes(ucwords($data['durasi'])));
	$tahun_rillis = htmlspecialchars($data['tahun_rillis']);
	$rating = htmlspecialchars($data['rating']);
	$id_admin = $_SESSION['id_admin'];
	$gambar = htmlspecialchars($data['gambar']);
	
	mysqli_query($koneksi, "UPDATE film SET nama_film = '$nama_film',  sinopsis = '$sinopsis', durasi = '$durasi', tahun_rillis = '$tahun_rillis', rating = '$rating', gambar = '$gambar', id_admin = '$id_admin' WHERE id_film = '$id_film'");
	riwayat($id_admin, "Berhasil mengubah film $nama_film");
	return mysqli_affected_rows($koneksi);
}

function hapusKomentar($id) {
	global $koneksi;
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_komentar = '$id'"));
	$nama_komentar = ucwords($data['nama_komentar']);
	$judul_komentar = ucwords($data['judul_komentar']);
	mysqli_query($koneksi, "DELETE FROM komentar WHERE id_komentar = '$id'");
	riwayat($_SESSION['id_admin'], "Berhasil menghapus komentar $nama_komentar | $judul_komentar");
	return mysqli_affected_rows($koneksi);
}

function tambahKomentar($data) {
	global $koneksi;
	$nama_komentar = htmlspecialchars(addslashes($data['nama_komentar']));
	$isi_komentar = htmlspecialchars(addslashes($data['isi_komentar']));
	$tanggal_komentar = time();
	$id_film = $data['id_film'];
	mysqli_query($koneksi, "INSERT INTO komentar VALUES ('', '$nama_komentar', '$isi_komentar', '$tanggal_komentar', '$id_film')");
	return mysqli_affected_rows($koneksi);

}

function tambahPemain($data) {
	global $koneksi;
	$nama_pemain = htmlspecialchars(addslashes($data['nama_pemain']));
	$tanggal_lahir = time();
	$negara = htmlspecialchars(addslashes(ucwords($data['negara'])));
	$bio = htmlspecialchars($data['bio']);
	$foto = uploadPemain();
	$id_admin = $_SESSION['id_admin'];
	if (!$foto) {
		return false;
	}
	mysqli_query($koneksi, "INSERT INTO pemain VALUES ('', '$nama_pemain',  '$tanggal_lahir', '$negara',  '$bio',  '$foto', '$id_admin')");
	riwayat($id_admin, "Berhasil menambahkan pemain $nama_pemain");
	return mysqli_affected_rows($koneksi);
}

function uploadPemain() {
	$nama_foto 	    = $_FILES['foto']['name'];
	$ukuran_foto 	= $_FILES['foto']['size'];
	$error			= $_FILES['foto']['error'];
	$tmp_name		= $_FILES['foto']['tmp_name'];

	// cek aoakah mengupload foto
	if ($error === 4) {
		setAlert('Gagal mengubah foto', 'Pilih foto terlebih dahulu!', 'error');
		return false;
	}

	// cek ekstensi foto
	$ekstensi_foto_valid 	= ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensi_foto 	  	=  explode('.', $nama_foto);
	$ekstensi_foto 	  	=  strtolower(end($ekstensi_foto));
	if (!in_array($ekstensi_foto, $ekstensi_foto_valid)) {
		setAlert('Gagal mengubah foto', 'Pilih foto yang berekstensi foto!', 'error');
		return false;
	}

	// cek ukuran foto
	if ($ukuran_foto > 1000000) {
		setAlert('Gagal mengubah foto', 'Ukuran foto terlalu besar!', 'error');
		return false;
	}

	// generate random nama
	$nama_foto_baru = uniqid();
	$nama_foto_baru .= '.';
	$nama_foto_baru .= $ekstensi_foto;

	move_uploaded_file($tmp_name, '' . $nama_foto_baru);
	return $nama_foto_baru;
}

function hapusPemain($id) {
	global $koneksi;
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM pemain WHERE id_pemain = '$id'"));
	$nama_pemain = ucwords($data['nama_pemain']);
	mysqli_query($koneksi, "DELETE FROM pemain WHERE id_pemain = '$id'");
	riwayat($_SESSION['id_admin'], "Berhasil menghapus pemain $nama_pemain");
	return mysqli_affected_rows($koneksi);
}

function ubahPemain($data) {
	global $koneksi;
	$id_pemain = htmlspecialchars($data['id_pemain']);
	$nama_pemain = htmlspecialchars(addslashes($data['nama_pemain']));
	$tanggal_lahir = time();
	$negara = htmlspecialchars(addslashes(ucwords($data['negara'])));
	$bio = htmlspecialchars($data['bio']);
	$id_admin = $_SESSION['id_admin'];
	$foto_lama = htmlspecialchars($data['foto_lama']);
	if ($_FILES['foto']['error'] === 4) {
		$foto = $foto_lama;
	} else {
		$foto = uploadpemain();
	}
	mysqli_query($koneksi, "UPDATE pemain SET nama_pemain = '$nama_pemain',  tanggal_lahir = '$tanggal_lahir', negara = '$negara', bio = '$bio', foto = '$foto', id_admin = '$id_admin' WHERE id_pemain = '$id_pemain'");
	riwayat($id_admin, "Berhasil mengubah pemain $nama_pemain");
	return mysqli_affected_rows($koneksi);
}
?>

<!--- Include Admin js --->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- popper -->
<script src="vendor/popper/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- chart -->
<script src="vendor/chart/chart.min.js"></script>
<!-- datatables -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<!-- fancybox -->
<script src="vendor/fancybox/jquery.fancybox.min.js"></script>
<!-- sweetalert2 -->
<script src="vendor/sweetalert2/sweetalert2.all.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/adminlte/adminlte.min.js"></script>

<!-- config -->
<script src="js/datatables-config.js"></script>
<script src="js/fancybox-config.js"></script>
<script src="js/sweetalert2-config.js"></script>


<!--- Include js --->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- popper -->
<script src="vendor/popper/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- chart -->
<script src="vendor/chart/chart.min.js"></script>
<!-- datatables -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<!-- fancybox -->
<script src="vendor/fancybox/jquery.fancybox.min.js"></script>
<!-- sweetalert2 -->
<script src="vendor/sweetalert2/sweetalert2.all.min.js"></script>
<!-- owlCarousel2 -->
<script src="vendor/owlCarousel2/js/owl.carousel.min.js"></script>

<!-- config -->
<script src="js/datatables-config.js"></script>
<script src="js/fancybox-config.js"></script>
<script src="js/sweetalert2-config.js"></script>
<script src="js/owlCarousel2-config.js"></script>

<script>
	$(document).ready(function() {
		$("#keyword").on("keyup", function() {
			$.get("search_ajax.php?keyword=" + $("#keyword").val(), function(data) {
				$("#searchMovie").html(data);
			});
		});
	});
</script>
