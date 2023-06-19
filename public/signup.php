<?php 
require_once("../admin/dbconnect.php");


// Mengecek apakah pengguna sudah login, jika ya, redirect ke halaman lain
if (isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Mengecek apakah ada data yang dikirimkan melalui metode POST
if (isset($_POST["register"]))  {
    // Mendapatkan nilai dari input username dan password
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    
// Lakukan enkripsi menggunakan MD5 pada kata sandi yang diinputkan
$encryptedPassword = md5($password);
    
    // Melakukan query untuk menyimpan data pengguna ke database
    $query = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$encryptedPassword')";
    if ($conn->query($query) === TRUE) {
        // Jika data berhasil disimpan, set session dan redirect ke halaman utama
        $_SESSION["username"] = $username; // Menyimpan username dalam session
        echo "<script>alert('Pendafataran berhasil, anda akan dialihkan ke halaman utama');</script>";
        // Redirect ke halaman setelah pendaftaran berhasil
        echo "<script>location='index.php';</script>";
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        $error_message = "Terjadi kesalahan saat menyimpan data.";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MovieVerse Sign In</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="../css/style_login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    .container .close-btn {
      position: absolute;
      right: 20px;
      top: 15px;
      font-size: 20px;
      cursor: pointer;
    }
    .container .close-btn:hover{
      color: #dd003f;
    }
  </style>
</head>

<body>
  <div class="container">
    <input type="checkbox" id="check">
    <a style="color: black; text-decoration:none" href="index.php">
      <i class="close-btn fas fa-times"></i>
    </a>
    <div class="signup form">
      <header>Signup</header>
      <form action="" method="post">
        <input class="form-control" type="text" name="name" placeholder="Name" required>
        <input class="form-control" type="text" name="username" placeholder="Username" required>
        <input class="form-control" type="password" name="password" placeholder="Password" required> 
        <input type="submit" name="register" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
          <a href="login.php">Login</a>
        </span>
      </div>
    </div>
  </div>
</body>


</html>