<?php include"inc/header.php"?>

<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">


    <!-- breadcrumb start  -->

    

    <!-- breadcrumb end  -->

<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Your profile        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Your profile</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Maecenas sollicitudin. In rutrum. In convallis. Nunc tincidunt ante vitae massa. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Fusce dui leo, imperdiet in.</p></div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <div class="block mb-5">
              <div class="block-header"><strong class="text-uppercase">Change your password</strong></div>
              <div class="block-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="password_old">Old password</label>
                        <input class="form-control" id="password_old" type="password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="password_1">New password</label>
                        <input class="form-control" id="password_1" type="password">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="password_2">Retype new password</label>
                        <input class="form-control" id="password_2" type="password">
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-4">
                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-cloud" aria-hidden="true"></i>Change password</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="block mb-5">
              <div class="block-header"><strong class="text-uppercase">Personal details</strong></div>
              <div class="block-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="firstname">Firstname</label>
                        <input class="form-control" id="firstname" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="lastname">Lastname</label>
                        <input class="form-control" id="lastname" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="company">Company</label>
                        <input class="form-control" id="company" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="street">Street</label>
                        <input class="form-control" id="street" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="city">Company</label>
                        <input class="form-control" id="city" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="zip">ZIP</label>
                        <input class="form-control" id="zip" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="state">State</label>
                        <select class="form-control" id="state"></select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="country">Country</label>
                        <select class="form-control" id="country"></select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="phone">Telephone</label>
                        <input class="form-control" id="phone" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="text-center mt-4">
                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-cloud" aria-hidden="true"></i>Save changes</button>
                  </div>
                </form>
              </div>
            </div>
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
                  <div class="badge badge-pill badge-dark font-weight-normal px-3">5</div></a><a class=" active list-group-item d-flex justify-content-between align-items-center" href="customer-account.php"><span>
                    <img src="assets/img/profile.svg"> 
                    Profile</span></a><a class=" list-group-item d-flex justify-content-between align-items-center" href="customer-addresses.php"><span>
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