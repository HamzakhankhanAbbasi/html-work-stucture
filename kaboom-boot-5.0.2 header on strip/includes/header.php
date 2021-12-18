<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kaboom Collab</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<header>
		<div class="container">
			<div class="topBar">
				<div class="logo-box">
					<a href="index.php">
						<img src="assets/images/logo.png" alt="logo" class="img-fluid">
					</a>
				</div>
				<!-- search icon and two links -->
				<ul class="center">
					<li><span class="searchBar" onclick="openSearchHero()"><i class="fas fa-search"></i></span></li>
					<li class="linkdis"><a href="how-it-works.php">how it works</a></li>
					<li class="linkdis"><a href="#!">creator</a></li>
				</ul>
				<!-- login / toggle DropDown Land $ Currency Selector -->
				<ul class="rightSide">
					<li>
						<a href="#!" data-bs-toggle="modal" data-bs-target="#login-signup" class="login-btn gen-otline-btn mobilemodal">
							<span><i class="fas fa-sign-in-alt"></i></span>
						</a>
						<a href="#!" data-bs-toggle="modal" data-bs-target="#login-signup" class="login-btn gen-otline-btn defaultModal"><span><img src="assets/images/user-icon.png" alt="icon" class="img-fluid"></span>Login/Signup</a>
					</li>
					<li>
						<div class="dropdown">
							<span class="btn toggleMenu" href="#" role="button" id="dropdownMenuLink">
								<img src="assets/images/drop-toggle.png" alt="img-fluid">
							</span>	
							<ul class="menu gen-gradient">
								<li><a href="skill-builder.php">Skill Builder</a></li>
								<li><a href="contest.php">Contest</a></li>
								<li><a href="#!">Shop Merch</a></li>
								<li><a href="#!">Collab Blog</a></li>
							</ul>
						</div>
					</li>
					<li>
						<select class="form-select form-select-sm" aria-label=".form-select-sm example">
							<option value="1"><span class="flag"> <img src="assets/images/usa-flag.png" alt="flag"> </span>English</option>
							<option value="2"><span class="flag"> <img src="assets/images/usa-flag.png" alt="flag"> </span>Dutch</option>
							<option value="3"><span class="flag"> <img src="assets/images/usa-flag.png" alt="flag"> </span>Espanyol</option>
						</select>
					</li>
					<li >
						<select class="form-select form-select-sm" aria-label=".form-select-sm example">
							<option value="1"><span class="flag"> <img src="assets/images/usa-flag.png" alt="flag"> </span>USD</option>
							<option value="2"><span class="flag"> <img src="assets/images/usa-flag.png" alt="flag"> </span>euro</option>
						</select>
					</li>
				</ul>
			</div>
		</div>
		<div class="headerBottom borderTopBottom">
			<div class="container">
				<div class="bottomBar">
						<!-- RESPONSIVE NAVIGATION -->
						<div class="navigation-wrap">
							<div id="main-nav" class="stellarnav custom-nav">
								<ul>
									<li><a href="graphic-design.php" class="active">Graphics & Desgn</a></li>
									<li><a href="media-audio.php">Music & Audio</a></li>
									<li><a href="#!">Technology & Programing</a></li>
									<li><a href="#!">Writing</a></li>
									<li><a href="#!">Video & Animation</a></li>
									<li><a href="#!">Marketing & Branding</a></li>
									<li><a href="#!">Interest</a></li>
									<li class="resLink"><a href="#!">how it works</a></li>
									<li class="resLink"><a href="#!">creator</a></li>
									<li class="dropFour"><a href="skill-builder.php">Skill Builder</a></li>
									<li class="dropFour"><a href="contest.php">Contest</a></li>
									<li class="dropFour"><a href="#!">Shop Merch</a></li>
									<li class="dropFour"><a href="#!">Collab Blog</a></li>
								</ul>
							</div>
						</div>
						<!-- RESPONSIVE NAVIGATION -->
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Searchbar Modal onclick  -->

	<div id="FullScreenOverlay" class="overlaySearch">
  		<span class="closebtn" onclick="closeSearchHero()" title="Close overlaySearch">×</span>
		<div class="overlay-content">
			<form action="">
				<div class="fieldWrapper">
					<input type="text" class="modalInput" placeholder="Search" name="search">
					<button type="submit" class="modalBtn gen-gradient"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>






	<!-- hide cart sidebar for later use -->
	<!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-cart" aria-labelledby="offcanvasExampleLabel">
		<div class="cart-sidebar-inner">
			<div class="top">
				<p>Cart</p>
			</div>
			<div class="cart-items-wrap">
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="amount">
					<p><span>Total:</span><span>$15.00</span></p>
				</div>
				<div class="cart-button">
					<a href="cart.php">Go To Cart</a>
					<a href="checkout.php">Checkout</a>
				</div>
			</div>
		</div>
	</div> -->
