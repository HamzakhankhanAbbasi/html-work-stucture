<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cybercert Education</title>
  <link rel="icon" href="./assets/images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/stellarnav.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/aos.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <div class="header-top-wrap">
      <div class="container">
        <div class="header-top">
          <div class="headerTop-left">
            <ul>
              <li><span><i class="far fa-envelope"></i></span> <a href="mailto:example@gmail.com">example@gmail.com</a></li>
              <li><span><i class="fas fa-street-view"></i></span><a href="javascript:void(0)">Durham Street Hialeah, FL 33010</a></li>
            </ul>
          </div>
          <div class="headerTop-right">
            <ul>
              <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fab fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu">
        <div class="logo">
          <a href="index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
        </div>
      <div class="stellarnav header-mainMenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="fast-track.php">Fast Track</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="study-guides.php">Study Guides</a></li>
          <li><a href="practice-exams.php">Practice Exams</a></li>
          <li><a href="">Blogs</a></li>
          <li><a href="about.php">About</a></li>
          <li class="drop-left"><a href="">Support</a></li>
        </ul>
        <div class="header-menu-right">
          <div class="cart-icon">
            <a href="javascript:void(0)" id="cart-side-toggle"><img src="assets/images/shopping.png" alt="img" class="img-fluid">
              <span class="badge badge-secondary">3</span>
            </a>
          </div>
          <div class="header-menu-button">
            <a href="login.php" class="site-btn">CCE Member Access</a>
          </div>
        </div>
      </div>
    </div>
    <div id="cart-sidebar">
			<div class="cart-sidebar-inner">
				<a id="close-cart-sidebar"><i class="fas fa-times"></i></a>
				<div class="top">
					<p>Cart</p>
					
				</div>
				<div class="cart-items-wrap">
					<div class="cart-item">
						<div class="cart-img">
							<img src="assets/images/aws-logo.png" class="img-fluid" alt="product-image">
						</div>
						<div class="cart-desc">
							<p class="name">AWS Amazon</p>
							<p class="price">$5.00</p>
							<div class="quaitity-box">
								<div class="plus-minus">
									<span class="minus">-</span>
									<label for="quantity-select">QUANTITY</label>
									<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
									<span class="plus">+</span>
								</div>
							</div>
							<a href="#!" class="delete"><i class="fas fa-times"></i></a>
						</div>
					</div>
					<div class="cart-item">
						<div class="cart-img">
							<img src="assets/images/micro-logo.png" class="img-fluid" alt="product-image">
						</div>
						<div class="cart-desc">
							<p class="name">Microsoft</p>
							<p class="price">$5.00</p>
							<div class="quaitity-box">
								<div class="plus-minus">
									<span class="minus">-</span>
									<label for="quantity-select">QUANTITY</label>
									<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
									<span class="plus">+</span>
								</div>
							</div>
							<a href="#!" class="delete"><i class="fas fa-times"></i></a>
						</div>
					</div>
					<div class="cart-item">
						<div class="cart-img">
							<img src="assets/images/google-logo.png" class="img-fluid" alt="product-image">
						</div>
						<div class="cart-desc">
							<p class="name">Google</p>
							<p class="price">$5.00</p>
							<div class="quaitity-box">
								<div class="plus-minus">
									<span class="minus">-</span>
									<label for="quantity-select">QUANTITY</label>
									<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
									<span class="plus">+</span>
								</div>
							</div>
							<a href="#!" class="delete"><i class="fas fa-times"></i></a>
						</div>
					</div>
				</div>
				<div class="bottom">
					<div class="amount">
						<p><span>Total:</span><span>$500</span></p>
					</div>
					<div class="cart-button">
						<!--<a href="cart.php">Go To Cart</a>-->
						<a href="checkout.php">Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-sidebar-overlay"></div>
  </header>
