<?php
include '../admin/dbconnect.php';
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- moviegridfw07:38-->

<head>
	<!-- Basic need -->
	<title>MovieVerse</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

	<!--Google Font-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="../css/plugins.css">
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<!--preloading-->
	<div id="preloader">
		<img class="logo" src="../images/logo.png" alt="" width="240" height="">
		<div id="status">
			<span></span>
			<span></span>
		</div>
	</div>
	<!--end of preloading-->
	<!--login form popup-->
<!--end of login form popup-->
<!--signup form popup-->
<!--end of signup form popup-->
	<!-- BEGIN | Header -->
	<header class="ht-header">
		<div class="container">
			<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
					<div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<a href="index.php"><img class="logo" src="../images/logo.png" alt="" width="240" height=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default " href="index.php">
								Home</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="movielist.php">
								movies
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="category.php">
								Categories
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="celebritylist.php">
								Celebrities
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="about.php">
								About
							</a>
						</li>

					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<!-- jika sudah login (ada session username) -->
            <?php if (isset($_SESSION["username"])): ?>
						<li><a href="#">Selamat Datang, <?php echo $_SESSION["username"] ?></a></li>
						<li class="btn signup"><a href="logout.php">LOGout</a></li>
						<!-- jika belum login (belum ada session username) -->    
                <?php else: ?>
						<li><a href="login.php">LOG In</a></li>
						<li class="btn signup"><a href="signup.php">sign up</a></li>
						<?php endif ?>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<!-- top search form -->
		
		</div>
	</header>
	<!-- END | Header -->

	<div class="hero common-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>Movie List</h1>
						<ul class="breadcumb">
							<li class="active"><a href="#">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="topbar-filter">
						<!-- mengambil data celebrity -->
						<?php
						$data_film = mysqli_query($conn,"SELECT * FROM film");
						// menghitung data 
						$jumlah_data = mysqli_num_rows($data_film);
						?>
						<p>Found <span><?php echo $jumlah_data; ?> movies</span> in total</p>
						<a href="#" class="grid"><i class="ion-grid active"></i></a>
					</div>
					<div class="flex-wrap-movielist mv-grid-fw">
						<?php

						$batas = 6;
						$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
						$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
						
						$previous = $halaman - 1;
						$next = $halaman + 1;

						$data = mysqli_query($conn ,"SELECT * FROM film"); 
          	$jumlah_data = mysqli_num_rows($data);
						$total_halaman = ceil($jumlah_data / $batas);

						$data_film = mysqli_query($conn ,"SELECT * FROM film ORDER BY nama_film ASC limit $halaman_awal, $batas"); 

						while ($d = mysqli_fetch_array($data_film)) : ?>

						<div class="movie-item-style-2 movie-item-style-1">
							<img src="<?php echo $d["gambar"]; ?>" alt="">
							<div class="hvr-inner">
							<a href="movies.php?movieid=<?= $d['id_film'] ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="#"><?php echo $d["nama_film"]; ?></a></h6>
								<p class="rate"><i class="ion-android-star"></i><span><?php echo $d["rating"]; ?></span>/10 </p>
							</div>
						</div>
              <?php endwhile ?>
					</div>

					<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">6 Movies</option>
					</select>
					
					<div class="pagination2">
						<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>><i class="ion-arrow-left-b"></i></a>
						<?php
						for($x=1;$x<=$total_halaman;$x++){
						?> 
						<a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
						<?php
						}
						?>		
						<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>><i class="ion-arrow-right-b"></i></a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- footer section-->
	<footer class="ht-footer">
		<div class="container">
			<div class="flex-parent-ft">
				<div class="flex-child-ft item1">
					<a href="index.php"><img class="logo" src="../images/logo.png" alt="" width="240"></a>
					<p>Jakarta, Indonesia<br>
						Jakarta, 12840</p>
					<p>Call us: <a href="#">(+62) 895 1232 4565</a></p>
				</div>
				<div class="flex-child-ft item2">
					<h4>Resources</h4>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="#">Blockbuster</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Forums</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Help Center</a></li>
					</ul>
				</div>
				
				
			
			</div>
		</div>
		<div class="ft-copyright">
			<div class="ft-left">
				<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
			</div>
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</footer>
	<!-- end of footer section-->

	<script src="../js/jquery.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/plugins2.js"></script>
	<script src="../js/custom.js"></script>
</body>

<!-- moviegridfw07:38-->

</html>
