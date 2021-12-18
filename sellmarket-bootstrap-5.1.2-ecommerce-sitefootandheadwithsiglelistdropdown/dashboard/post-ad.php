<?php include 'includes/header.php';?>


<section class="post-ad-section">
	<div class="gen-top-bar p-0">
		<h1 class="heading">Post Your Ad</h1>
	</div>
	<form action="">
		<div class="post-ad-wrap">
			<div class="post-ad-gen-row">
				<div class="form-group type-1">
					<label>Ad Tilte</label>
					<input type="text" placeholder="">
					<div class="desc-bar">
						<p>Mention the key features of your item (e.g. brand, model, age, type)</p>
						<p>0/70</p>
					</div>
				</div>
				<div class="form-group">
					<label>Category</label>
					<select>
						<option disabled>Select Category</option>
						<option>Cat-2</option>
						<option>Cat-3</option>
					</select>
				</div>
				<div class="form-group">
					<label>Sub Category</label>
					<select>
						<option disabled >Select Category</option>
						<option>Cat-2</option>
						<option>Cat-3</option>
					</select>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea></textarea>
					<p class="count">0/4096</p>
				</div>
				<div class="form-group">
					<label>Condition</label>
					<div class="condition-btns">
						<a href="#!">New</a>
						<a href="#!">Used</a>
					</div>
				</div>
			</div>
		</div>

		<div class="post-ad-wrap">
			<div class="post-ad-gen-row type-1">
				<div class="form-group type-2">
					<label>Enter Amount</label>
					<span class="enter-amout-wrap">
						<input type="number" placeholder="">
						<p>$ |</p>
					</span>
					
				</div>
				<div class="form-group type-3">
					<label>Negotiable Price</label>
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
		</div>


		<div class="post-ad-wrap">
			<div class="post-ad-gen-row">
				<div class="form-group type-1">
					<label>Title Image</label>
					<div class="uploard-img-box">
						<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
							<div class="dz-message needsclick"> 
								<span class="note needsclick">
									<span id="fileLabelText">
										<img src="assets/images/img-upload-icon.png">
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group type-1 m-0">
					<label>Upload Images</label>
					<div class="uploard-img-wrap">
						<div class="uploard-img-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="uploard-img-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>	
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>	
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>	
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>	
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>	
						<div class="uploard-img-box extra-box">
							<div class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
								<div class="dz-message needsclick"> 
									<span class="note needsclick">
										<span id="fileLabelText">
											<img src="assets/images/img-upload-icon.png">
										</span>
									</span>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>

		<div class="post-ad-wrap">
			<div class="post-ad-gen-row">
				<div class="form-group">
					<label>Enter Your Address</label>
					<select>
						<option>State</option>
						<option>State-1</option>
						<option>State-2</option>
						<option>State-2</option>
					</select>
				</div>
				<div class="form-group">
					<select>
						<option>City</option>
						<option>City-1</option>
						<option>City-2</option>
					</select>
				</div>
				<div class="form-group">
					<select>
						<option>Neighbourhood</option>
						<option>State-1</option>
						<option>State-2</option>
					</select>
				</div>
				<div class="form-group">
					<button class="post-btn">Post Now</button>
				</div>
			</div>
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

