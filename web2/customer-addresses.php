<?php include"inc/header.php"?>

<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">


    <!-- breadcrumb start  -->

    

    <!-- breadcrumb end  -->

<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">YOUR ADDRESSES</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">YOUR ADDRESSES</h1>
          
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <form action="#">
              <div class="block">
                <!-- Invoice Address-->
                <div class="block-header">
                  <h6 class="text-uppercase mb-0">Invoice address                    </h6>
                </div>
                <div class="block-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="fullname_invoice">Full Name</label>
                      <input class="form-control" type="text" name="fullname_invoice" placeholder="Joe Black" id="fullname_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="emailaddress_invoice">Email Address</label>
                      <input class="form-control" type="text" name="emailaddress_invoice" placeholder="joe.black@gmail.com" id="emailaddress_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="street_invoice">Street</label>
                      <input class="form-control" type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="city_invoice">City</label>
                      <input class="form-control" type="text" name="city_invoice" placeholder="City" id="city_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="zip_invoice">ZIP</label>
                      <input class="form-control" type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="state_invoice">State</label>
                      <input class="form-control" type="text" name="state_invoice" placeholder="State" id="state_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="phonenumber_invoice">Phone Number</label>
                      <input class="form-control" type="text" name="phonenumber_invoice" placeholder="Phone Number" id="phonenumber_invoice">
                    </div>
                    <div class="form-group col-12 mt-3">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="show-shipping-address" type="checkbox" name="clothes-brand">
                        <label class="custom-control-label align-middle" for="show-shipping-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">Use a different shipping address</label>
                      </div>
                    </div>
                  </div>
                  <!-- /Invoice Address-->
                </div>
                <!-- Shippping Address-->
                <div class="collapse" id="shippingAddress" aria-expanded="false">
                  <div class="block">
                    <div class="block-header">
                      <h6 class="text-uppercase mb-0">Shipping address </h6>
                    </div>
                    <div class="block-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="form-label" for="street_shipping">Street</label>
                          <input class="form-control" type="text" name="street_shipping" placeholder="123 Main St." id="street_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="city_shipping">City</label>
                          <input class="form-control" type="text" name="city_shipping" placeholder="City" id="city_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="zip_shipping">ZIP</label>
                          <input class="form-control" type="text" name="zip_shipping" placeholder="Postal code" id="zip_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="state_shipping">State</label>
                          <input class="form-control" type="text" name="state_shipping" placeholder="State" id="state_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="phonenumber_shipping">Phone Number</label>
                          <input class="form-control" type="text" name="phonenumber_shipping" placeholder="Phone Number" id="phonenumber_shipping">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Shipping Address-->
                </div>
              </div>
              <div class="form-group mt-3 text-center">
                <button class="btn btn-outline-dark" type="submit"><i class="fa fa-cloud" aria-hidden="true"></i>Save changes</button>
              </div>
            </form>
              

          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="assets/img/profile/profile1.jpg"></a>
                <h5>Julie Svestkova</h5>
                <p class="text-muted text-sm mb-0">Ostrava, Czech republic</p>
              </div>
              <nav class="list-group customer-nav"><a class=" list-group-item d-flex justify-content-between align-items-center" href="customer-orders.php"><span>
                    <img src="assets/img/order.svg">
                    Orders</span>
                  <div class="badge badge-pill badge-dark font-weight-normal px-3">5</div></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-account.php"><span>
                    <img src="assets/img/profile.svg"> 
                    Profile</span></a><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-addresses.php"><span>
                    <img src="assets/img/address.svg"> 
                    Addresses</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="index.php"><span>
                    
                      <img src="assets/img/logout.svg"> 
                    Log out</span></a>
              </nav>
            </div>
          </div>
          <!-- /Customer Sidebar-->
        </div>
      </div>
    </section>




    <!-- instagram start -->

    <div class="instagram-area margin-top-75">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <div class="instagram-title margin-bottom-40">

                        <h4><span>@ <a href="#">FOLLOW</a></span> US ON INSTAGRAM</h4>

                        <h6>shop our instagram</h6>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="instagram-slider">

                        <div class="thumb">

                            <img src="assets/img/instagram/1.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/2.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/3.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/4.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/5.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/6.png" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- instagram end -->

    <script >

        

    </script>



<?php include"inc/footer.php"?>