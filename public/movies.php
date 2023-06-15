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

<!-- moviesingle07:38-->
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
                    Nama :
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
								Category
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
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>-->
	</div>
</header>
<!-- END | Header -->

<div class="hero mv-single-hero">
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
<div class="page-single movie-single movie_single">

<?php
$moviesid = $_GET['movieid']; ?>
<?php
$query = mysqli_query($conn, "SELECT *, film.nama_film, kategori.nama_kategori, pemain.nama_pemain, pemain.foto, komentar.isi_komentar, komentar.nama_komentar, komentar.judul_komentar, komentar.rating_komentar, komentar.tanggal_komentar
                              FROM film 
                              JOIN detail_kategori ON film.id_film = detail_kategori.film_id 
                              JOIN kategori ON id_kategori = detail_kategori.kategori_id 
                              JOIN detail_pemain ON film.id_film = detail_pemain.film_id
                              JOIN pemain ON pemain.id_pemain = detail_pemain.pemain_id
                              LEFT JOIN komentar ON film.id_film = komentar.id_film
                              WHERE film.id_film='$moviesid'");
$film = mysqli_fetch_assoc($query);

$categories = array();
$actors = array();
$reviews = array();

// Fetch all reviews and store them in an array
while ($row = mysqli_fetch_assoc($query)) {
    $categories[] = $row['nama_kategori'];
    $actors[] = $row['nama_pemain'];
	$reviews[] = array(
        'review_title' => $row['judul_komentar'],
        'review_content' => $row['isi_komentar'],
        'review_rating' => $row['rating_komentar'],
        'review_date' => $row['tanggal_komentar'],
        'reviewer_name' => $row['nama_komentar']
    );
}

$reviews = array_unique($reviews, SORT_REGULAR);

?>

	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="<?php echo $film['gambar'] ?>" alt="">
					<div class="movie-btn">	
						<!--<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="https://www.youtube.com/embed/o-0hcF97wy0" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>-->
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?= $film["nama_film"]; ?> <span><?php echo $film['tahun_rillis'] ?></span></h1>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>		
					</div>			
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span><?= $film["rating"]; ?></span> /10<br>
								<!--<span class="rv">2 Reviews</span>-->
							</p>
						</div>
						<!--<div class="rate-star">
							<p>Rate This Movie:  </p>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star-outline"></i>
						</div>-->
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<!--<li><a href="#cast">  Cast & Crew </a></li>-->
								<li><a href="#moviesrelated"> Related Movies</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?php echo $film['sinopsis'] ?></p>
											<div class="title-hd-sm">
												<h4>cast</h4>
												<!--<a href="#" class="time">Full Cast & Crew  <i class="ion-ios-arrow-right"></i></a>-->
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">
												
											<?php foreach (array_unique($actors) as $actor): ?>
												<div class="cast-it">
													<div class="cast-left">
													<?php
           													$actorQuery = mysqli_query($conn, "SELECT foto FROM pemain WHERE nama_pemain = '$actor'");
            												$actorData = mysqli_fetch_assoc($actorQuery);
            												$actorImage = $actorData['foto'];
        											?>
        												<img src="<?php echo $actorImage; ?>" alt="" style="width: 40px;">
													</div>
													<p><?php echo $actor; ?></p>
												</div>
												<?php endforeach; ?>
												
											</div>

						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<!--<div class="sb-it">
						            			<h6>Director: </h6>
						            			<p><a href="#">Joss Whedon</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Writer: </h6>
						            			<p><a href="#">Joss Whedon,</a> <a href="#">Stan Lee</a></p>
						            		</div>-->
						            		<div class="sb-it">
						            			<h6>Genres:</h6>						
													<span style="color: gray;"><?= implode(', ', array_unique($categories)); ?></span>
						            		</div>
						            		<!--<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p>May 1, 2015 (U.S.A)</p>
						            		</div>-->
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p><?php echo $film["durasi"]; ?> menit</p>
						            		</div>
						            		<!--<div class="sb-it">
						            			<h6>Plot Keywords:</h6>
						            			<p class="tags">
						            				<span class="time"><a href="#">superhero</a></span>
													<span class="time"><a href="#">marvel universe</a></span>
													<span class="time"><a href="#">comic</a></span>
													<span class="time"><a href="#">blockbuster</a></span>
													<span class="time"><a href="#">final battle</a></span>
						            			</p>
						            		</div>-->
						            	</div>
						            </div>
						        </div>

						        <div id="reviews" class="tab review">
						           <div class="row">
						            	<div class="rv-hd">
							            	<a href="#" class="redbtn" style="margin-bottom: 10px;">Write Review</a>
						            	</div>
						            	<!--<div class="topbar-filter">
											<p>Found <span>56 reviews</span> in total</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>-->
										<?php foreach ($reviews as $review): ?>		
										<div class="mv-user-review-item">
											<div class="user-infor">
												<div>
													<h3><?=  $review['review_title']; ?></h3>
													<div class="no-star">
														<p><?=  $review['review_rating']; ?> / 10</p>
														<!--<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star last"></i>-->
													</div>
													<p class="time">
													<?= $review['review_date']; ?><a href="#"> <?= $review['reviewer_name']; ?></a>
													</p>
												</div>
											</div>
											<p><?= $review['review_content']; ?></p>
										</div>
										<?php endforeach; ?>
										
						            </div>
						        </div>
						        
					       	 	
					       	 	<div id="moviesrelated" class="tab">

					       	 		<div class="row">
					       	 			<h3>Related Movies To</h3>
					       	 			<h2><?php echo $film['nama_film'] ?></h2>

										<?php
        								// Fetch related movies based on the category
       									$relatedQuery = mysqli_query($conn, "SELECT * FROM film JOIN detail_kategori ON id_film = detail_kategori.film_id JOIN kategori ON id_kategori = detail_kategori.kategori_id WHERE kategori.nama_kategori = '$categories[0]' AND id_film != '$moviesid'");

        								if (mysqli_num_rows($relatedQuery) > 0) {
           									while ($relatedData = mysqli_fetch_assoc($relatedQuery)) {
                						?>
										<div class="movie-item-style-2">
											<img src="<?php echo $relatedData['gambar']; ?>" alt="">
											<div class="mv-item-infor">
												<h6><a href="movies.php?movieid=<?php echo $relatedData['id_film']; ?>"><?php echo $relatedData['nama_film']; ?></a> <span style="color: gray;">(<?php echo $relatedData['tahun_rillis']; ?>)</span></h6>
												<p class="rate"><i class="ion-android-star"></i><span><?php echo $relatedData['rating']; ?></span> /10</p>
												<p class="describe"><?php echo $relatedData['sinopsis']; ?></p>
												<p class="run-time"><?php echo $relatedData['durasi']; ?> menit</p>
												<!--<p>Stars: </p>-->
											</div>
										</div>
										<?php
            									}
       									 } else {
            							echo "No related movies found.";
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
	 <!-- /END OF PHP -->
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
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="../js/jquery.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/plugins2.js"></script>
<script src="../js/custom.js"></script>
</body>

<!-- moviesingle11:03-->
</html>