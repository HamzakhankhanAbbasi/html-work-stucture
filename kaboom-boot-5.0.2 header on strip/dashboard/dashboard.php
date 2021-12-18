<?php include 'inc/header.php'; ?>
<section class="dashboard-sec">
   <div class="row">
      <aside>
         <!-- <div class="side-logo">
            <a href="javascript:void(0)"><img src="assets/images/logo.png" class="img-fluid"></a>
            </div> -->
         <div class="user-profile">
            <div class="profile-image">
               <img src="assets/images/user-image.png" class="img-fluid">
            </div>
            <div class="user-name">
               <p>John Doe</p>
               <button type="button" class="gen-otline-btn mt-2">Pro Level</button>
            </div>
         </div>
         <div class="dashboard-links">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="assets/images/dash-icon1.png" alt="img" class="img-fluid"> Dashboard</a>
               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#viewProfile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="assets/images/dash-icon2.png" alt="img" class="img-fluid"> View My Profile</a>
               <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#editProfile" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="assets/images/dash-icon3.png" alt="img" class="img-fluid"> Edit My Profile</a>
               <a class="nav-link" id="v-pills-acc-settings-tab" data-toggle="pill" href="#acc-settings" role="tab" aria-controls="acc-settings" aria-selected="false"><img src="assets/images/dash-icon4.png" alt="img" class="img-fluid"> Account Settings</a>
               <a class="nav-link" id="v-pills-net-bubble-tab" data-toggle="pill" href="#net-bubble" role="tab" aria-controls="net-bubble" aria-selected="false"><img src="assets/images/dash-icon5.png" alt="img" class="img-fluid"> Network Bubble</a>
               <a class="nav-link" id="v-pills-contracts-tab" data-toggle="pill" href="#contracts" role="tab" aria-controls="contracts" aria-selected="false"><img src="assets/images/dash-icon6.png" alt="img" class="img-fluid"> Contracts</a>
               <a class="nav-link" id="v-pills-request-room-tab" data-toggle="pill" href="#request-room" role="tab" aria-controls="request-room" aria-selected="false"><img src="assets/images/dash-icon7.png" alt="img" class="img-fluid"> Request a Collab Room</a>
               <a class="nav-link" id="v-pills-payoutSettings-tab" data-toggle="pill" href="#payoutSettings" role="tab" aria-controls="payoutSettings" aria-selected="false"><img src="assets/images/dash-icon8.png" alt="img" class="img-fluid"> Payout Settings</a>
               <a class="nav-link" id="v-pills-manageProjects-tab" data-toggle="pill" href="#manageProjects" role="tab" aria-controls="manageProjects" aria-selected="false"><img src="assets/images/dash-icon9.png" alt="img" class="img-fluid"> Manage Projects</a>
               <a class="nav-link" id="v-pills-manageSetting-tab" data-toggle="pill" href="#manageSetting" role="tab" aria-controls="manageSetting" aria-selected="false"><img src="assets/images/dash-icon9.png" alt="img" class="img-fluid"> Manage Settings</a>
               <a class="nav-link" id="v-pills-savedItems-tab" data-toggle="pill" href="#savedItems" role="tab" aria-controls="savedItems" aria-selected="false"><img src="assets/images/dash-icon10.png" alt="img" class="img-fluid"> Saved Items</a>
               <a class="nav-link" id="v-pills-invoices-tab" data-toggle="pill" href="#invoices" role="tab" aria-controls="invoices" aria-selected="false"><img src="assets/images/dash-icon11.png" alt="img" class="img-fluid"> Invoices</a>
               <a class="nav-link" id="v-pills-disputes-tab" data-toggle="pill" href="#disputes" role="tab" aria-controls="disputes" aria-selected="false"><img src="assets/images/dash-icon12.png" alt="img" class="img-fluid"> Disputes</a>
               <a class="nav-link" id="v-pills-helpSupport-tab" data-toggle="pill" href="#helpSupport" role="tab" aria-controls="helpSupport" aria-selected="false"><img src="assets/images/dash-icon13.png" alt="img" class="img-fluid"> Help & Support</a>
               <a class="nav-link" id="v-pills-packages-tab" data-toggle="pill" href="#packages" role="tab" aria-controls="packages" aria-selected="false"><img src="assets/images/dash-icon14.png" alt="img" class="img-fluid"> Packages</a>
               <a class="nav-link" href="javascript:;"><img src="assets/images/dash-icon15.png" alt="img" class="img-fluid"> Logout</a>
            </div>
         </div>
      </aside>
      <div class="right-box-wrap">
         <div class="tab-content" id="v-pills-tabContent">
            <!-- Dashboard Tab -->
            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="v-pills-home-tab">01</div>
            <!-- View Profile Tab -->
            <div class="tab-pane fade" id="viewProfile" role="tabpanel" aria-labelledby="v-pills-profile-tab">02</div>
            <!-- Edit Profile Tab -->
            <div class="tab-pane fade" id="editProfile" role="tabpanel" aria-labelledby="v-pills-messages-tab">
               <!-- inneridetail-edit-profile-start -->
               <div class="container">
                  <!-- banner-image-start-->
                  <div class="row">
                      <div class="col-12 col-md-12 col-lg-12">
                         <!-- banner-image -->
                         <div class="profile-image-box">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" class="roundd" id="imageUploadban" accept=".png, .jpg, .jpeg">
                                        <label class="camera-img" for="imageUploadban"><img src="assets/images/camera.png"  class="img-fluid"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreviewban" style="background-image:url('assets/images/banner-1.png')"> </div>
                                    </div>
                                </div>
                       </div>
                         <!-- banner-image-end -->               
                      </div>
                  </div>
                  <!-- personal=info-start -->
                  <div class="personal-info">
                     <h1 class="personal-info1">Personal Info</h1>
                     <p class="personal-info2">Your Details</p>
                     <!-- file-uploader-start -->
                          <!-- banner-image -->
                          <div class="avatar-round-image">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" class="roundd" id="imageUploadNew" accept=".png, .jpg, .jpeg">
                                        <label class="camera-img" for="imageUploadNew"><img src="assets/images/camera.png"  class="img-fluid"></label>
                                    </div>
                                    <div class="avatar-previewrou">
                                        <div  id="imagePreviewNew" style="background-image:url('assets/images/round.png')"> </div>
                                    </div>
                                </div>
                                </div>
                         <!-- banner-image-end -->
                     <!-- file-uploader-end -->
                     <!-- form-start -->
                     <div class="form-wrap">
                        <div class="row">
                           <div class="col-12 col-md-6 col-lg-6">
                              <!-- <div class="label-1">
                                 <label>Full Name</label>
                                 </div> -->
                              <div class="field-1">
                                 <div class="text-label">
                                    <label>Full Name*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="First Name*">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1">
                                 <div class="text-label">
                                    <label>Last Name*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Last Name*">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1 ">
                                 <div class="text-label">
                                    <label>Your Display Name*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Display Name">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1  ">
                                 <div class="text-label">
                                    <label>Email Address*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Email*">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1 ">
                                 <div class="text-label">
                                    <label>Designation*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Designation">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1 ">
                                 <div class="text-label">
                                    <label>Job Title*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Title">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-3 mb-3">
                                 <div class="text-label">
                                    <label>Crafted Projects*</label>
                                 </div>
                                 <!-- <input type="text" placeholder="Last Name*"> -->
                                 <div class="crafted">
                                    <input type='file' />
                                 </div>
                                 <!-- <img id="blah" src="http://placehold.it/180" alt="your image" /> -->
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1 ">
                                 <div class="text-label">
                                    <label>Skills*</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Skills">
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-3">
                                 <div class="text-label">
                                    <label>Award and Certificate</label>
                                 </div>
                                 <div class="crafted">
                                    <input type='file' class="form-field mb-3"  />
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="field-1">
                                 <div class="text-label">
                                    <label>Experience</label>
                                 </div>
                                 <input type="text"  class="form-field mb-3" placeholder="Your Exprience">
                              </div>
                           </div>
                           <div class="col-12 col-md-12 col-lg-12">
                              <div class="text-label mt-2">
                                 <label>About Your Information </label>
                              </div>
                              <div class="field-textarea ">
                                 <textarea placeholder="Your Designation*" rows="7" cols="10"></textarea>
                              </div>
                           </div>
                           <div class="btn-wrap">                                    
                              <a href="#!" class="gen-otline-btn">Save & Submit </a>
                           </div>
                        </div>
                        <!-- form-wrap-second-row -->
                        <!-- form-wrap-second-row-end -->
                     </div>
                     <!-- form-end -->
                  </div>
                  <!-- personal-info-end -->
               </div>
               <!-- innnerdettail-edt-profile-end -->
               <!-- Edit Profile-tab-end -->
               <!-- 03 -->
            </div>
            <!-- Account Settings TAB -->
            <div class="tab-pane fade" id="acc-settings" role="tabpanel" aria-labelledby="v-pills-acc-settings-tab">
               <!-- account-setting-start -->
               <div class="account-wrap">
                  <p class="account-wrap-1 mb-2">Manage Account </p>
                  <p class="account-wrap-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                     printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining esse
                     ntially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                     Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                  <!-- form-start -->
                  <!-- form-start -->
                  <div class="form-wrap">
                     <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="field-1 mt-4">
                              <div class="text-label">
                                 <label>Password*</label>
                              </div>
                              <input type="password" class="form-field mb-3" placeholder="Enter Your Password*">
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="field-1 mt-4">
                              <div class="text-label">
                                 <label>Confirm-Password*</label>
                              </div>
                              <input type="password" class="form-field mb-3" placeholder="Confirm Your Password">
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="email-box1  mb-3"  data-toggle="tooltip" data-placement="top">
                              <p class="email-text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="email-box1 mb-3" >
                              <p class="email-text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <div class="switch-buttonBox mb-3">
                              <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" 
                                 autocomplete="off">
                                 <div class="handle"></div>
                              </button>
                              <span>Disable my account temporarily</span>
                           </div>
                        </div>
                        <div class="btn-wrap">                                    
                           <a href="#!" class="gen-otline-btn">Save Account Setting </a>
                           <a href="#!" class="gen-otline-btn del-btn">Delete Account Setting</a>
                        </div>
                     </div>
                     <!-- form-wrap-second-row -->
                     <!-- form-wrap-second-row-end -->
                  </div>
                  <!-- form-end -->
               </div>
               <!-- account-setting-end -->
               <!-- account-setting-tab-end -->
            </div>
            <!-- Network Bubble TAB -->
            <div class="tab-pane fade" id="net-bubble" role="tabpanel" aria-labelledby="v-pills-net-bubble-tab">
               <div class="networkWrap">
                  <div class="tab-heading mb-4">
                     <p class="black-heading">Create Network</p>
                     <span>Lorem Ipsum is simply dummy text</span>
                  </div>
                  <div class="row m-0">
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-1.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-2.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-3.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-1.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-1.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-2.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-3.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="profileBox">
                           <div class="profileFirstImg">
                              <img src="assets/images/seller-main-1.png" alt="profile" class="img-fluid">
                              <img src="assets/images/checked-tag.png" alt="tag" class="img-fluig tagImg">
                           </div>
                           <div class="profileInfo">
                              <div class="profilePicRating">
                                 <div class="onlineSeller">
                                    <span class="imgBg">
                                    <img src="assets/images/profile-pic.png" alt="profile image" class="img-fluid">
                                    </span>
                                    <label></label>
                                 </div>
                                 <div class="sellerProf">
                                    <p class="profileName">Sarah Doe</p>
                                    <label>Level 1 Seler</label>
                                 </div>
                              </div>
                              <p class="profileDetail">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                              <p class="rating"> <span><i class="fas fa-star"></i></span> <label>5.0</label> <label>(30)</label> </p>
                           </div>
                        </div>
                        <div class="profileCta text-center">
                           <a href="#!" class="gen-otline-btn"> <span><i class="fas fa-plus"></i></span> Add Network </a>
                        </div>
                     </div>
                  </div>
                  <div class="network-viewBtn">
                     <button type="button" class="gen-otline-btn">View More</button>
                  </div>
               </div>
            </div>
            <!-- Contracts TAB -->
            <div class="tab-pane fade" id="contracts" role="tabpanel" aria-labelledby="v-pills-contracts-tab">
               <!-- contract-tab-start -->
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <!-- heading-1-start -->
                     <p class="account-wrap-1 mt-4 mb-2">Contracts</p>
                     <p class="account-wrap-2  account-wrap-3 mb-4">Lorem Ipsum Dolar Lorem Ipsum.</p>
                     <!-- heading-1-start-end -->
                  </div>
                  <div class="col-12 col-md-6 col-lg-6">
                     <input type="text" class="form-field  mb-3" placeholder="Contract Title">
                  </div>
                  <div class="col-12 col-md-6 col-lg-6">
                     <input type="text" class="form-field  mb-3" placeholder="Contract Type">
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <p class="account-wrap-1 mt-2 mb-4">Parties</p>
                  </div>
                  <div class="col-12 col-md-4 col-lg-4">
                     <div class="par-forwrap">
                        <p class="account-wrap-2  account-wrap-4 mb-4"><span class="profile-icn"><i class="far fa-user"></i></span>Profile 1</p>
                        <form>
                           <div class="par-field-1">
                              <select class="contract-par-field mb-4">
                                 <option selected="selected">On Behalf Of</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                              </select>
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Representative Title">
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Representative Name">
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Email Address">
                           </div>
                        </form>
                        <div class="box-wrap">
                           <div class="box-card1 mb-4">
                              <img src="assets/images/document.png" class="img-fluid">
                              <div class="box-cardtext">
                                 <p class="box-text">Signature Will <br>Appear Here</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second-row -->
                  <div class="col-12 col-md-4 col-lg-4">
                     <div class="par-forwrap">
                        <p class="account-wrap-2  account-wrap-4 mb-4"><span class="profile-icn"><i class="far fa-user"></i></span>Profile 2</p>
                        <form>
                           <div class="par-field-1">
                              <select class="contract-par-field mb-4">
                                 <option selected="selected">On Behalf Of</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                              </select>
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Personal Title">
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Full Name">
                           </div>
                           <div class="par-field-2">
                              <input type="text" class="form-field  mb-3" placeholder="Email Address">
                           </div>
                        </form>
                        <div class="box-wrap">
                           <div class="box-card1 mb-4">
                              <img src="assets/images/document.png" class="img-fluid">
                              <div class="box-cardtext">
                                 <p class="box-text">Signature Will <br>Appear Here</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second-row-end -->
                  <!-- third-row-start -->
                  <div class="col-12 col-md-4 col-lg-4">
                     <div class="par-forwrap2">
                        <!-- drag-start -->
                        <DIV id="dropzone">
                           <DIV class="dropzone needsclick" id="demo-upload" action="/upload">
                              <DIV class="dz-message needsclick"> 
                                 <SPAN class="note needsclick">
                                 <i class="fas fa-cloud-upload-alt"></i>
                                 <span id="fileLabelText">
                                 Add file And Signatures<br>
                                 Drag and Drop
                                 </span>
                                 </SPAN>
                              </DIV>
                           </DIV>
                        </DIV>
                        <DIV id="preview-template" style="display: none;"></DIV>
                        <!-- drag-end -->
                     </div>
                  </div>
                  <!-- third-row-end -->
                  <div class="col-12 col-md-12 col-lg-12 p-0">
                     <div class="save-button btn-wrap btn-wrap-2  mt-2">
                        <div class="submit-butn">
                           <button type="submit" class="gen-otline-btn gen-otline-btn-send del-btn">Sign & Send</button>
                        </div>
                        <a href="#!" class="gen-otline-btn gen-otline-btn-send del-btn">Save to Draft</a>
                     </div>
                  </div>
               </div>
               <!-- document-row-start -->
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="document-wrap">
                        <p class="account-wrap-1  mb-2">My Documents</p>
                        <p class="account-wrap-2  account-wrap-3 mb-4">Lorem Ipsum Dolar Lorem Ipsum.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="document-box1 mb-4">
                        <div class="row">
                           <div class="col-12 col-md-5 col-lg-5">
                              <div class="title-wrap">
                                 <div class="title-img">
                                    <img src="assets/images/title-1.png" class="img-fluid">
                                 </div>
                                 <div class="document-text">
                                    <p class="document-text1">Document Title</p>
                                    <p class="document-text2">Lorem Ipsum is simply dummy text of the printing and 
                                       typesetting industry Lorem Ipsum has been the industry
                                    </p>
                                    <div class="document-tag">
                                       <span class="tag-div">2021</span>
                                       <span  class="tag-div">Company</span>
                                       <span  class="tag-div">+ Add Tags</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-3 col-lg-3">
                              <div class="tag-wrap">
                                 <div class="document-tag">
                                    <span class="tag-div-icn"><img src="assets/images/checked.png">3</span>
                                    <span  class="tag-div-icn"><img src="assets/images/thirt.png">13</span>
                                    <span  class="tag-div-icn"><img src="assets/images/view.png">view</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 col-lg-4">
                              <div class="tag-wrap">
                                 <div class="document-tagwrap">
                                    <p class="document-tag-content"><img src="assets/images/arrow.png" class="img-fluid"><i class="fas fa-lock"></i>Dummy Company LTD<br><span class="content-text">Lorem Ipsum</span></p>
                                    <div class="signed-btnwrap">
                                       <div class="save-button">
                                          <a href="#!" class="btn btn-danger btn-border  delete-btn "><img src="assets/images/dot.png" class="img-fluid">
                                          <span class="signed-text">Signed</span> </a>
                                       </div>
                                    </div>
                                    <div class="dot-icn">
                                       <span> <i class="fas fa-ellipsis-v"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- second-row-start -->
                           <!-- second-row-end -->
                        </div>
                     </div>
                  </div>
                  <!-- second-col-start -->
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="document-box1 mb-4">
                        <div class="row">
                           <div class="col-12 col-md-5 col-lg-5">
                              <div class="title-wrap">
                                 <div class="title-img">
                                    <img src="assets/images/document-2.png" class="img-fluid">
                                 </div>
                                 <div class="document-text">
                                    <p class="document-text1">Document Title</p>
                                    <p class="document-text2">Lorem Ipsum is simply dummy text of the printing and 
                                       typesetting industry Lorem Ipsum has been the industry
                                    </p>
                                    <div class="document-tag">
                                       <span class="tag-div">2021</span>
                                       <span  class="tag-div">Company</span>
                                       <span  class="tag-div">+ Add Tags</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-3 col-lg-3">
                              <div class="tag-wrap">
                                 <div class="document-tag">
                                    <span class="tag-div-icn"><img src="assets/images/checked.png">3</span>
                                    <span  class="tag-div-icn"><img src="assets/images/thirt.png">13</span>
                                    <span  class="tag-div-icn"><img src="assets/images/view.png">view</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 col-lg-4">
                              <div class="tag-wrap">
                                 <div class="document-tagwrap">
                                    <p class="document-tag-content"><img src="assets/images/arrow.png" class="img-fluid"><i class="fas fa-lock"></i>Dummy Company LTD<br><span class="content-text">Lorem Ipsum</span></p>
                                    <div class="signed-btnwrap">
                                       <div class="save-button">
                                          <a href="#!" class="btn btn-danger delete-btn btn-border Pending-btn"><img src="assets/images/yellow.png" class="img-fluid"><span class="signed-text">Pending</span></a>
                                       </div>
                                    </div>
                                    <div class="dot-icn">
                                       <span> <i class="fas fa-ellipsis-v"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- second-row-start -->
                           <!-- second-row-end -->
                        </div>
                     </div>
                  </div>
                  <!-- second-col-end -->
                  <!-- third-col-start -->
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="document-box1 mb-4">
                        <div class="row">
                           <div class="col-12 col-md-5 col-lg-5">
                              <div class="title-wrap">
                                 <div class="title-img">
                                    <img src="assets/images/title-1.png" class="img-fluid">
                                 </div>
                                 <div class="document-text">
                                    <p class="document-text1">Document Title</p>
                                    <p class="document-text2">Lorem Ipsum is simply dummy text of the printing and 
                                       typesetting industry Lorem Ipsum has been the industry
                                    </p>
                                    <div class="document-tag">
                                       <span class="tag-div">2021</span>
                                       <span  class="tag-div">Company</span>
                                       <span  class="tag-div">+ Add Tags</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-3 col-lg-3">
                              <div class="tag-wrap">
                                 <div class="document-tag">
                                    <span class="tag-div-icn"><img src="assets/images/checked.png">3</span>
                                    <span  class="tag-div-icn"><img src="assets/images/thirt.png">13</span>
                                    <span  class="tag-div-icn"><img src="assets/images/view.png">view</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 col-lg-4">
                              <div class="tag-wrap">
                                 <div class="document-tagwrap">
                                    <p class="document-tag-content"><img src="assets/images/arrow.png" class="img-fluid"><i class="fas fa-lock"></i>Dummy Company LTD<br><span class="content-text">Lorem Ipsum</span></p>
                                    <div class="signed-btnwrap">
                                       <div class="save-button">
                                          <a href="#!" class="btn btn-danger delete-btn btn-border"><img src="assets/images/dot.png" class="img-fluid"><span class="signed-text">Signed</span> </a>
                                       </div>
                                    </div>
                                    <div class="dot-icn">
                                       <span> <i class="fas fa-ellipsis-v"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- second-row-start -->
                           <!-- second-row-end -->
                        </div>
                     </div>
                  </div>
                  <!-- third-col-end -->
               </div>
               <!-- document-row-end -->
               <!-- contract-tab-end -->
            </div>
            <!-- Request a Collab Room TAB -->
            <div class="tab-pane fade" id="request-room" role="tabpanel" aria-labelledby="v-pills-request-room-tab">
               <div class="request-roomTab-wrap">
                  <div class="tab-heading mb-2">
                     <p class="black-heading">Request A Collab Room</p>
                     <span>Lorem Ipsum Dolar Lorem Ipsum</span>
                  </div>
                  <div class="request-roomBox mb-4">
                     <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                           <div class="request-video">
                              <img src="assets/images/video-img1.jpg" alt="img" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8">
                           <div class="requestRoom-content">
                              <div class="tab-heading mb-4">
                                 <p class="black-heading">Video Chat Room</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                              </div>
                              <ul class="listing">
                                 <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</li>
                                 <li>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</li>
                                 <li>dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</li>
                                 <li>qui officia deserunt mollit anim id est laborum.</li>
                              </ul>
                              <div class="request-btn">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Request Video Call</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="request-roomBox mb-4">
                     <div class="row">
                        <div class="col-12 col-md-8 col-lg-8">
                           <div class="requestRoom-content">
                              <div class="tab-heading mb-4">
                                 <p class="black-heading">White Board Presentation</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                              </div>
                              <ul class="listing">
                                 <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</li>
                                 <li>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</li>
                                 <li>dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</li>
                                 <li>qui officia deserunt mollit anim id est laborum.</li>
                              </ul>
                              <div class="request-btn">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Request Video Call</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                           <div class="request-video">
                              <img src="assets/images/video-img2.jpg" alt="img" class="img-fluid">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="request-roomBox mb-4">
                     <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                           <div class="request-video">
                              <img src="assets/images/video-img3.jpg" alt="img" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8">
                           <div class="requestRoom-content">
                              <div class="tab-heading mb-4">
                                 <p class="black-heading">Live Session</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                              </div>
                              <ul class="listing">
                                 <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</li>
                                 <li>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</li>
                                 <li>dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</li>
                                 <li>qui officia deserunt mollit anim id est laborum.</li>
                              </ul>
                              <div class="request-btn">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Request Video Call</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Payout Settings TAB -->
            <div class="tab-pane fade" id="payoutSettings" role="tabpanel" aria-labelledby="v-pills-payoutSettings-tab">
               <!-- debit-card-detail-start -->
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="document-wrap">
                        <p class="account-wrap-1  mb-2">Payout Settings</p>
                        <p class="account-wrap-2  account-wrap-3 mb-4">Choose your best Payments Methods.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-md-3 col-lg-3">
                     <div class="payment-cardwrap">
                        <a href="#">
                           <div class="method">
                              <img src="assets/images/visa.png" alt="stripe">
                           </div>
                        </a>
                        <a href="#">
                           <div class="method">
                              <img src="assets/images/paypal.png" alt="stripe">
                           </div>
                        </a>
                        <a href="#">
                           <div class="method">
                              <img src="assets/images/stripe.jpg" alt="stripe">
                           </div>
                        </a>
                        <a href="#">
                           <div class="method d-none">
                              <img src="assets/images/pay.png" alt="stripe">
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12 col-md-9 col-lg-9">
                     <div class="form-wrap-payment">
                        <form>
                           <p class="account-wrap-1">Card Information </p>
                           <div class="row">
                              <div class="col-12 col-md-12 col-lg-12">
                                 <input type="text" class="form-field  mt-4" placeholder="Enter Your Full Name">
                              </div>
                              <div class="col-12 col-md-6 col-lg-6">
                                 <input type="text" class="form-field  mt-4" placeholder="Enter Card Number">
                              </div>
                              <div class="col-12 col-md-6 col-lg-6">
                                 <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="expiry-detail mt-4">
                                          <span class="expiry-detail">Expiry Date</span>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="par-field-1">
                                          <select class="contract-par-field-sel mt-4">
                                             <option selected="selected">07</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="par-field-1">
                                          <select class="contract-par-field-sel mt-4">
                                             <option selected="selected">24</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- name-on-card -->
                              <div class="col-12 col-md-6 col-lg-6">
                                 <input type="text" class="form-field  mt-4" placeholder="name on Card">
                              </div>
                              <div class="col-12 col-md-6 col-lg-6">
                                 <!-- card-img-portion-start -->
                                 <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="expiry-detail mt-4">
                                          <span class="expiry-detail">Card CVV</span>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="par-field-tel">
                                          <input type="tel" class="form-field " max-length="3">
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                       <div class="par-field-1">
                                          <img src="assets/images/card.jpg" class="img-fluid">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- card-img-portion-end -->
                              </div>
                              <!-- name-on-card-end -->
                              <!-- city -->
                              <div class="col-12 col-md-6 col-lg-6 ">
                                 <input type="text" class="form-field mt-4" placeholder="City">
                              </div>
                              <div class="col-12 col-md-6 col-lg-6 ">
                                 <input type="text" class="form-field mt-4" placeholder="Postal Code">
                              </div>
                              <!-- city-end -->
                              <!-- address-start -->
                              <div class="col-12 col-md-12 col-lg-12">
                                 <input type="text" class="form-field mt-4" placeholder="Enter Your Address">
                              </div>
                              <!-- address-end -->
                              <!-- country-start -->
                              <div class="col-12 col-md-6 col-lg-6">
                                 <div class="par-field-1">
                                    <select class="contract-par-field mt-4">
                                       <option selected="selected">Select Your Country</option>
                                       <option>Lorem ipsum dolor sit amet</option>
                                       <option>Lorem ipsum dolor sit amet</option>
                                       <option>Lorem ipsum dolor sit amet</option>
                                    </select>
                                 </div>
                              </div>
                              <!-- country-end -->
                           </div>
                           <div class="row">
                              <div class="col-12 col-md-12 col-lg-12">
                                 <div class="switch-buttonBox mt-4">
                                    <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                       <div class="handle"></div>
                                    </button>
                                    <span>Agree to terms and conditions</span>
                                 </div>
                              </div>
                              <div class="col-12 col-md-12 col-lg-12 p-0">
                                 <div class="save-button btn-wrap btn-wrap-2  mt-2">
                                    <div class="submit-butn">
                                       <button type="submit" class="gen-otline-btn gen-otline-btn-send">Save now</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- debit-card-detail-end -->
               <!-- payout-setting -->
            </div>
            <!-- Manage Projects TAB -->
            <div class="tab-pane fade" id="manageProjects" role="tabpanel" aria-labelledby="v-pills-manageProjects-tab">
               <div class="manageProjects-wrap">
                  <div class="tab-heading mb-2">
                     <p class="black-heading">Post a job</p>
                     <span>Job description And Details.</span>
                  </div>
                  <form>
                     <div class="row m-0">
                        <div class="col-12 col-md-12 col-lg-12">
                           <input type="text" class="form-field mb-3" placeholder="Jon Title">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select Project Level</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select Job Duration</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select Freelancer Type</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select English Level</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Project Location Type</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Years Of Exprience preferred</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <input type="text" class="form-field mb-3" placeholder="Project Expiry Date (optional)">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <input type="text" class="form-field mb-3" placeholder="Project Deadline Date (optinal)">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <p class="black-heading mb-3">Prices</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select Job Type</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Advance Payment</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Minimum Price</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Maximum Price</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <p class="black-heading mb-3">Job Details</p>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <textarea class="form-field mb-4" placeholder="Description"></textarea>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <select class="form-field mb-4">
                              <option selected="selected">Skills Required</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <input type="text" class="form-field mb-3" placeholder="Selected Skills">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <div class="project-fileBox">
                              <div class="uploadFiles mb-3">
                                 <label for="files">Upload Relevant Project Files</label>
                                 <input id="files" type="file" multiple/>        
                              </div>
                              <div class="appendWrapper mb-3">
                                 <div id="sortableImgThumbnailPreview"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                           <div class="switch-buttonBox">
                              <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" 
                                 autocomplete="off">
                                 <div class="handle"></div>
                              </button>
                              <span>Show “Attachments” on job detail page</span>
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <select class="form-field mb-4">
                              <option selected="selected">Select Country</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                              <option>Lorem ipsum dolor sit amet</option>
                           </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                           <input type="text" class="form-field mb-3" placeholder="Your Address">
                        </div>
                     </div>
                     <div class="save-button">
                        <button type="submit" class="gen-otline-btn">Save Now</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- Manage Service TAB -->
            <div class="tab-pane fade" id="manageSetting" role="tabpanel" aria-labelledby="v-pills-manageSetting-tab">
               <!-- manage-project-grid-start -->
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <!-- heading-1-start -->
                     <p class="account-wrap-1 mt-4 mb-2">Manages Posting Projects</p>
                     <p class="account-wrap-2  account-wrap-3 mb-4">Posted Projects Edit And Delete.</p>
                     <!-- heading-1-start-end -->
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="table-responsive">
                        <table id="mytable"  class="table  data-table1">
                           <thead>
                              <tr>
                                 <th><input type="checkbox" id="checkall" class="check-prop" style="outline:1px solid #fff;" /></th>
                                 <th>Job Title</th>
                                 <th> Project Level</th>
                                 <th>Duration</th>
                                 <th>Type</th>
                                 <th>Expiry Date</th>
                                 <th>Deadline Country</th>
                                 <th>Status</th>
                                 <th>Created Date</th>
                                 <th></th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td><a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td><a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td><a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td><a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td><a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td>
                                    <a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td>Duran Clayton</td>
                                 <td>-</td>
                                 <td>2 month</td>
                                 <td>Silver</td>
                                 <td>30-June 2021</td>
                                 <td>25-June 2021</td>
                                 <td>Active</td>
                                 <td>22-June 2021</td>
                                 <td></td>
                                 <td>
                                    <a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                              </tr>
                              <tr >
                                 <td class="foot"><input type="checkbox" class="checkthis check-prop" /></td>
                                 <td class="foot">Duran Clayton</td>
                                 <td class="foot">-</td>
                                 <td class="foot">2 month</td>
                                 <td class="foot">Silver</td>
                                 <td class="foot">30-June 2021</td>
                                 <td class="foot">25-June 2021</td>
                                 <td class="foot">Active</td>
                                 <td class="foot">22-June 2021</td>
                                 <td class="foot"></td>
                                 <td>
                                     <a href="#" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <!--modal-start-->
                                <div class="modal disput-modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <p class="account-wrap-1">Edit Posting Project</p>
                                
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form class="needs-validation" novalidate>
                                     <div class="row">
                                      <div class="col-12 col-md-6 col-lg-6">   
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Job Title</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Your Job Title">
                                           </div>
                                     </div>
                                     <div class="col-12 col-md-6 col-lg-6 p-0">   
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Project Level</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Project Level">
                                           </div>
                                         
                                     </div>
                                     </div>
                                        <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">   
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Duration</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Duration">
                                           </div>
                                         
                                     
                                     </div> 
                                       <div class="col-12 col-md-6 col-lg-6 p-0">  
                                           <label class="label-head">Type</label>
                                       <select class="form-field">
                                          <option selected="selected">Type</option>
                                          <option>Silver</option>
                                          <option>Gold</option>
                                       </select>
                                    </div>
                                    </div>
                                       <div class="row">
                                         <div class="col-12 col-md-6 col-lg-6">
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Expiry Date</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Expiry Date">
                                           </div>
                                         
                                     </div>  
                                       <div class="col-12 col-md-6 col-lg-6 p-0">
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Deadline Country</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Deadline Country">
                                           </div>
                                         
                                     </div>
                                     </div>
                                       <div class="row">
                                       <div class="col-12 col-md-6 col-lg-6">
                                            <label class="label-head">Status</label>
                                       <select class="form-field">
                                          <option data-display="Status">Status</option>
                                          <option>Active</option>
                                          <option>Not-Active</option>
                                       </select>
                                    </div>
                                        <div class="col-12 col-md-6 col-lg-6 p-0">
                                         <div class="field-1">
                                              <div class="text-label">
                                                 <label class="label-head">Created Date</label>
                                              </div>
                                              <input type="text" class="form-field mb-3" placeholder="Created Date">
                                           </div>
                                         </div>
                                    
                                  </div>
                                   
                                    <button type="submit" class="gen-otline-btn del-btn modal-btn">Submit</button>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                        <!--modal-end-->
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- manage-project-grid-end -->
            </div>
            <!-- Saved Items TAB -->
            <div class="tab-pane fade" id="savedItems" role="tabpanel" aria-labelledby="v-pills-savedItems-tab">11</div>
            <!-- Invoices TAB -->
            <div class="tab-pane fade" id="invoices" role="tabpanel" aria-labelledby="v-pills-invoices-tab">
               <!-- Invoices-tab-start -->
               <p class="account-wrap-1 mt-4 mb-2">Invoices</p>
               <hr>
               <div class="invoices-wrap">
                  <div class="ivoice-1">
                     <p class="invoice-id  mt-2 mb-2">Order ID</p>
                  </div>
                  <div class="ivoice-1">
                     <p class="invoice-id mt-2 mb-2">Created Date</p>
                  </div>
                  <div class="ivoice-1">
                     <p class="invoice-id mt-2 mb-2">Amount</p>
                  </div>
                  <div class="ivoice-1">
                     <p class="invoice-id mt-2 mb-2">Action</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="invoice-boxwrap mt-4">
                        <span class="invoice-detail"><i class="far fa-file-image mb-2"></i>
                        <span class="invoice-text">  No order has been made Yet</span>
                        </span>
                     </div>
                  </div>
               </div>
               <!-- Invoices-tab-end -->
            </div>
            <!-- Disputes TAB -->
            <div class="tab-pane fade" id="disputes" role="tabpanel" aria-labelledby="v-pills-disputes-tab">
               <!--disputes-tab-start -->
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="dispute-wrap">
                        <p class="account-wrap-1 mt-4 mb-2">Disputes</p>
                         
                        <button type="button" class="gen-otline-btn del-btn modal-btn" data-toggle="modal" data-target="#exampleModal">
                           
                        Create Disputes
                        </button>
                     </div>
                     <!-- modal-start -->
                     <!-- boots -->
                     <div class="modal disput-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <p class="account-wrap-1">Create Disputes</p>
                                
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form class="needs-validation" novalidate>
                                    <div class="form-group">
                                       <p class="modal-text account-wrap-2  account-wrap-3  mb-4">You can only create a dispute against the cancelled projects/services.</p>
                                       <select class="form-field mb-4">
                                          <option selected="selected">Select project/service</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-field mb-4">
                                          <option selected="selected">Select reason</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                          <option>Lorem ipsum dolor sit amet</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <textarea class="form-field mb-4" rows="7" cols="7" placeholder="Add Description"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="gen-otline-btn del-btn modal-btn">Send Disputes</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="invoice-boxwrap mt-4">
                        <span class="invoice-detail"><i class="far fa-file-image mb-2"></i>
                        <span class="invoice-text">  No disputes have submitted yet</span>
                        </span>
                     </div>
                  </div>
               </div>
               <!--disputes-tab-end -->
            </div>
            <!-- Help & Support TAB -->
            <div class="tab-pane fade" id="helpSupport" role="tabpanel" aria-labelledby="v-pills-helpSupport-tab">
               <div class="helpSupport-wrap">
                  <div class="row">
                     <div class="col-12 col-md-6 col-lg-6">
                        <div class="helpSupport-box">
                           <div class="tab-heading mb-2">
                              <p class="black-heading">Account Security & Settings</p>
                              <span>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                              dolore magna aliqua aut enim ad minim veniamac quis nostrud 
                              exercitation ullamco laboris.</span>
                           </div>
                           <div class="accordion-wrap">
                              <div class="container">
                                 <div class="accordion" id="accordionExample">
                                    <div class="card">
                                       <div class="card-head" id="head-01">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-01" aria-expanded="false"
                                             aria-controls="coll-01">Ways to work online and earn money?</h2>
                                       </div>
                                       <div id="coll-01" class="collapse" aria-labelledby="head-01" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-02">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-02" aria-expanded="false"
                                             aria-controls="coll-02">Dolore Magna Aliqua Enim Ad Minim Veniam?</h2>
                                       </div>
                                       <div id="coll-02" class="collapse" aria-labelledby="head-02" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-03">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-03" aria-expanded="false"
                                             aria-controls="coll-03">
                                             Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua?
                                          </h2>
                                       </div>
                                       <div id="coll-03" class="collapse" aria-labelledby="head-03" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-04">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-04" aria-expanded="false"
                                             aria-controls="coll-04">
                                             Ways To Work Online And Earn Money?
                                          </h2>
                                       </div>
                                       <div id="coll-04" class="collapse" aria-labelledby="head-04" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-05">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-05" aria-expanded="false"
                                             aria-controls="coll-05">
                                             Dolore Magna Aliqua Enim Ad Minim Veniam?
                                          </h2>
                                       </div>
                                       <div id="coll-05" class="collapse" aria-labelledby="head-05" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-06">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-06" aria-expanded="false"
                                             aria-controls="coll-06">
                                             Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua?
                                          </h2>
                                       </div>
                                       <div id="coll-06" class="collapse" aria-labelledby="head-06" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-07">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-07" aria-expanded="false"
                                             aria-controls="coll-07">
                                             Ways To Work Online And Earn Money?
                                          </h2>
                                       </div>
                                       <div id="coll-07" class="collapse" aria-labelledby="head-07" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-08">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-08" aria-expanded="false"
                                             aria-controls="coll-08">
                                             Dolore Magna Aliqua Enim Ad Minim Veniam?
                                          </h2>
                                       </div>
                                       <div id="coll-08" class="collapse" aria-labelledby="head-08" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="card-head" id="head-09">
                                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#coll-09" aria-expanded="false"
                                             aria-controls="coll-09">
                                             Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua?
                                          </h2>
                                       </div>
                                       <div id="coll-09" class="collapse" aria-labelledby="head-09" data-parent="#accordionExample">
                                          <div class="card-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-6">
                        <div class="helpSupport-box">
                           <div class="tab-heading mb-2">
                              <p class="black-heading">Didn't Find Your Solution?</p>
                              <span>Ask your query feel free.</span>
                           </div>
                           <form>
                              <select class="form-field mb-4">
                                 <option selected="selected">Select Query Type</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                                 <option>Lorem ipsum dolor sit amet</option>
                              </select>
                              <textarea class="form-field mb-4" placeholder="Description"></textarea>
                              <div class="save-button">
                                 <button type="submit" class="gen-otline-btn">Save Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Packages TAB -->
            <div class="tab-pane fade" id="packages" role="tabpanel" aria-labelledby="v-pills-packages-tab">
               <div class="packages-wrap">
                  <div class="tab-heading mb-2">
                     <p class="black-heading">Our Packages</p>
                     <span>We Have Same Packages Here...</span>
                  </div>
                  <div class="row m-0">
                     <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="package-card">
                           <div class="package-price">
                              <p>Paltinum Pack
                                 <span>$90.00</span>
                              </p>
                           </div>
                           <div class="package-details">
                              <ul>
                                 <li>No of job (15)</li>
                                 <li>No of featured job (5)</li>
                                 <li>Banner Options</li>
                                 <li>Duration (365 Days)</li>
                              </ul>
                           </div>
                           <div class="package-cardFooter">
                              <div class="package-button mb-3">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Choose Plan</a>
                              </div>
                              <p>No hidden charges!</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="package-card">
                           <div class="package-price">
                              <p>Silver Pack
                                 <span>$30.00</span>
                              </p>
                           </div>
                           <div class="package-details">
                              <ul>
                                 <li>No of job (15)</li>
                                 <li>No of featured job (5)</li>
                                 <li>Banner Options</li>
                                 <li>Duration (365 Days)</li>
                              </ul>
                           </div>
                           <div class="package-cardFooter">
                              <div class="package-button mb-3">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Choose Plan</a>
                              </div>
                              <p>No hidden charges!</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="package-card">
                           <div class="package-price">
                              <p>Gold Pack
                                 <span>$60.00</span>
                              </p>
                           </div>
                           <div class="package-details">
                              <ul>
                                 <li>No of job (15)</li>
                                 <li>No of featured job (5)</li>
                                 <li>Banner Options</li>
                                 <li>Duration (365 Days)</li>
                              </ul>
                           </div>
                           <div class="package-cardFooter">
                              <div class="package-button mb-3">
                                 <a href="javascript:void(0)" class="gen-otline-btn">Choose Plan</a>
                              </div>
                              <p>No hidden charges!</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Tabs End -->
   </div>
</section>
<?php include 'inc/footer.php'; ?>