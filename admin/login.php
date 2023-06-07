<?php 
  require 'koneksi.php';
  checkLoginAtLogin();

  if (isset($_POST['btnLogin'])) {
  	$username = htmlspecialchars($_POST['username']);
  	$password = htmlspecialchars($_POST['password']);

  	$checkUsername = mysqli_query($koneksi, "SELECT * FROM admins WHERE username = '$username'");
  	if ($data = mysqli_fetch_assoc($checkUsername)) {
  		if (password_verify($password, $data['password'])) {
  			$_SESSION = [
  				'id_admin' => $data['id_admin'],
  				'username' => $data['username']
  			];
  			header("Location: index.php");
  		} else {
			setAlert("Gagal login!", "Password yang anda masukkan salah!", "error");
			header("Location: login.php");
	  	}
  	} else {
		setAlert("Gagal login!", "Username belum terdaftar!", "error");
		header("Location: login.php");
  	}
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Administrator</title>
  <style>
	* {
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box;
	}

  	body {
	    min-height: 100vh;
	    background-size: cover;
	    background-repeat: no-repeat;
	    background-image: url(bg-logo.jpg);
	}
	
  	.container {
	    position: absolute;
	    left: 50%;
	    top: 50%;
	    transform: translate(-50%, -55%);
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 mx-5 py-4 px-5 text-dark rounded border border-dark" style="background-color: rgba(180,190,196,.6);">
				<h2 class="text-center">Selamat Datang</h2>
				<font color="red"><h6 class="text-center">username: admin & password: admin1</h6></font>
				<form method="post">
					<div class="form-group">
						<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
						<input required class="form-control rounded-pill" type="text" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
						<input required class="form-control rounded-pill" type="password" name="password" id="password">
					</div>
					<div class="form-group">
						<a href="../admin/index.php" class="btn btn-info rounded-pill text-left"><i class="fas fa-fw fa-arrow-left"></i> Back</a>
						<button class="btn btn-success rounded-pill float-right" type="submit" name="btnLogin"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	
<!--- include admin css --->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap 4 -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- datatables -->
<link rel="stylesheet" href="vendor/datatables/css/dataTables.bootstrap4.min.css">
<!-- fancybox -->
<link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- MyCSS -->
<link rel="stylesheet" href="assets/css/style.css">
</body>
</html>