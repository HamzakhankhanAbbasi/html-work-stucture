<?php include 'includes/header-links.php';?>

<section class="loginScreen signUpScreen">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 col-md-5 col-lg-5 p-0">
                <div class="leftWRap">
                    <span class="logoBorder">
                        <a href="#!">
                            <img src="assets/images/header-logo.png" alt="img">
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7 p-0">
                <div class="rightWrap">
                    <span class="logoBorder">
                        <a href="#!">
                            <img src="assets/images/header-logo.png" class="img-fluid" alt="img">
                        </a>
                    </span>
                    <div class="innerWrap">
                        <a href="#!" class="logo">
                            <img src="assets/images/login-logo.png" alt="logo">
                        </a>
                        <form action="">
                            <input type="text" class="field" placeholder="Your Name">
                            <input type="email" class="field" placeholder="Email address">
                            <input type="text" class="field" placeholder="Phone No">
                            <input type="password" class="field" placeholder="Password">
                            <input type="password" class="field" placeholder="Confirm Password">
                            <button type="submit" class="btn-gen mb-3">Sign Up</button>
                            <div class="remember">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">Remember me</label>
                            </div>
                        </form>
                        <div class="userActivities">
                            <p>Already have an account? <a href="login.php" class="red">Login</a></p>
                            <p class="forgotPass"> <a href="#!" data-bs-toggle="modal" data-bs-target="#forgotModal">Forgot Password?</a> </p>
                            <p class="socialLogin"> 
                                <a href="#!"> <img src="assets/images/fb-icon.png" class="img-fluid" alt="img"> </a> 
                                <a href="#!"> <img src="assets/images/insta-icon.png" class="img-fluid" alt="img"> </a> 
                                <a href="#!"> <img src="assets/images/apple-icon.png" class="img-fluid" alt="img"> </a> 
                                <a href="#!"> <img src="assets/images/google-icon.png" class="img-fluid" alt="img"> </a>  
                            </p>
                        </div>
                    </div>
                    <div class="copyRight text-center">
                        <p>© Copyright 2020 Sell Sell Market, All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Forgot Password Popup Starts -->
<div class="modal fade loginWays forgotPassword" id="forgotModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="companyProfile text-center">
					<a href="#home"><img src="assets/images/header-logo.png" alt="img"></a>
					<p class="email"><a href="#!"></a>SELL<span class="red">SELL</span>MARKET.COM</p>
					<p class="header-tagline">A Trusted Community of Buyers and Sellers</p>
				</div>
				<div class="forgotForm">
				    <form>
				        <label>Enter Your Email Address</label>
				        <input type="email" placeholder="Email Address"/>
				        <button type="submit">Submit</button>
				    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Forgot Password Popup Ends -->

<?php include 'includes/footer-links.php';?>