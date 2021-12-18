<?php include 'includes/header.php';?>


<section class="edit-profile-sec">
	<div class="gen-top-bar p-0">
		<h1 class="heading">Edit Profile</h1>
	</div>
	<form action="">
		<div class="edit-profile-wrap">
			<div class="edit-profile-gen-row row">
			    <h1 class="top-heading">Edit Profile</h1>
			    <div class="col-12 col-md-12 col-lg-12">
			          <!-- file-uploader-start -->
                             <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload">
                                            <i class="fas fa-pencil-alt"></i>
                                        </label>
                                    </div>
                                    <div class="avatar-preview">
                                         <div id="imagePreview" style="background-image: url(assets/images/seller-img.png)">
                                        </div>
                                    </div>
                            </div>
                     <!-- file-uploader-end -->
			    </div>
				<h1 class="top-heading">Basic Information</h1>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="name" placeholder="John Smith">
					</div>
					<div class="form-group">
						<textarea>About Me (Optional)</textarea>
						<p>0/200</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="desc-box">
						<h1 class="heading">Why is it important?</h1>
						<p class="desc">Lorem ipsum dolor sit amet, consecteturadipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consecteturadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="edit-profile-wrap">
			<div class="edit-profile-gen-row row">
				<h1 class="top-heading">Contact Information</h1>

				<div class="col-lg-6">
					<div class="form-group">
						<input type="tel" placeholder="Phone Number">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group edit-profile-check-boxes">
						<label>Make this visible on site?</label>
						<div class="check-box-wrap">
							<label class="container">Yes
								<input type="radio" checked="checked" name="fname">
								<span class="checkmark"></span>
							</label>
							<label class="container">No
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="email" placeholder="JhonSmith@gmail.com">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group edit-profile-check-boxes">
						<label>Make this visible on site?</label>
						<div class="check-box-wrap">
							<label class="container">Yes
								<input type="radio" checked="checked" name="fname-1">
								<span class="checkmark"></span>
							</label>
							<label class="container">No
								<input type="radio" name="fname-1">
								<span class="checkmark"></span>
							</label>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-6">
					<div class="form-group">
						<input type="tel" placeholder="Phone Number">
					</div>
					<div class="form-group">
						<input type="email" placeholder="JhonSmith@gmail.com">
					</div>
				</div>
				<div class="col-lg-6">
					<p class="desc-tagline">This is the number for buyers contacts, reminders, and other notifications.</p>
					<p class="desc-tagline">We won't reveal your email to anyone else nor use it to send you spam</p>
				</div> -->
			</div>
		</div>
		<div class="edit-profile-wrap">
			<div class="edit-profile-gen-row row">
				<h1 class="top-heading">Change Password</h1>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="password" placeholder="Old Password">
					</div>
					<div class="form-group">
						<input type="password" placeholder="New Password">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Re-enter Password">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="desc-box">
						<h1 class="heading">Lorem Lipsum</h1>
						<p class="desc">Lorem ipsum dolor sit amet, consecteturadipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consecteturadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="edit-profile-wrap">
			<div class="edit-profile-gen-row row">
				<h1 class="top-heading">Optional information</h1>
				<div class="col-lg-6">
					<div class="gen-info">
						<h1 class="heading">Facebook</h1>
						<p class="desc">Sign in with Facebook and discover your trusted connections to buyers</p>
					</div>
					<div class="gen-info">
						<h1 class="heading">Goolge</h1>
						<p class="desc">Connect your Sell Sell Market  account to your Google account for simplicity and ease</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="connect-btns">
						<button>Connect</button>
						<button>Disconnect</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="edit-profile-gen-row">
		<div class="bottom-btns">
			<button class="discard-btn">Discard</button>
			<button class="save-btn">Save changes</button>
		</div>
	</form>
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

