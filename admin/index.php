<?php 
  require 'koneksi.php';
  checkLogin();
  $jumlah_film = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_film) as jumlah_film FROM film"));
  $jumlah_film = $jumlah_film['jumlah_film'];

  $jumlah_genre = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_kategori) as jumlah_genre FROM kategori"));
  $jumlah_genre = $jumlah_genre['jumlah_genre'];

  $jumlah_pemain = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_pemain) as jumlah_pemain FROM pemain"));
  $jumlah_pemain = $jumlah_pemain['jumlah_pemain'];

  $jumlah_komentar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_komentar) as jumlah_komentar FROM komentar"));
  $jumlah_komentar = $jumlah_komentar['jumlah_komentar'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
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

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="dashboard.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" width="130"></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="dashboard.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="film.php" class='sidebar-link'>
                    <i class="fas fa-fw fa-film"></i>
                    <span>Film</span>
                </a>
            </li>
                        
            
            <li
                class="sidebar-item  ">
                <a href="pemain.php" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Pemain</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="kategori.php" class='sidebar-link'>
                    <i class="fas fa-fw fa-theater-masks"></i>
                    <span>Kategori</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="komentar.php" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Komentar</span>
                </a>
            </li>

            <li
                class="sidebar-item  ">
                <a href="logout.php" class='sidebar-link'>
                    <i class= "fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row my-2">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5><i class="fas fa-fw fa-theater-masks"></i> Genre Film</h5>
                <h6 class="mb-2 text-muted">Jumlah Genre: <?= $jumlah_genre; ?></h6>
                <a href="kategori.php" class="card-link btn btn-primary"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5><i class="fas fa-fw fa-film"></i> Film</h5>
                <h6 class="mb-2 text-muted">Jumlah Film: <?= $jumlah_film; ?></h6>
                <a href="film.php" class="card-link btn btn-primary"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5><i class="bi bi-people-fill"></i> Pemain</h5>
                <h6 class="mb-2 text-muted">Jumlah Pemain: <?= $jumlah_pemain; ?></h6>
                <a href="pemain.php" class="card-link btn btn-primary"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5><i class="fas fa-fw fa-comment"></i> Komentar</h5>
                <h6 class="mb-2 text-muted">Jumlah Komentar: <?= $jumlah_komentar; ?></h6>
                <a href="komentar.php" class="card-link btn btn-primary"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>

<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>

</html>