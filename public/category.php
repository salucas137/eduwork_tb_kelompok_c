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
	<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    Email:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
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
								Movies
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
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<!-- top search form -->
			<!--<div class="top-search">
				<select>
					<option value="united">Movie</option>
					<option value="saab">Others</option>
				</select>
				<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
			</div>-->
		</div>
	</header>
	<!-- END | Header -->

	<div class="hero common-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>Category</h1>
						<ul class="breadcumb">
							<li class="active"><a href="index.php">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span> Category listing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="page-single">
		<div class="container">
			<div class="row">

			<div class="movie-items">
				<div class="row ipad-width">
				<div class="col-md-12">

					<div class="title-hd">
						<h2>Action</h2>
						<a href="movielist.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
					</div>
								<div class="row">
									<div class="slick-multiItem">
										<?php
											$query = mysqli_query($conn ,"SELECT *, film.nama_film, kategori.nama_kategori
											FROM film 
											JOIN detail_kategori ON film.id_film = detail_kategori.film_id 
											JOIN kategori ON kategori.id_kategori = detail_kategori.kategori_id 
											WHERE kategori.id_kategori='1'"); 
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
							
							<div class="title-hd">
								<h2>Thriller</h2>
								<a href="movielist.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
							</div>
								<div class="row">
									<div class="slick-multiItem">
										<?php
											$query = mysqli_query($conn ,"SELECT *, film.nama_film, kategori.nama_kategori
											FROM film 
											JOIN detail_kategori ON film.id_film = detail_kategori.film_id 
											JOIN kategori ON kategori.id_kategori = detail_kategori.kategori_id 
											WHERE kategori.id_kategori='3'"); 
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

							<div class="title-hd">
								<h2>Adventure</h2>
								<a href="movielist.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
							</div>
								<div class="row">
									<div class="slick-multiItem">
										<?php
											$query = mysqli_query($conn ,"SELECT *, film.nama_film, kategori.nama_kategori
											FROM film 
											JOIN detail_kategori ON film.id_film = detail_kategori.film_id 
											JOIN kategori ON kategori.id_kategori = detail_kategori.kategori_id 
											WHERE kategori.id_kategori='9'"); 
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
