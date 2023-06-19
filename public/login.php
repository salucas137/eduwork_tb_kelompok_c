<?php 
require_once("../admin/dbconnect.php" );

// Mengecek apakah pengguna sudah login, jika ya, redirect ke halaman lain
if (isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Mengecek apakah ada data yang dikirimkan melalui metode POST
if (isset($_POST["login"]))  {
    // Mendapatkan nilai dari input username dan password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan enkripsi menggunakan MD5 pada kata sandi yang diinputkan
    $encryptedPassword = md5($password);


    // Melakukan query untuk memeriksa keberadaan pengguna di database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$encryptedPassword'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Jika data pengguna ditemukan, set session dan redirect ke halaman utama
        $_SESSION["username"] = $username;  // Menyimpan username dalam session
        echo "<script>alert('Login berhasil, anda akan dialihkan ke halaman utama');</script>";
        // Redirect ke halaman setelah login berhasil
        echo "<script>location='index.php';</script>";
        exit();
    } else {
        // Jika data pengguna tidak ditemukan, tampilkan pesan error
        $error_message = "";
        echo "<script>alert('Username atau password salah.');</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MovieVerse Login</title>
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
    <label for="show" class="close-btn fas fa-times" title="close"></label>
    <a style="color: black; text-decoration:none" href="index.php">
      <i class="close-btn fas fa-times"></i>
    </a>
    <div class="login form">
      <header>Login</header>
      <form action="" method="post">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <input type="submit" class="button" name="login" value="Log in">
        
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <a href="signup.php">Sign Up</a>
        </span>
      </div>
      
    </div>
    </div>
  </div>
</body>

</html>