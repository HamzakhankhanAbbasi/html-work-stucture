<?php include 'includes/header-links.php';?>
<?php include 'includes/header.php';?>

<section class="payoutMethods">
    <div class="container-fluid">
            <div class="gen-top-bar text-center">
                <h1 class="heading">Payment Methods</h1>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="leftInnerHeadings">
                        <p class="title">Payment Settings</p>
                        <span class="subTitle">Choose your best Payments Methods.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="paymentMethodsList">
                        <div class="method">
                            <img src="assets/images/visa.png" alt="visa" class="visa img-fluid">
                        </div>
                        <div class="method">
                            <img src="assets/images/paypal.png" alt="paypal" class="img-fluid">
                        </div>
                        <div class="method">
                            <img src="assets/images/stripe.png" alt="stripe" class="img-fluid">
                        </div>
                        <div class="method">
                            <img src="assets/images/payoneer.png" alt="payoneer" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="paymentInfo">
                        <form action="">
                            <p class="titleLight mb-3">
                                Card Information 
                            </p>
                            <input type="text" placeholder="Enter Your Full Name" class="w-100 mb-4">
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-7 p-0">
                                    <input type="text" placeholder="Enter Card Number" class="w-100 mb-4">
                                </div>
                                <div class="col-12 col-md-12 col-lg-5 p-0">
                                    <div class="dateWrap mb-4">
                                        <label>Expire Date</label>
                                        <select name="" id="">
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                            <option value="">07</option>
                                            <option value="">08</option>
                                            <option value="">09</option>
                                            <option value="">10</option>
                                            <option value="">11</option>
                                            <option value="">12</option>
                                        </select>
                                        <select name="" id="">
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                            <option value="">07</option>
                                            <option value="">08</option>
                                            <option value="">09</option>
                                            <option value="">10</option>
                                            <option value="">11</option>
                                            <option value="">12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-7 p-0">
                                    <input type="text" placeholder="Name On Card" class="w-100 mb-4">
                                </div>
                                <div class="col-12 col-md-12 col-lg-5 p-0">
                                    <div class="dateWrap mb-4">
                                        <label>Card CVV</label>
                                        <input type="text" class="cvv">
                                        <span> <img src="assets/images/cvv.png" alt="img-fluid"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-7 p-0">
                                    <input type="text" placeholder="City" class="w-100 mb-4">
                                </div>
                                <div class="col-12 col-md-12 col-lg-5 p-0">
                                    <div class="dateWrap mb-4">
                                        <input type="text" placeholder="Postal Code" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <input type="text" placeholder="Enter Your Address" class="w-100 mb-4">
                            <div class="row m-0">
                                <div class="col-12 col-md-5 col-lg-6 p-0">
                                    <select name="" id="" class="w-100 mb-4">
                                        <option disabled selected>Select Your Country</option>
                                        <option value="">USA</option>
                                        <option value="">UK</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Agree to terms and conditions</label>
                            </div>
                            <button type="submit" class="load-more-btn">PAY NOW</button>

                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="allowedPayouts">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="leftInnerHeadings">
                            <p class="title">Your Payouts</p>
                            <span class="subTitle">Lorem Ipsum Dolar Lorem Ipsum copy</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-3 col-lg-3 mb-4">
                        <div class="paymentMethodsList">
                            <div class="method">
                                <img src="assets/images/paypal.png" alt="paypal" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 mb-4">
                        <div class="cardDetails">
                            <div class="accountTitle mb-4">
                                <p class="title">Account Title</p>
                                <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem ipsum has been the industry</p>
                            </div>
                            <div class="cardValidity mb-4">
                                <p class="title">Date & Time</p>
                                <p>Friday, 12 November 2021</p>
                            </div>
                            <div class="cardStatus mb-4">
                                <button class="active"> <span><i class="fas fa-circle"></i></span> Active </button>
                                <span class="editStatus">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-circle"></i>   
                                    <i class="fas fa-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-3 col-lg-3 mb-4">
                        <div class="paymentMethodsList">
                            <div class="method">
                                <img src="assets/images/stripe.png" alt="stripe" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 mb-4">
                        <div class="cardDetails">
                            <div class="accountTitle mb-4">
                                <p class="title">Account Title</p>
                                <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem ipsum has been the industry</p>
                            </div>
                            <div class="cardValidity mb-4">
                                <p class="title">Date & Time</p>
                                <p>Friday, 12 November 2021</p>
                            </div>
                            <div class="cardStatus mb-4">
                                <button> <span><i class="fas fa-circle"></i></span> Active </button>
                                <span class="editStatus">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-circle"></i>   
                                    <i class="fas fa-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-3 col-lg-3 mb-4">
                        <div class="paymentMethodsList">
                            <div class="method">
                                <img src="assets/images/payoneer.png" alt="payoneer" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 mb-4">
                        <div class="cardDetails">
                            <div class="accountTitle mb-4">
                                <p class="title">Account Title</p>
                                <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem ipsum has been the industry</p>
                            </div>
                            <div class="cardValidity mb-4">
                                <p class="title">Date & Time</p>
                                <p>Friday, 12 November 2021</p>
                            </div>
                            <div class="cardStatus mb-4">
                                <button class=""> <span><i class="fas fa-circle"></i></span> Active </button>
                                <span class="editStatus">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-circle"></i>   
                                    <i class="fas fa-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                

            </div>



    </div>
</section>







































<?php include 'includes/footer.php';?>
<?php include 'includes/footer-links.php';?>