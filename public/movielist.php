<?php

include '../admin/dbconnect.php';
$query = mysqli_query($conn, "SELECT * FROM `film`");

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
							<a class="btn btn-default" href="movies.php">
								movies
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="celebritylist.php">
								Celebrity
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="about.php">
								About
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
					<div class="topbar-filter fw">
						<p>Found <span>1,608 movies</span> in total</p>
						<label>Sort by:</label>
						<select>
							<option value="popularity">Popularity Descending</option>
							<option value="popularity">Popularity Ascending</option>
							<option value="rating">Rating Descending</option>
							<option value="rating">Rating Ascending</option>
							<option value="date">Release date Descending</option>
							<option value="date">Release date Ascending</option>
						</select>
						<a href="movielist.html" class="list"><i class="ion-ios-list-outline "></i></a>
						<a href="moviegridfw.html" class="grid"><i class="ion-grid active"></i></a>
					</div>
                    
					<div class="flex-wrap-movielist mv-grid-fw">
                    <?php
                        while ($data = mysqli_fetch_array($query)) : ?>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="<?php echo $data["gambar"]; ?>" alt="">
							<div class="hvr-inner">
							<a href="movies.php?movieid=<?= $data['id'] ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="#"><?php echo $data["nama_film"]; ?></a></h6>
								<p class="rate"><i class="ion-android-star"></i><span><?php echo $data["rating"]; ?></span>/10 </p>
							</div>
						</div>
                        <?php endwhile ?>
					</div>
                    
					<div class="topbar-filter">
						<label>Movies per page:</label>
						<select>
							<option value="range">20 Movies</option>
							<option value="saab">10 Movies</option>
						</select>

						<div class="pagination2">
							<span>Page 1 of 2:</span>
							<a class="active" href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">...</a>
							<a href="#">78</a>
							<a href="#">79</a>
							<a href="#"><i class="ion-arrow-right-b"></i></a>
						</div>
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
					<p>5th Avenue st, manhattan<br>
						New York, NY 10001</p>
					<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
				</div>
				<div class="flex-child-ft item2">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Blockbuster</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Forums</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Help Center</a></li>
					</ul>
				</div>
				<div class="flex-child-ft item3">
					<h4>Legal</h4>
					<ul>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Security</a></li>
					</ul>
				</div>
				<div class="flex-child-ft item4">
					<h4>Account</h4>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Watchlist</a></li>
						<li><a href="#">Collections</a></li>
						<li><a href="#">User Guide</a></li>
					</ul>
				</div>
				<div class="flex-child-ft item5">
					<h4>Newsletter</h4>
					<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
					<form action="#">
						<input type="text" placeholder="Enter your email...">
					</form>
					<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
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
