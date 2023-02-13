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
                                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/contact">Contact</a>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                               
                                <button type="button" class="cmn-btn reg" data-bs-toggle="modal"
                                    data-bs-target="#loginMod">
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
    <section class="banner-section inner-banner contact">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/contact-illus.png" class="contact-illu" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-10">
                            <div class="main-content">
                                <h1>Contact Us</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- Contact In start -->
    <section class="contact-section">
        <div class="overlay">
            <div class="container bg-area">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Fill up the form and our team will get back to you within 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="form-content">
                        <form action="{{ route('/welcome') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" placeholder="What's your name?">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <label for="email">Your email address</label>
                                            <input type="text" id="email" name="email" placeholder="What's your Email?">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <label for="phone">Phone</label>
                                            <input type="text" id="phone" name="phone" placeholder="(123) 480 - 3540">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" placeholder="Enter Your Subject?">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" placeholder="I would like to get in touch with you..." cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-10">
                                        <div class="btn-border w-100 mt-40">
                                            <button class="cmn-btn w-100">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact In end -->

    <!-- FAQs In start -->
    <section class="faqs-section faqs-page">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Frequently Asked Questions</h5>
                            <h2 class="title">If you have questions we have answer</h2>
                            <p>Answers for our most popular questions about sportsbetting, crypto, and bitbetio</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <ul class="nav" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn active" id="general-tab" data-bs-toggle="tab"
                                data-bs-target="#general" type="button" role="tab" aria-controls="general"
                                aria-selected="true">general</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="affiliate-tab" data-bs-toggle="tab" data-bs-target="#affiliate"
                                type="button" role="tab" aria-controls="affiliate"
                                aria-selected="false">affiliate</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports"
                                type="button" role="tab" aria-controls="sports" aria-selected="false">sports</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="tournament-tab" data-bs-toggle="tab"
                                data-bs-target="#tournament" type="button" role="tab" aria-controls="tournament"
                                aria-selected="false">tournament</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-10">
                                <div class="faq-box">
                                    <div class="accordion" id="accordionFaqsGeneral">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralOne"
                                                    aria-expanded="false" aria-controls="collapseGeneralOne">
                                               What is arbitrage and how does your BetArbi software work?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralOne"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>Arbitrage in betting is when you place bets on all possible outcomes of a sporting event to guarantee a profit, regardless of the outcome. Our software helps people find good opportunities to make money from betting arbitrage. It works by looking at odds from different bookmakers and showing people when they can place bets to guarantee a profit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralTwo"
                                                    aria-expanded="false" aria-controls="collapseGeneralTwo">
                                                    What kind of arbitrage opportunities does BetArbi software support?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralTwo"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>"BetArbi software helps you find good chances to bet on things like sports games and other events."</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralThree"
                                                    aria-expanded="false" aria-controls="collapseGeneralThree">
                                                  How does BetArbi software determine which opportunities are profitable?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralThree"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>"BetArbi software looks at lots of different places where you can bet and figures out if you can bet on one thing in one place and bet on a different thing in another place to make more money."</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralFour"
                                                    aria-expanded="false" aria-controls="collapseGeneralFour">
                                                    Is BetArbi software automated or does it require manual input?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralFour"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>BetArbi software is automated, meaning it does the work for you by finding and showing you the best opportunities for betting arbitrage."</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralFive"
                                                    aria-expanded="false" aria-controls="collapseGeneralFive">
                                                    Can you provide any past performance data or case studies?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralFive"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>As BetArbi software is still in development, we don't have any past performance data or case studies yet. But we're working hard to make it the best it can be!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralsix">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralsix"
                                                    aria-expanded="false" aria-controls="collapseGeneralsix">
                                                    How does your software compare to other betting arbitrage software in the market?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralsix" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralsix"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>We think BetArbi software is unique and will stand out from other betting arbitrage software in the market because of its advanced algorithms and user-friendly interface.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralsaven">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralsaven"
                                                    aria-expanded="false" aria-controls="collapseGeneralsaven">
                                                    What kind of technical knowledge or experience is required to use BetArbi software?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralsaven" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralsaven"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>BetArbi software is designed to be easy to use, so you don't need any special technical knowledge or experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneraleight">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneraleight"
                                                    aria-expanded="false" aria-controls="collapseGeneraleight">
                                                    What is the cost of using BetArbi software and is there a free trial available?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneraleight" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneraleight"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>We haven't decided on the cost yet, but we're planning to offer a free trial so people can try it out and see if it's right for them.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneraleight">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneraleight"
                                                    aria-expanded="false" aria-controls="collapseGeneraleight">
                                                    How does BetArbi software handle security and data privacy?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneraleight" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneraleight"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>We take security and data privacy very seriously and will make sure that all information and data used by the software is kept safe and protected.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingGeneralNine">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseGeneralNight"
                                                    aria-expanded="false" aria-controls="collapseGeneralNight">
                                                    What kind of customer support is available for users of your software?
                                                </button>
                                            </h5>
                                            <div id="collapseGeneralNight" class="accordion-collapse collapse"
                                                aria-labelledby="headingGeneralNine"
                                                data-bs-parent="#accordionFaqsGeneral">
                                                <div class="accordion-body">
                                                    <p>We will provide customer support to help people with any questions or issues they have while using BetArbi software.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <form action="contact.html#">
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