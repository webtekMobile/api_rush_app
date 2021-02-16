<?php include"inc/header.php"?>

    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex flex-column flex-md-row justify-content-md-between justify-content-center">
                        <h2 class="page-title">Shopping Cart</h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="collection.html">Shop</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quanity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img src="assets/img/shop/c1.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name">Men's Crew T-shirt</h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td>$29.00</td>
                                <td><input type="text" value="1"></td>
                                <td>$29.00</td>
                                <td>
                                    <div class="action">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img src="assets/img/shop/c2.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name">Men's Crew T-shirt</h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td>$29.00</td>
                                <td><input type="text" value="1"></td>
                                <td>$29.00</td>
                                <td>
                                    <div class="action">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img src="assets/img/shop/c3.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name">Men's Crew T-shirt</h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td>$29.00</td>
                                <td><input type="text" value="1"></td>
                                <td>$29.00</td>
                                <td>
                                    <div class="action">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img src="assets/img/shop/c4.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name">Men's Crew T-shirt</h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td>$29.00</td>
                                <td><input type="text" value="1"></td>
                                <td>$29.00</td>
                                <td>
                                    <div class="action">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-continue">Continue Shopping</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-clear">Clear Shopping Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <di class="col-xl-3 col-lg-4">
                    <div class="summary margin-top-20">
                        <h6 class="title">Summary</h6>
                        <h6 class="subtitle">Estimate Shipping and Tax</h6>
                        <p class="destination">Enter your destination to get a shipping estimate.</p>
                        <form action="#">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control cart-select">
                                    <option>United State</option>
                                    <option>Italy</option>
                                    <option>Bangladesh</option>
                                    <option>London</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>State/Province</label>
                                <select class="form-control cart-select">
                                    <option>Region/state</option>
                                    <option>Italy</option>
                                    <option>Bangladesh</option>
                                    <option>London</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>Zip / Postal Code</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Flat Rate</label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">Fixed: $5.00</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Shipping</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Order Total</p>
                                <p>$190.00</p>
                            </div>
                            <div class="form-group margin-top-20">
                                <label>Apply Discount Code</label>
                                <input type="text" placeholder="Enter discount code">
                            </div>
                        </form> 
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-checkout">Proceed To Checkout</a>
                        </div>
                        <h6 class="subtitle text-center">Checkout with Multiple Address</h6>
                    </div>
                </di>
            </div>
        </div>
    </div>
    <!-- cart area end  -->

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

<?php include"inc/footer.php"?>