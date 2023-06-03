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
	<title>Movie Verse</title>
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
					<a href="index-2.html"><img class="logo" src="../images/logo.png" alt="" width="240" height="58"></a>
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
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li><a href="#">Help</a></li>
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<!-- top search form -->
			<div class="top-search">
				<select>
					<option value="united">TV show</option>
					<option value="saab">Others</option>
				</select>
				<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
			</div>
		</div>
	</header>
	<!-- END | Header -->

	<div class="slider movie-items">
		<div class="container">
			<div class="row">
				<div class="social-link">
					<p>Follow us: </p>
					<a href="#"><i class="ion-social-facebook"></i></a>
					<a href="#"><i class="ion-social-twitter"></i></a>
					<a href="#"><i class="ion-social-googleplus"></i></a>
					<a href="#"><i class="ion-social-youtube"></i></a>
				</div>
				<div class="slick-multiItemSlider">
					<?php
					$query = mysqli_query($conn ,"SELECT * FROM film"); 
          $count = mysqli_num_rows($query);
					if($count>0){ 
              while($data=mysqli_fetch_array($query)){
          ?>
					
					<div class="movie-item">
						<div class="mv-img">
							<a href="#"><img src="<?php echo $data["gambar"]; ?>" alt="" width="285" height="437"></a>
						</div>
						<div class="title-in">
							<div class="cate">
								<span class="blue"><a href="#">Action</a></span> <span class="orange"><a href="#">Crime</a></span> <span class="green"><a href="#">Thriller</a></span>
							</div>
							<h6><a href="#"><span class="orange"><a href="#"><?php echo $data['nama_film'] ?></a></span></a></h6>
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
						<h2>in theater</h2>
						<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="tabs">
						<ul class="tab-links">
							<li class="active"><a href="#tab1">#Popular</a></li>
							<li><a href="#tab2"> #Coming soon</a></li>
							<li><a href="#tab3"> #Top rated </a></li>
							<li><a href="#tab4"> #Most reviewed</a></li>
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
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
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
							<div id="tab2" class="tab">
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
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
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
							<div id="tab3" class="tab">
								<div class="row">
									<div class="slick-multiItem">
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Interstellar</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">The revenant</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Die hard</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">The walk</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Die hard</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab4" class="tab">
								<div class="row">
									<div class="slick-multiItem">
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Interstellar</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">The revenant</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Die hard</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">The walk</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">Die hard</a></h6>
													<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			
				</div>
				<div class="col-md-4">
					<div class="sidebar">
						<div class="ads">
							<img src="images/uploads/ads1.png" alt="" width="336" height="296">
						</div>
						<div class="celebrities">
							<h4 class="sb-title">Spotlight Celebrities</h4>
							<div class="celeb-item">
								<a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="#">Samuel N. Jack</a></h6>
									<span>Actor</span>
								</div>
							</div>
							<div class="celeb-item">
								<a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="#">Benjamin Carroll</a></h6>
									<span>Actor</span>
								</div>
							</div>
							<div class="celeb-item">
								<a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="#">Beverly Griffin</a></h6>
									<span>Actor</span>
								</div>
							</div>
							<div class="celeb-item">
								<a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="#">Justin Weaver</a></h6>
									<span>Actor</span>
								</div>
							</div>
							<a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
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
					<a href="index-2.html"><img class="logo" src="../images/logo.png" alt="" width="240"></a>
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

<!-- index14:58-->

</html>