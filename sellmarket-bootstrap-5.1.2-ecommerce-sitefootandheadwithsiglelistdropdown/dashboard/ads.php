<?php include 'includes/header.php';?>


<section class="ads-section">
	<div class="container-fluid">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-ads-tab" data-bs-toggle="pill" data-bs-target="#ads-tab" type="button" role="tab">Ads</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-favorite-tab" data-bs-toggle="pill" data-bs-target="#favorite-tab" type="button" role="tab">Favorites</button>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<!-- ADS TAB BODY START -->
			<div class="tab-pane fade show active" id="ads-tab" role="tabpanel" >
				<div class="table-responsive">
				<table id="mytable"  class="table  data-table1" style="width: 100%;">
                   <thead>
                      <tr>
                         <th>SKU</th>
                         <th>IMAGES</th>
                         <th>PRODUCT NAME</th>
                         <th>CREATED DATE</th>
                         <th>STATUS</th>
                         <th>OFFERS</th>
                         <th>PRICE</th>
                         <th><input type="checkbox" id="checkall" class="check-prop me-2 myinput" style="outline:1px solid #fff;" /> CHECk ALL </i></a></th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>00001</td>
                         <td class="img-box text-center"><img src="assets/images/cat-card-img-1.png"></td>
                         <td><p>Lorem Lipsum <span>Texas</span></p></td>
                         <td>November, 09, 20121</td>
                         <td>Active</td>
                         <td class="featured"> <p>Featured</p></td>
                         <td>$ 10.99</td>
                         <th><input type="checkbox" id="checkall" class="check-prop" style="outline:1px solid #fff;" /> <a href="#!"><i class="fas fa-ellipsis-h"></th>
                      </tr>
                       <tr>
                         <td>00002</td>
                         <td class="img-box text-center"><img src="assets/images/gen-card-img-8.png"></td>
                         <td><p>Lorem Lipsum <span>New York</span></p></td>
                         <td>November, 09, 20121</td>
                         <td>Active</td>
                         <td class="featured"> <p>Featured</p></td>
                         <td>$ 10.99</td>
                         <th><input type="checkbox" id="checkall" class="check-prop" style="outline:1px solid #fff;" /> <a href="#!"><i class="fas fa-ellipsis-h"></th>
                      </tr>
                      <tr>
                         <td>00003</td>
                         <td class="img-box text-center"><img src="assets/images/gen-card-img-4.png"></td>
                         <td><p>Lorem Lipsum <span>Dallas</span></p></td>
                         <td>November, 09, 20121</td>
                         <td>Deactive</td>
                         <td class="featured"> <p>Featured</p></td>
                         <td>$ 10.99</td>
                         <th><input type="checkbox" id="checkall" class="check-prop" style="outline:1px solid #fff;" /> <a href="#!"><i class="fas fa-ellipsis-h"></th>
                      </tr>
                      <tr>
                         <td>00004</td>
                         <td class="img-box text-center"><img src="assets/images/gen-card-img-5.png"></td>
                         <td><p>Lorem Lipsum <span>Texas</span></p></td>
                         <td>November, 09, 20121</td>
                         <td>Active</td>
                         <td class="featured"> <p>Featured</p></td>
                         <td>$ 10.99</td>
                         <th><input type="checkbox" id="checkall" class="check-prop" style="outline:1px solid #fff;" /> <a href="#!"><i class="fas fa-ellipsis-h"></th>
                      </tr>
                   </tbody>
                </table>
                </div>
                <div class="bottom-btns">
                	<button class="featured-btn">ACTIVATE FEATURED AD $399/-</button>
                	<button class="featured-btn type-1">ACTIVATE AD $0.99/-</button>
                </div>
			</div>

			
			<!-- ADS TAB BODY END -->
			<div class="tab-pane fade" id="favorite-tab" role="tabpanel" >
				<!-- GEN PRODUCTS GRID -->
				<div class="row gen-product-row">
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-1.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">Dallas</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-2.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">New York</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-3.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">Houston</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-4.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">Dallas</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-5.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">California</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="gen-card">
							<a href="#!" class="img-box text-center">
								<img src="assets/images/cat-card-img-6.png" class="img-fluid">
							</a>
							<div class="text-box">
								<h1 class="title-price">
									<a href="#!" class="title">Lorem Product</a>
									<span class="price">$ 10.99</span>
								</h1>
								<p class="item-location">California</p>
								<div class="add-cart">
									<a href="#!">View More Detail</a>
									<a href="#!"><i class="far fa-heart"></i></a>
								</div>
							</div>
							<p class="featured-item">Featured</p>
						</div>
					</div>
				</div>
				<!-- GEN PRODUCTS GRID -->

			</div>
		</div>
	</div>
</section>


<section class="index-sec-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="text-box" data-aos="fade-right" data-aos-duration="1200">
					<h1 class="heading">Download Our App</h1>
					<h1 class="sub-heading">App is available <br> for free on app store</h1>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="store-btn">
						<a href="#!"><img src="assets/images/app-store-btn-img-2.png"></a>
						<a href="#!"><img src="assets/images/app-store-btn-img-1.png"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="img-box text-center" data-aos="fade-left" data-aos-duration="1200">
					<img src="assets/images/sec-3-img.png" alt="img" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>










<?php include 'includes/footer.php';?>

