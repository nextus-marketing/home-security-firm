<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preview.robertbiswas.com/html/truder// by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Dec 2025 15:23:56 GMT -->
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>@yield('title')</title>
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="shortcut icon" href="/frontend/my-img/favicon.png" />
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet" />

        <!-- css assets -->
        <link href="/frontend/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/frontend/assets/css/icofont.min.css" rel="stylesheet" />
        <link href="/frontend/assets/css/animate.css" rel="stylesheet" />
        <link href="/frontend/assets/css/mainmenu.css" rel="stylesheet" />
        <link href="/frontend/assets/css/magnific-popup.css" rel="stylesheet" />
        <link href="/frontend/assets/css/slick.min.css" rel="stylesheet" />
        <link href="/frontend/assets/css/style.css" rel="stylesheet" />
        <link href="/frontend/assets/css/responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="/frontend/assets/css/my.css">
    </head>

    <body>
        <!-- ================== -->
        <!-- page-wrapper start -->
        <div class="page-wrapper">
           <!-- Preloader -->
            <!-- <div class="preloader"></div> -->
            
            <!-- ============ -->
            <!-- header start -->
            <header class="main-header">
                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="container clearfix">

                        <div class="header-inner clearfix">
                            <div class="logo-outer">
                                <div class="logo"><a href="/"><img src="/frontend/my-img/logo.png" alt="logo" style="width:auto; height:55px;"></a></div>
                            </div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg ml-lg-auto mr-xl-auto">
                                <div class="navbar-header clearfix">
                                    <div class="logo"><a href="/"><img src="/frontend/my-img/logo.png" alt="logo" style="width:auto; height:55px;"></a></div>
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-one">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse navbar-collapse-one collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/#about">About</a></li>
                                        <li><a href="/#contact">contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Menu buttons-->
                            <div class="menu-button ml-55">
                                <a href="tel:+15037146222" class="theme-btn"><i class="icofont-ui-call"></i><span>+1 (503) 714-6222</span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Header Upper-->
            </header>
            <!-- header end -->
            <!-- ========== -->

            <!-- ================== -->
            <!-- site-content start -->
            @yield('content')
            <!-- site-content end -->
            <!-- ================ -->

            <!-- ============ -->
            <!-- footer start -->
            <footer>
                
                <!-- /.footer-top -->
                <div class="footer-middle">
                <div class="container">
                    <div class="row justify-content-between">

                        <!-- ABOUT + LOGO SECTION (Replaces 1st Contact Us) -->
                        <div class="col-xl-5 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <div class="logo"><a href="/"><img src="/frontend/my-img/logo.png" alt="logo" style="width:auto; height:55px;"></a></div>
                                </br>
                                <p>
                                <b>Home Security Firm</b> provides reliable, state-of-the-art home security solutions tailored to keep your family and property safe. Our expert team ensures seamless installation and ongoing support, giving you peace of mind every day.
                                </p>
                            </div>
                        </div>

                        <!-- QUICK LINKS -->
                        <div class="col-xl-3 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <h2>Quick Link</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/#about">About</a></li>
                                    <li><a href="/#contact">Contact</a></li>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-and-conditon">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- CONTACT US (Only one retained) -->
                        <div class="col-xl-3 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <h2>Contact Us</h2>
                                <div class="footer-contact">
                                    <p>
                                        <i class="icofont-location-pin"></i>
                                        <span>
                                            <a href="https://share.google/OqH8EpE8fr20y9zUL" target="_blank">
                                                973 NE Queens Ln, Hillsboro, OR 97124
                                            </a>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="icofont-ui-call"></i>
                                        <span>
                                            <a href="tel:+15037146222">+1 (503) 714-6222</a>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="icofont-email"></i>
                                        <span>
                                            <a href="mailto:info@homesecurityfirm.com">info@homesecurityfirm.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <!-- /.footer-middle -->
                <div class="footer-bottom">
                    <div class="container">
                        <p>Copyright © <span>2025 Home Security Firm</span> | All Rights Reserved.</p>
                    </div>
                </div>
                <!-- /.footer-bottom -->
            </footer>
            <!-- footer end -->
            <!-- ========== -->
        </div>
        <!-- page-wrapper end -->
        <!-- ================ -->
        

        <div class="scroll-to-top" data-target="html">
            <i class="icofont-arrow-up"></i>
        </div>
        <!-- /.back2Top button -->

        <style>
/* Floating Button */
.call-now-btn {
    position: fixed;
    left: 20px;
    bottom: 20px;
    background: #fb9a09;
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    animation: pulseBg 2s infinite ease-in-out;
    z-index: 999;
}

