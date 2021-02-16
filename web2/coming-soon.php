<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Share Grapes - Fashion Marketplace</title>
    <!-- favicon -->
    <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
    <!-- Vendor Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--Codingeek -->
    <link rel="stylesheet" href="https://codingeek.net/codingeek-js/codingeek.css"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- coming content start -->
    <div class="coming-area pb-5">
        <div class="coming-header text-center">
            <a href="index.html">
                <img src="assets/img/logo-white.png" alt="">
            </a>
        </div>
        <div class="coming-content margin-top-80 text-center pb-5">
            <h2>We are coming soon!</h2>
            <div id="clockdiv">
                <div>
                    <span class="days"></span>
                    <div class="text">Days</div>
                </div>
                <div>
                    <span class="hours"></span>
                    <div class="text">Hours</div>
                </div>
                <div>
                    <span class="minutes"></span>
                    <div class="text">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>
                    <div class="text">Seconds</div>
                </div>
            </div>
            <h6>We are finishing work on something wonderful. Stay in touch.</h6>
            <form>
                <div class="form-row align-items-center justify-content-center pb-5">
                  <div class="col-10 col-md-4">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="icon-email-subscribe"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email here">
                    </div>
                  </div>
                </div>
                
                <div class="btn-wrapper pb-5">
                    <a href="#" class="btn btn-notify">Notify me</a>
                </div>
            </form>
        </div>
        <div class="coming-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p>© Stoon 2020. Powered with <i class="fa fa-heart"></i> by <a href="#">Codingeek</a>.</p>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coming content end -->

    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <script>
        // countdown 
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
            };
        }
        
        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');
        
            function updateClock() {
            var t = getTimeRemaining(endtime);
        
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        
            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
            }
        
            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }
        
        var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);
    </script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
    <!-- codingeek -->
    <script src="assets/js/codingeek-link.js"></script>
    <script src="https://codingeek.net/codingeek-js/codingeek.js"></script>
</body>
</html>