<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Eze Interior Lifestyles</title>
  <link rel="icon" href="assets/images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
  <link rel="stylesheet" href="assets/css/images-compare.css"/>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/aos.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <div class="container-fluid">
      <nav>
        <div class="logo">
          <a href="index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
        </div>
        <div class="menu">
          <ul class="mobile-nav">
            <li><a href="javascript:void(0)">How it works</a></li>
            <li><a href="javascript:void(0)">Pricing</a></li>
            <li><a href="javascript:void(0)">Style Quiz</a></li>
            <li><a href="javascript:void(0)">Design Ideas</a></li>
            <li><a href="javascript:void(0)">Blogs</a></li>
            <li><a href="javascript:void(0)">Gift card</a></li>
            <li><a href="javascript:void(0)" class="site-btn header-btn">Start Your Project</a></li>
          </ul>
          <a href="javascript:void(0)" class="site-btn header-mobile-btn">Start Your Project</a>
          <a href="javascript:void(0)" class="header-icons"><i class="fas fa-shopping-cart"></i></a>
          <a href="javascript:void(0)" class="header-icons"><i class="fas fa-user"></i></a>
          <button type="button" class="search-btn" onclick="openSearchHero()"><i class="fas fa-search"></i></button>
          <button type="button" class="mobile-toggle"><i class="fas fa-bars"></i></button>
        </div>
      </nav>
    </div>
  </header>
  <!-- Searchbar Modal onclick  -->

  <div id="FullScreenOverlay" class="overlaySearch">
    <span class="closebtn" onclick="closeSearchHero()" title="Close overlaySearch">×</span>
    <div class="overlay-content">
      <form action="">
        <div class="fieldWrapper">
          <input type="text" class="modalInput" placeholder="Search" name="search">
          <button type="submit" class="modalBtn"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>