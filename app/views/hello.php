<!doctype html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agent AE</title>
	<meta name="description" content="Enekon" />
	<meta name="keywords" content="responsive, mobile, grid, layout, system, framework, fluid, web design, design" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="favicon.png" />

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/animation.css">
  <!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css">
  <![endif]-->
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div class="logo">
				<a href="index.html">
					<img src="img/logo.png" />
				</a>
			</div>
			<nav>
				<a href="#" class="active" >About</a>
				<a href="#">FAQ</a>
				<a href="#"><i class="icon-key"></i>Login</a>
				<a href="#"><i class="icon-user"></i>Register</a>
			</nav>
		</div>
	</div>
	<div id="pre-container">
		<div class="wrapper">
			<div class="search"> 
	      <input class="search-input" id="search_terms" name="search_terms" placeholder="Search" type="text" />
	      <button class='search-button'><i class="icon-search"></i></button>
			</div>
		</div>
	</div>
	<div id="container">
		<div class="wrapper">
			<h1>All Cards</h1>
			<div class="movie-list">
				<?php for( $i=0; $i<4; $i++) { ?>
				<div class="card">
					<div class="inner">
						<div class="poster">
							<img src="img/properties/01.jpg" alt="Gravity" />
						</div>
						<div class="detail">
							<div class="title">
								<h5><i class="icon-commerical-building"></i> Sale</h5>
								<h6><i class="icon-location"></i> Dubai Investment Park</h6>
							</div>
							<div class="description">
								<h6 class="date">22 Nov 2013</h6>
								<p>
									Pellentesque pharetra, erat condimentum sagittis aliquet, mi ligula ullamcorper leo, vel volutpat turpis est eu. Vivamus sollicitudin rutrum metus, nec sagittis.
								</p>
								<div class="contributor">
									<div class="thumb">
										<img src="img/me-thumb.jpg" />
									</div>
									<h4>Talal Munzar</h4>
									<h4>Jellyfish Dubai Realty Company</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php for( $i=0; $i<2; $i++) { ?>
				<div class="card">
					<div class="inner">
						<div class="poster">
							<div class="wanted">
								<h2>Wanted</h2>
								<i class="icon-home"></i>
							</div>
						</div>
						<div class="detail">
							<div class="title">
								<h5><i class="icon-home"></i> Sale or Lease</h5>
								<h6><i class="icon-location"></i> Dubai Investment Park</h6>
							</div>
							<div class="description">
								<h6 class="date">22 Nov 2013</h6>
								<p>
									Pellentesque pharetra, erat condimentum sagittis aliquet, mi ligula ullamcorper leo, vel volutpat turpis est eu. Vivamus sollicitudin rutrum metus, nec sagittis.
								</p>
								<div class="contributor">
									<div class="thumb">
										<img src="img/me-thumb.jpg" />
									</div>
									<h4>Talal Munzar</h4>
									<h4>Jellyfish Dubai Realty Company</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php for( $i=0; $i<2; $i++) { ?>
				<div class="card">
					<div class="inner">
						<div class="poster">
							<div class="wanted">
								<h2>Wanted</h2>
								<i class="icon-commerical-building"></i>
							</div>
						</div>
						<div class="detail">
							<div class="title">
								<h5><i class="icon-commerical-building"></i> Lease</h5>
								<h6><i class="icon-location"></i> Dubai Investment Park</h6>
							</div>
							<div class="description">
								<h6 class="date">22 Nov 2013</h6>
								<p>
									Pellentesque pharetra, erat condimentum sagittis aliquet, mi ligula ullamcorper leo, vel volutpat turpis est eu. Vivamus sollicitudin rutrum metus, nec sagittis.
								</p>
								<div class="contributor">
									<div class="thumb">
										<img src="img/me-thumb.jpg" />
									</div>
									<h4>Talal Munzar</h4>
									<h4>Jellyfish Dubai Realty Company</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="pre-footer">
		<div class="wrapper">
			<div id="morning-minute-slider" class='swipe'>
				<div class="swipe-wrap">
					<div>
						<div class="minute">
							<div class="detail">
								<h3>Morning Minute</h3>
								<h1>The 'doors' we open and close each day decide the life we live.</h1>
							</div>
							<div class="image">
								<img src="img/minute.jpg" />
							</div>
						</div>
					</div>
					<div>
						<div class="minute">
							<div class="detail">
								<h3>Morning Minute</h3>
								<h1>The Second Morning Minute is very inspirational.</h1>
							</div>
							<div class="image">
								<img src="img/minute.jpg" />
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="wrapper">
		</div>
	</div>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/swipe.js"></script>
	<script src="js/script.js"></script>
</body>
</html>