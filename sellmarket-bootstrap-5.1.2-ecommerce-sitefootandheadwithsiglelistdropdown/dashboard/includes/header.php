<?php include 'includes/header-links.php';?>

<body>
	<header>
		<!-- RESPONSIVE NAVIGATION -->
		<div class="container-fluid">
			<div class="header-wrap">
				<div class="header-logo-box">
					<a href="../index.php"><img src="assets/images/header-logo.png" alt="img"></a>
					<p class="header-tagline type-2">The Simpler Way To Buy & Sell Locally!</p>
				</div>

				<p class="header-tagline type-1">The Simpler Way To Buy & Sell Locally!</p>
				<div class="header-nav">
					<ul class="list-unstyled d-flex">
						<li class="about-btn"><a href="#home">About <i class="fas fa-angle-down"></i></a>
							<ul class="list-unstyled ">
								<li><a href="#!">Who we are?</a></li>
								<li><a href="#!">What we do?</a></li>
								<li><a href="#!">Where we are?</a></li>
							</ul>
						</li>
						<li><a href="#about-us">Help</a></li>
					</ul>
				</div>

				<div class="social-icons">
					<p class="heading">Follow us</p>
					<ul class="list-unstyled">
						<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>

				<!-- <div class="header-contact-box">
					<div class="img-box">
						<a href="mailto:email@example.com"><img src="assets/images/chat-icon.png"></a>
					</div>	
					<div class="text-box">
						<p class="desc"><a href="tel:111.222.3333"><span>Support</span>  111.222.3333</a></p>
						<p class="desc"><a href="mailto:email@example.com">info@sellsellmarket.com</a></p>
					</div>
				</div> -->
				
			</div>
		</div>
		<!-- RESPONSIVE NAVIGATION -->
	</header>

	<section class="header-bottom">
		<div class="container-fluid">
			<form class="row align-items-center">
				<div class="col-lg-4">
					<div class="form-group type-1">
						<select>
							<option disabled>New York</option>
							<option>New York</option>
							<option>California</option>
						</select>
						<img src="assets/images/search-icon.png">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group type-2">
						<input type="search" name="" placeholder="Search...">
						<a href="#!" class="search-icon"><img src="assets/images/search-icon-2.png"></a>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="gen-btns">
						<a href="#!" data-bs-toggle="modal" data-bs-target="#loginModalCenter">Login</a>
						<a href="#!" class="chat-icon"><i class="fas fa-comments"></i></a>
						<button type="button" class="sell-btn" data-bs-toggle="modal" data-bs-target="#loginModalCenter"> <span>+</span> Sell</button>
					</div>	
				</div>
			</form>
		</div>
	</section>

