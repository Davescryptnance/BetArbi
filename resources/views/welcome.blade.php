<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetArbi - HTML Template</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" class="logo" alt="logo">
                        </a> -->
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Login Registration start -->
    <div class="log-reg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="loginMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <ul class="nav log-reg-btn justify-content-around">
                                    <li class="bottom-area" role="presentation">
                                        <button class="nav-link" id="regArea-tab" data-bs-toggle="tab"
                                            data-bs-target="#regArea" type="button" role="tab" aria-controls="regArea"
                                            aria-selected="false">
                                            SIGN UP
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="head-area">
                                                    <h6 class="title">Login Direetly With</h6>
                                                    <div class="social-link d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-area">
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="regArea" role="tabpanel"
                                        aria-labelledby="regArea-tab">
                                        <div class="login-reg-content regMode">
                                            <div class="modal-body">
                                                <div class="head-area">
                                                    <h6 class="title">Register On BetArbi</h6>
                                                    <div class="social-link d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-area">
                                                <form action="{{ route('/welcome') }}" method="POST" enctype="multipart/form-data">
                                                   @csrf 
  <div class="row">
    <div class="col-12">
      <div class="single-input">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email Address">
      </div>
    </div>
  </div>
  <span class="btn-border w-100">
    <button class="cmn-btn w-100">SIGN UP</button>
  </span>
</form>

                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Registration end -->

    <!-- Banner Section start -->
    <section class="banner-section">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/coin-2.png" class="obj-1" alt="image">
                <img src="assets/images/winner-cup.png" class="obj-2" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/coin-1.png" class="obj-1" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-2" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-3" alt="image">
                        <img src="assets/images/coin-4.png" class="obj-4" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="main-content">
                                <div class="top-area section-text">
                                    <h4 class="sub-title">Bet & Win Today!</h4>
                                    <h1 class="title">BetArbi</h1>
                                    <p class="xlr">Introducing BetArbi, the premier arbitrage betting platform that gives you the edge in sports betting. With BetArbi, you can take advantage of the discrepancies in odds across different bookmakers and win big on every bet.</p>
                                </div>
                                <div class="bottom-area">
                                    <span class="btn-border">
                                        <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                            Get Start Now
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- Banner Section end -->

    <!-- About bitbetio start -->
    <section class="about-bitbetio">
        <div class="overlay pt-120 pb-120">
            <div class="shape-area">
                <img src="assets/images/crypto-fanus-1.png" class="obj-1" alt="image">
                <img src="assets/images/crypto-fanus-2.png" class="obj-2" alt="image">
            </div>
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-6">
                        <div class="image-area d-rtl left-side">
                            <img src="assets/images/about-bitbetio-image.png" alt="images" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <h5 class="sub-title">A Next-Level Sports Betting</h5>
                            <h2 class="title">A Revolution in Online Betting</h2>
                            <p>Our platform uses advanced algorithms to analyze odds from multiple bookmakers and find arbitrage opportunities in real-time. No more manually searching for bets, our platform does the hard work for you. Simply place your bets and watch your profits grow.</p>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About bitbetio end -->

    <!-- How it Works start -->
    <section class="how-it-works">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Get to Know</h5>
                            <h2 class="title">BetArbi</h2>
                            <p>Join the thousands of savvy bettors who are already waiting for BetArbi to maximize their winnings. With a user-friendly interface, 24/7 support, and a track record of consistent profits, BetArbi is the perfect tool for any sports bettor.</p>
                        </div>
                    </div>
                </div>
                
   
    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container pt-120">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="newsletter">
                        <div class="section-text text-center">
                            <h5 class="sub-title">Subscribe Us</h5>
                            <h3 class="title">For Newsletter</h3>
                            <p>Subscribe to our newsletter to receive all the latest news and updates</p>
                        </div>
                        <form action="index.html#">
                            <div class="form-group d-flex align-items-center">
                                <input type="text" placeholder="Enter your email Address">
                                <button><img src="assets/images/icon/arrow-right-2.png" alt="icon"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <div class="footer-bottom-area pt-120">
                <div class="row">
                    <!-- <div class="col-xl-12">
                        <div class="menu-item">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                            <ul class="footer-link">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="terms-conditions.html">Terms of Services</a></li>
                                <li><a href="privacy-policy.html">Privacy</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="copyright">
                            <div class="copy-area">
                                <p> Copyright © <a href="index.html">BetArbi</a> | Designed by
                                    <a href="https://themeforest.net/user/pixelaxis" class="auth">BBTS</a>
                                </p>
                            </div>
                            <div class="social-link d-flex align-items-center">
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/jquery.downCount.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>