<?php 
  require 'koneksi.php';
  checkLogin();
  $users = mysqli_query($koneksi, "SELECT * FROM users");
  // jika tombol ubah users ditekan
  if (isset($_POST['btnUbahusers'])) {
    if (ubahUsers($_POST) > 0) {
      setAlert("Berhasil diubah", "users berhasil diubah", "success");
      header("Location: users.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard users</title>
    
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
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="assets/css/main/app.css">
    
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" width="130"></a>
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
                class="sidebar-item  ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item ">
                <a href="film.php" class='sidebar-link'>
                    <i class="fas fa-fw fa-film"></i>
                    <span>Film</span>
                </a>
            </li>
                        
            
            <li
                class="sidebar-item ">
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
                class="sidebar-item active">
                <a href="user.php" class='sidebar-link'>
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
            </li>
            <li
                class="sidebar-item active">
                <a href="likes.php" class='sidebar-link'>
                    <i class="bi bi-heart"></i>
                    <span>Likes</span>
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
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="login.php" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Admin</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Admin!</h6>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable Users</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($users as $us): ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $us['name']; ?></td>
                      <td><?= $us['username']; ?></td>
                      <td>
                        <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#ubahusersModal<?= $us['id']; ?>"><i class="fas fa-fw fa-edit"></i> Ubah</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ubahusersModal<?= $us['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahusersModalLabel<?= $us['id']; ?>" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="post">
                              <input type="hidden" name="id" value="<?= $us['id']; ?>">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="ubahusersModalLabel<?= $us['id']; ?>">Ubah users</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="name<?= $us['id']; ?>">Nama users</label>
                                    <input type="text" name="name" id="name<?= $us['id']; ?>" class="form-control" value="<?= $us['name']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="username<?= $us['id']; ?>">Username</label>
                                    <input type="text" name="username" id="username<?= $us['id']; ?>" class="form-control" value="<?= $us['username']; ?>" required>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
                                  <button type="submit" name="btnUbahusers" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                            <a href="hapus_user.php?id=<?= $us['id']; ?>" class="btn btn-danger btn-sm btn-hapus" data-nama="user: <?= $us['name']; ?> | <?= $us['username']; ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
</body>

</html>
