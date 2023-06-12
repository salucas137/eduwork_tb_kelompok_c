<?php include "../admin/dbconnect.php" ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- index14:58-->

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
    <img class="logo" src="../images/logo.png" alt="" width="240" height="58">
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
					<a href="index.php"><img class="logo" src="../images/logo.png" alt="" width="240" height="58"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a href="index.php" class="btn btn-default">
								Home
							</a>
						</li>
						<li>
							<a href="movielist.php" class="btn btn-default">
								movies</i>
							</a>
						</li>
						<li>
							<a href="category.php" class="btn btn-default">
								Categories</i>
							</a>
						</li>
						<li>
							<a href="celebritylist.php" class="btn btn-default">
								Celebrities</i>
							</a>
						</li>
						<li>
							<a href="about.php" class="btn btn-default">
								About</i>
							</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<!-- top search form -->
		
		</div>
	</header>
	<!-- END | Header -->

	<div class="slider movie-items">
		<div class="container">
			<div class="row">
				
				<div class="slick-multiItemSlider">
					<?php
					$limit = 12; 
                    $offsetQuery = "";
                    if(isset($_GET["page"])){
                    $offset = ($_GET["page"]*$limit) - $limit;

                    $offsetQuery = "offset $offset";
                    }

					$query = mysqli_query($conn ,"SELECT * FROM film LIMIT $limit $offsetQuery"); 
          $count = mysqli_num_rows($query);
					if($count>0){ 
              while($data=mysqli_fetch_array($query)){
          ?>
					
					<div class="movie-item">
						<div class="mv-img">
							<a href=""><img src="<?php echo $data["gambar"]; ?>" alt="" width="285" height="437"></a>
						</div>
						<div class="title-in">
							<div class="cate">
								<?php
								$querykategori = mysqli_query($conn ,"SELECT * FROM detail_kategori JOIN kategori on detail_kategori.kategori_id = kategori.id_kategori WHERE film_id = $data[id_film]"); 
														while ($datakategori = mysqli_fetch_array($querykategori)) {
									?>
									<span class="blue"><a href="#"><?php echo $datakategori['nama_kategori'] ?></a></span> 
									
									
									<?php 
								}
								?>
								
							</div>
							<h6><span class="orange"><a href="movies.php?movieid=<?= $data['id_film'] ?>"><?php echo $data['nama_film'] ?></a></span></h6>
							<p><i class="ion-android-star"></i><span><?php echo $data['rating'] ?></span> /10</p>
						</div>
					</div>
					<?php 
              }
            }
          ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="movie-items">
		<div class="container">
			<div class="row ipad-width">
				<div class="col-md-8">
					<div class="title-hd">
						<h2>Movies</h2>
						<a href="movielist.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="tabs">
						<ul class="tab-links">
							
						</ul>
						<div class="tab-content">
							<div id="tab1" class="tab active">
								<div class="row">
									<div class="slick-multiItem">
										<?php
					$query = mysqli_query($conn ,"SELECT * FROM film"); 
          $count = mysqli_num_rows($query);
					if($count>0){ 
              while($data=mysqli_fetch_array($query)){
          ?>
								
										<div class="slide-it">
											
											<div class="movie-item">
												
												<div class="mv-img">
													<img src="<?php echo $data["gambar"]; ?>" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="movies.php?movieid=<?= $data['id_film'] ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>

												<div class="title-in">
													<h6><a href="#"><?php echo $data['nama_film'] ?></a></h6>
													<p><i class="ion-android-star"></i><span><?php echo $data['rating'] ?></span> /10</p>
												</div>
											</div>
										</div>
										<?php 
              }
            }
          ?>
									</div>
								</div>
							</div>
							
							
							
						</div>
					</div>
			
				</div>
				<div class="col-md-4">
					<div class="sidebar">
						<div class="ads">
							<img src="../images/uploads/ads1.png" alt="" width="336" height="296">
						</div>
						

						<div class="celebrities">
							<h4 class="sb-title">Spotlight Celebrities</h4>
							<?php
							$limit = 4; 
                    $offsetQuery = "";
                    if(isset($_GET["page"])){
                    $offset = ($_GET["page"]*$limit) - $limit;

                    $offsetQuery = "offset $offset";
                    }

					$query = mysqli_query($conn ,"SELECT * FROM pemain ORDER BY nama_pemain ASC LIMIT $limit $offsetQuery"); 
          $count = mysqli_num_rows($query);
					if($count>0){ 
              while($data=mysqli_fetch_array($query)){
          ?>
							<div class="celeb-item">
								<a href="celebrity.php?celebrityid=<?= $data['id_pemain'] ?>"><img src="<?php echo $data["foto"]; ?>" alt="" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="celebrity.php?celebrityid=<?= $data['id_pemain'] ?>"><?php echo $data['nama_pemain'] ?></a></h6>
									<span><?php echo $data['negara'] ?></span>
								</div>
							</div>

							<?php 
              }
            }
          ?>
							
							<a href="celebritylist.php" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- latest new v1 section-->
	<!--end of latest new v1 section-->
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
				<p><a target="_blank" href="https://www.templateshub.net">Kelompok C</a></p>
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

<!-- index14:58-->

</html>