/* Background animation */
@keyframes pulseBg {
    0% { background-color: #fb9a09; }
    50% { background-color: #fb9a09; }
    100% { background-color: #fb9a09; }
}

/* SVG size */
.call-now-btn svg {
    width: 28px;
    height: 28px;
    fill: #fff;
}
</style>

<!-- Button -->
<a href="tel:+15037146222" class="call-now-btn">
    <!-- Phone SVG -->
    <svg viewBox="0 0 24 24">
        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 
                 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 
                 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 
                 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.24 1.01z"/>
    </svg>
</a>
{{-- Popup --}}

<!-- Flash Sale Popup -->
<div class="sale-popup" id="salePopup" style="display:none;">
  <div class="sale-popup-inner">
    <button class="sale-close" aria-label="Close">&times;</button>

    <div class="sale-left">
      <h2>FLASH<br><span>SALE</span></h2>
      <p>Don't miss out on exclusive home security offers!</p>
    </div>

    <div class="sale-right">
      <h2 class="sale-title">Free Monitoring</h2>
      <p class="sale-text">Get <strong class="highlights">3 Months FREE Monitoring</strong> for your home.</p>
      <p class="sale-subtext">Call now and secure your home with our limited-time offer.</p>
      <a href="tel:+18883707485" class="call-button"><i class='bx bx-phone'></i> Call Now +1-888-370-7485</a>
    </div>
  </div>
</div>

<style>
/* Overlay */
.sale-popup {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.65);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 99999;
  animation: fadeIn 0.4s ease;
}

/* Popup Box */
.sale-popup-inner {
  display: flex;
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0,0,0,0.3);
  max-width: 700px;
  width: 90%;
  position: relative;
  animation: slideUp 0.5s ease;
  font-family: 'Arial', sans-serif;
}

/* Close Button */
.sale-close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  color: #555;
  background: none;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}
.sale-close:hover { color: #ff4b4b; }

/* Left Section */
.sale-left {
  background: #fb9a09;
  flex: 1 1 45%;
  padding: 40px 30px;
  text-align: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.sale-left h2 {
  font-size: 3.5rem;
  font-weight: 900;
  color: #fff;
  margin-bottom: 10px;
}
.sale-left span {
  display: block;
  font-size: 2.5rem;
  color: #fff;
}
.sale-left p {
  font-size: 1rem;
  color: #fff;
  margin-top: 10px;
  line-height: 1.4;
}

/* Right Section */
.sale-right {
  flex: 1 1 55%;
  background: #ede8ff;
  padding: 50px 35px;
  text-align: center;
}
.sale-title {
  font-size: 3rem;
  font-weight: 900;
  color: #00235a;
  margin-bottom: 15px;
}
.sale-text {
  font-size: 1.1rem;
  font-weight: 600;
  color: #555;
  margin-bottom: 10px;
}
.sale-subtext {
  font-size: 0.95rem;
  color: #000000ff;
  margin-bottom: 25px;
}

/* Call Button */
.call-button {
  display: inline-block;
  background: #fb9a09;
  color: #fff;
  font-weight: 700;
  font-size: 1rem;
  padding: 12px 20px;
  border-radius: 8px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.call-button:hover {
  background: #e09627ff;
  transform: translateY(-3px);
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slideUp {
  from { transform: translateY(50px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

/* Responsive */
@media (max-width: 600px) {
  .sale-popup-inner {
    flex-direction: column;
    text-align: center;
  }
  .sale-left {
    padding: 30px 20px;
  }
  .sale-right {
    padding: 30px 20px;
  }
  .call-button {
    width: 100%;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Show popup after 2 seconds
  setTimeout(() => {
    document.getElementById("salePopup").style.display = "flex";
  }, 2000);

  // Close button
  document.querySelector(".sale-close").addEventListener("click", () => {
    document.getElementById("salePopup").style.display = "none";
  });

  // Close when clicking outside the popup box
  document.getElementById("salePopup").addEventListener("click", e => {
    if (e.target.id === "salePopup") {
      document.getElementById("salePopup").style.display = "none";
    }
  });
});
</script>



        <!-- js assets -->
        <script src="/frontend/assets/js/jquery-3.5.1.min.js"></script>
        <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/frontend/assets/js/jquery.parallax-scroll.js"></script>
        <script src="/frontend/assets/js/slick.min.js"></script>
        <script src="/frontend/assets/js/wow.min.js"></script>
        <script src="/frontend/assets/js/main.js"></script>
    </body>

<!-- Mirrored from preview.robertbiswas.com/html/truder// by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Dec 2025 15:24:12 GMT -->
</html>
