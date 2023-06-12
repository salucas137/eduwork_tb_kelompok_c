<?php

include '../admin/dbconnect.php';
$celebrityid = $_GET['celebrityid'];
$query = mysqli_query($conn, "SELECT * FROM `pemain` where pemain.id_pemain='$celebrityid'");

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

<!-- celebritysingle12:04-->

<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
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
					<a href="index.html"><img class="logo" src="../images/logo.png" alt="" width="240" height=""></a>
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
						<li>
							<a href="category.php" class="btn btn-default">
								Categories</i>
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="celebritylist.php">
								celebrities
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="about.php">
								about
							</a>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<!-- top search form -->
			<div class="top-search">
				<select>
					<option value="united">Movie</option>
					<option value="saab">Others</option>
				</select>
				<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
			</div>
		</div>
	</header>
	<!-- END | Header -->

	<div class="hero hero3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
				</div>
			</div>
		</div>
	</div>
	<!-- celebrity single section-->
    <?php
    $pemain = mysqli_fetch_array($query) ?>
	<div class="page-single movie-single cebleb-single">
		<div class="container">
			<div class="row ipad-width">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="mv-ceb">
                    <img src="<?php echo $pemain['foto'] ?>" alt="">
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="movie-single-ct">
						<h1 class="bd-hd"><?php echo $pemain ['nama_pemain'] ?></h1>
						<p class="ceb-single">Actor | Producer</p>
						<div class="social-link cebsingle-socail">
							<a href="#"><i class="ion-social-facebook"></i></a>
							<a href="#"><i class="ion-social-twitter"></i></a>
							<a href="#"><i class="ion-social-googleplus"></i></a>
							<a href="#"><i class="ion-social-linkedin"></i></a>
						</div>
						<div class="movie-tabs">
							<div class="tabs">
								<ul class="tab-links tabs-mv">
									<li class="active"><a href="#overviewceb">Overview</a></li>
									
								</ul>
								<div class="tab-content">
									<div id="overviewceb" class="tab active">
										<div class="row">
											<div class="col-md-8 col-sm-12 col-xs-12">
												<p><?= $pemain["bio"]; ?></p>
												
												
												<!-- movie cast -->
												<div class="mvcast-item">
													
												</div>
											</div>
											<div class="col-md-4 col-xs-12 col-sm-12">
												<div class="sb-it">
													<h6>Fullname: </h6>
													<p><?= $pemain["nama_pemain"]; ?></a></p>
												</div>
												<div class="sb-it">
													<h6>Date of Birth: </h6>
													<p><?= $pemain["tanggal_lahir"]; ?></p>
												</div>
												<div class="sb-it">
													<h6>Country: </h6>
													<p><?= $pemain["negara"]; ?></p>
												</div>
												
												<div class="ads">
													<img src="images/uploads/ads1.png" alt="">
												</div>
											</div>
										</div>
									</div>
									<div id="biography" class="tab">
										<div class="row">
											<div class="rv-hd">
												<div>
													<h3>Biography of</h3>
													<h2><?= $pemain["nama_pemain"]; ?></h2>
												</div>
											</div>
											<p><?= $pemain["bio"]; ?></p>
										</div>
									</div>
									<div id="mediaceb" class="tab">
										<div class="row">
											<div class="rv-hd">
												<div>
													<h3>Biography of</h3>
													<h2>Hugh Jackman</h2>
												</div>
											</div>
											<div class="title-hd-sm">
												<h4>Videos <span>(8)</span></h4>
											</div>
											<div class="mvsingle-item media-item">
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Trailer: Watch New Scenes</a></h6>
														<p class="time"> 1: 31</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item2.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Featurette: “Avengers Re-Assembled</a></h6>
														<p class="time"> 1: 03</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item3.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Interview: Robert Downey Jr</a></h6>
														<p class="time"> 3:27</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item4.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Interview: Scarlett Johansson</a></h6>
														<p class="time"> 3:27</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Featurette: Meet Quicksilver & The Scarlet
																Witch</a></h6>
														<p class="time"> 1: 31</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item2.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Interview: Director Joss Whedon</a></h6>
														<p class="time"> 1: 03</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item3.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Interview: Mark Ruffalo</a></h6>
														<p class="time"> 3:27</p>
													</div>
												</div>
												<div class="vd-item">
													<div class="vd-it">
														<img class="vd-img" src="images/uploads/vd-item4.jpg" alt="">
														<a class="fancybox-media hvr-grow"
															href="https://www.youtube.com/embed/o-0hcF97wy0"><img
																src="images/uploads/play-vd.png" alt=""></a>
													</div>
													<div class="vd-infor">
														<h6> <a href="#">Official Trailer #2</a></h6>
														<p class="time"> 3:27</p>
													</div>
												</div>
											</div>
											<div class="title-hd-sm">
												<h4>Photos <span> (21)</span></h4>
											</div>
											<div class="mvsingle-item">
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image11.jpg"><img
														src="images/uploads/image1.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image21.jpg"><img
														src="images/uploads/image2.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image31.jpg"><img
														src="images/uploads/image3.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image41.jpg"><img
														src="images/uploads/image4.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image51.jpg"><img
														src="images/uploads/image5.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image61.jpg"><img
														src="images/uploads/image6.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image71.jpg"><img
														src="images/uploads/image7.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image81.jpg"><img
														src="images/uploads/image8.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image91.jpg"><img
														src="images/uploads/image9.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image101.jpg"><img
														src="images/uploads/image10.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image111.jpg"><img
														src="images/uploads/image1-1.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image121.jpg"><img
														src="images/uploads/image12.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image131.jpg"><img
														src="images/uploads/image13.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image141.jpg"><img
														src="images/uploads/image14.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image151.jpg"><img
														src="images/uploads/image15.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image161.jpg"><img
														src="images/uploads/image16.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image171.jpg"><img
														src="images/uploads/image17.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image181.jpg"><img
														src="images/uploads/image18.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image191.jpg"><img
														src="images/uploads/image19.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image201.jpg"><img
														src="images/uploads/image20.jpg" alt=""></a>
												<a class="img-lightbox" data-fancybox-group="gallery"
													href="images/uploads/image211.jpg"><img
														src="images/uploads/image2-1.jpg" alt=""></a>
											</div>
										</div>
									</div>
									<div id="filmography" class="tab">
										<div class="row">
											<div class="rv-hd">
												<div>
													<h3>Biography of</h3>
													<h2>Hugh Jackman</h2>
												</div>

											</div>
											<div class="topbar-filter">
												<p>Found <span>14 movies</span> in total</p>
												<label>Filter by:</label>
												<select>
													<option value="popularity">Popularity Descending</option>
													<option value="popularity">Popularity Ascending</option>
													<option value="rating">Rating Descending</option>
													<option value="rating">Rating Ascending</option>
													<option value="date">Release date Descending</option>
													<option value="date">Release date Ascending</option>
												</select>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film1.jpg" alt="">
														<div>
															<a href="#">X-Men: Apocalypse </a>
															<p class="time">Logan</p>
														</div>

													</div>
													<p>... 2016</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film2.jpg" alt="">
														<div>
															<a href="#">Eddie the Eagle </a>
															<p class="time">Bronson Peary</p>
														</div>
													</div>
													<p>... 2015</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film3.jpg" alt="">
														<div>
															<a href="#">Me and Earl and the Dying Girl </a>
															<p class="time">Hugh Jackman</p>
														</div>
													</div>
													<p>... 2015</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film4.jpg" alt="">
														<div>
															<a href="#">Night at the Museum 3 </a>
															<p class="time">Blackbeard</p>
														</div>
													</div>
													<p>... 2014</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film5.jpg" alt="">
														<div>
															<a href="#">X-Men: Days of Future Past </a>
															<p class="time">Wolverine</p>
														</div>
													</div>
													<p>... 2012</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film6.jpg" alt="">
														<div>
															<a href="#">The Wolverine </a>
															<p class="time">Logan</p>
														</div>
													</div>
													<p>... 2011</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film7.jpg" alt="">
														<div>
															<a href="#">Rise of the Guardians </a>
															<p class="time">Bunny</p>
														</div>
													</div>
													<p>... 2011</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film8.jpg" alt="">
														<div>
															<a href="#">The Prestige </a>
															<p class="time">Robert Angier</p>
														</div>
													</div>
													<p>... 2010</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- celebrity single section-->

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

<!-- celebritysingle12:18-->

</html>
