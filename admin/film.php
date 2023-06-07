<?php 
  require 'koneksi.php';
  checkLogin();
  $film = mysqli_query($koneksi, "SELECT * FROM film ORDER BY nama_film ASC");
  $genre = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY nama_kategori ASC");
  // jika tombol ubah film ditekan
  if (isset($_POST['btnUbahFilm'])) {
    if (ubahFilm($_POST) > 0) {
      setAlert("Berhasil diubah", "Film berhasil diubah", "success");
      header("Location: film.php");
    }
  }
  // jika tombol tambah film ditekan
  if (isset($_POST['btnTambahFilm'])) {
    if (tambahFilm($_POST) > 0) {
      $nama_film = htmlspecialchars(addslashes(ucwords($_POST['nama_film'])));
      setAlert("Berhasil ditambahkan", "Film $nama_film berhasil ditambahkan", "success");
      header("Location: film.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Datatable</title>

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
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="assets/css/pages/datatables.css">

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
                class="sidebar-item ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item active">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable Film</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable Film</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="col-sm text-left"><br><br>
            <button type="button" data-toggle="modal" data-target="#tambahFilmModal" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Tambah Film</button>
            <!-- Modal -->
            <div class="modal fade text-left" id="tambahFilmModal" tabindex="-1" role="dialog" aria-labelledby="tambahFilmModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form method="post" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="tambahFilmModalLabel">Tambah Film</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="nama_film">Nama Film</label>
                        <input type="text" name="nama_film" required class="form-control" id="nama_film">
                      </div>
                      <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <input type="text" name="sinopsis" required class="form-control" id="sinopsis">
                      </div>
                      <div class="form-group">
                        <label for="durasi">Durasi Film</label>
                        <input type="number" name="durasi" required class="form-control" id="durasi">
                      </div>
                      <div class="form-group">
                        <label for="tahun_rillis">Tahun Rillis</label>
                        <input type="number" name="tahun_rillis" required class="form-control" id="tahun_rillis">
                      </div>
                      <div class="form-group">
                        <label for="rating">Rating Film</label>
                        <input type="number" step="0.01" name="rating" required class="form-control" id="rating">
                      </div>
                      <div class="form-group text-center">
                        <a href="" class="enlarge" id="check_enlarge_photo">
                          <img src="" class="img-profile rounded" id="check_photo" alt="gambar">
                        </a>
                        <div class="form-group">
                          <label for="photo">Gambar</label>
                          <input type="file" name="gambar" id="photo" class="btn btn-sm btn-primary form-control form-control-file" accept="image/*">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
                      <button type="submit" name="btnTambahFilm" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Film</th>
                    <th>Sinopsis</th>
                    <th>Durasi</th>
                    <th>Tahun Rillis</th>
                    <th>Rating Film</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($film as $df): ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $df['nama_film']; ?></td>
                      <td><?= $df['sinopsis']; ?></td>
                      <td> <span><?= ucwords($df['durasi']); ?> Min </span></td>
                      <td><?= $df['tahun_rillis']; ?></td>
                      <td><?= $df['rating']; ?></td>
                      <td>
                        <a href="<?= $df['gambar']; ?>" class="enlarge">
                          <img class="img-list-cover" src="<?= $df['gambar']; ?>" alt="<?= $df['gambar']; ?>">
                        </a>
                      </td>
                      <td>
                        <button class="btn btn-sm m-1 text-center mx-auto btn-success" type="button" data-toggle="modal" data-target="#ubahFilmModal<?= $df['id_film']; ?>"><i class="fas fa-fw fa-edit"></i> Ubah</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ubahFilmModal<?= $df['id_film']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahFilmModalLabel<?= $df['id_film']; ?>" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id_film" value="<?= $df['id_film']; ?>">
                              <input type="hidden" name="gambar_lama" value="<?= $df['gambar']; ?>">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="tambahFilmModalLabel">Ubah Film</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama_film<?= $df['id_film']; ?>">Nama Film</label>
                                    <input type="text" name="nama_film" value="<?= $df['nama_film']; ?>" required class="form-control" id="nama_film<?= $df['id_film']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="sinopsis<?= $df['id_film']; ?>">Sinopsis</label>
                                    <input type="text" name="sinopsis" value="<?= $df['sinopsis']; ?>" required class="form-control" id="sinopsis<?= $df['id_film']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="durasi<?= $df['id_film']; ?>">Durasi</label>
                                    <input type="number" name="durasi" value="<?= $df['durasi']; ?>" required class="form-control" id="durasi<?= $df['id_film']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="tahun_rillis<?= $df['id_film']; ?>">Tahun Film</label>
                                    <input type="number" name="tahun_rillis" value="<?= $df['tahun_rillis']; ?>" required class="form-control" id="tahun_rillis<?= $df['id_film']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="rating<?= $df['id_film']; ?>">Rating Film</label>
                                    <input type="number" step="0.01" name="rating" value="<?= $df['rating']; ?>" required class="form-control" id="rating<?= $df['id_film']; ?>">
                                  </div>
                                  <div class="form-group text-center">
                                    <a href="<?= $df['gambar']; ?>" class="enlarge check_enlarge_photo">
                                      <img src="<?= $df['gambar']; ?>" class="img-profile rounded check_photo" alt="gambar">
                                    </a>
                                    <div class="form-group">
                                      <label for="gambar<?= $df['id_film']; ?>">Gambar Film</label>
                                      <input type="file" name="gambar" id="gambar<?= $df['id_film']; ?>" class="photo btn btn-sm btn-primary form-control form-control-file" accept="image/*">
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
                                  <button type="submit" name="btnUbahFilm" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <a href="hapus_film.php?id_film=<?= $df['id_film']; ?>" data-nama="film Film: <?= $df['nama_film']; ?>" class="btn-hapus btn btn-sm m-1 text-center mx-auto btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                      </td>
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
