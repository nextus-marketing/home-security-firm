@extends('layouts.frontend')
@section('title') Reliable Home Security Systems & CCTV Solutions | Home Security Firm
 @endsection
@section('content')
<style>
    @media (max-width: 1399px) {
    .error-content {
        margin: 50px 0 1px;
    }
}
</style>
<main class="site-content">
                <!-- ==================== -->
                <!-- slider-wrapper start -->
                <div class="slider-wrapper">
                    <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#mainSlider" data-slide-to="1"></li>
                            <li data-target="#mainSlider" data-slide-to="2"></li>
                        </ol>
                        <!-- /.carousel-indicators -->

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="item-inner" style="background-image: url(/frontend/assets/img/bg/01.jpg);">
                                    <div class="container h-100">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="slider-content">
                                                    <h1 data-animation="animate__animated animate__fadeInUp animD-1">Your Trusted Home Security Partner</h1>
                                                    <p data-animation="animate__animated animate__fadeInUp animD-2">Empowering homeowners with state-of-the-art security solutions for peace of mind and safety.</p>
                                                    <a href="tel:+15037146222" data-animation="animate__animated animate__fadeInUp animD-3" class="theme-btn">Connect Now<i class="icofont-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroling-lines">
                                            <span>
                                                <span data-parallax='{"y":750, "smoothness":45}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-550, "smoothness":55}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":250, "smoothness":65}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":650, "smoothness":25}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-450, "smoothness":45}'></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.carousel-item -->
                            <!-- <div class="carousel-item">
                                <div class="item-inner" style="background-image: url(/frontend/assets/img/bg/02.jpg);">
                                    <div class="container h-100">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="slider-content">
                                                    <h2 data-animation="animate__animated animate__fadeInUp animD-1">Safe Home And Office.</h2>
                                                    <p data-animation="animate__animated animate__fadeInUp animD-2">We provide CCTV surveillance cameras, personal and all kinds of related services for home, office, and industry.</p>
                                                    <a href="#0" data-animation="animate__animated animate__fadeInUp animD-3" class="theme-btn">All Services <i class="icofont-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroling-lines">
                                            <span>
                                                <span data-parallax='{"y":750, "smoothness":45}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-550, "smoothness":55}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":250, "smoothness":65}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":650, "smoothness":25}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-450, "smoothness":45}'></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.carousel-item -->
                            <!-- <div class="carousel-item">
                                <div class="item-inner" style="background-image: url(/frontend/assets/img/bg/03.jpg);">
                                    <div class="container h-100">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="slider-content">
                                                    <h2 data-animation="animate__animated animate__fadeInUp animD-1">Safe Home And Office.</h2>
                                                    <p data-animation="animate__animated animate__fadeInUp animD-2">We provide CCTV surveillance cameras, personal and all kinds of related services for home, office, and industry.</p>
                                                    <a href="#0" data-animation="animate__animated animate__fadeInUp animD-3" class="theme-btn">All Services <i class="icofont-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroling-lines">
                                            <span>
                                                <span data-parallax='{"y":750, "smoothness":45}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-550, "smoothness":55}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":250, "smoothness":65}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":650, "smoothness":25}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-450, "smoothness":45}'></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.carousel-item -->
                        </div>

                        <!-- Controls -->
                        <!-- <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                            <i class="icofont-double-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                            <i class="icofont-double-right"></i>
                        </a> -->
                    </div>
                </div>
                <!-- slider-wrapper end -->
                <!-- ================== -->

                <!-- ===================== -->
                <!-- feature-section start -->
                <div class="feature-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center overflow-hidden wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>Pioneering Home Security In Hillsboro, Oregon</h2>
                                    <p>Discover how our local expertise and innovative solutions work together to create a safer home environment for our community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-carousel">
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-money-bag"></i>
                                    <span>Affordable Rates</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-live-support"></i>
                                    <span>24/7 Support</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-chart-histogram-alt"></i>
                                    <span>Different Range</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-man-in-glasses"></i>
                                    <span>Experts & Staff</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-checked"></i>
                                    <span>Trustworthy</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-download"></i>
                                    <span>Online Backup</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- feature-section end -->
                <!-- =================== -->

                <!-- =================== -->
                <!-- about-section start -->
                <div class="about-section" id="about">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <h2>Our Story And Mission</h2>
                                    <h4>Home Security Firm has been serving Hillsboro with dedication, providing effective home security solutions tailored to individual needs.</h4>
                                    <p>
                                     Home Security Firm has been serving Hillsboro with dedication, delivering reliable, innovative, and affordable security solutions designed to protect what matters most. With years of experience, we focus on helping homeowners feel confident and secure through advanced technology and personalized service.
                                    </p>
                                    <a href="tel:+15037146222" class="theme-btn">Contact Us <i class="icofont-double-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="intro-gallery">
                                    <div class="tab-content" id="img-gallery">
                                        <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab-01">
                                            <figure>
                                                <img src="/frontend/assets/img/about/01.jpg" alt="Gallery Image" />
                                            </figure>
                                        </div>
                                        <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab-02">
                                            <figure>
                                                <img src="/frontend/assets/img/about/02.jpg" alt="Gallery Image" />
                                            </figure>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-03">
                                            <figure>
                                                <img src="/frontend/assets/img/about/03.jpg" alt="Gallery Image" />
                                            </figure>
                                        </div>
                                    </div>
                                    <ul class="about-gallery-list nav" id="about-imgs" role="tablist">
                                        <li>
                                            <a id="tab-01" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">
                                                <figure>
                                                    <img src="/frontend/assets/img/about/thumb/01.jpg" alt="about img-gallery" />
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" id="tab-02" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">
                                                <figure>
                                                    <img src="/frontend/assets/img/about/thumb/02.jpg" alt="about img-gallery" />
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="tab-03" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                                <figure>
                                                    <img src="/frontend/assets/img/about/thumb/03.jpg" alt="about img-gallery" />
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about-section end -->
                <!-- ================= -->

                <!-- ===================== -->
                <!-- service-section start -->
                <div class="service-section">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>Comprehensive Security Solutions For Homes</h2>
                                    <p>Enhance your home’s protection with high-definition cameras that provide clear, reliable monitoring day and night.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-area">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/assets/img/service/01.jpg" alt="Service Thumb" />
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Advanced Surveillance</a></h2>
                                            <p>State-of-the-art camera systems for complete visual security.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/assets/img/service/02.jpg" alt="Service Thumb" />
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Intrusion Detection</a></h2>
                                            <p>Comprehensive devices to prevent unauthorized access.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/assets/img/service/03.jpg" alt="Service Thumb" />
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Smart Home Integration</a></h2>
                                            <p>Seamlessly connect security with smart home devices.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/assets/img/service/04.jpg" alt="Service Thumb" />
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Environmental Monitoring</a></h2>
                                            <p>Safety monitoring for fire, carbon monoxide, and other hazards.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="tel:+15037146222" class="theme-btn">Call Now <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- service-section end -->
                <!-- =================== -->
                 <div class="footer-top">
                    <div class="container overflow-hidden">
                        <div class="call-to-action wow animate__animated animate__slow animate__slideInUp">
                            <h2>Secure Your Home Now</h2>
                            <a href="tel:+15037146222" class="theme-btn">Call for Support <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
            </div>
                <!-- ================== -->
                 <div class="about-section">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <h2>Why Choose Us</h2>
                                    <h4>Unmatched Quality and Reliability in Security</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="key-feature">
                                                <i class="fas fa-puzzle-piece"></i>
                                                <div class="feature-content">
                                                    <h3>Customized Solutions</h3>
                                                    <p>We create tailored security systems to fit your lifestyle, ensuring maximum protection for your home.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="key-feature">
                                                <i class="fas fa-screwdriver-wrench"></i>
                                                <div class="feature-content">
                                                    <h3>Expert Installation</h3>
                                                    <p>Our certified professionals guarantee flawless installation and ongoing support for all security systems.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="key-feature">
                                                <i class="fas fa-cloud"></i>
                                                <div class="feature-content">
                                                    <h3>Smart Technology</h3>
                                                    <p>Integrating cutting-edge technology for seamless home automation and enhanced security features.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="tel:+15037146222" class="theme-btn mt-5">Contact Us <i class="icofont-double-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="intro-gallery">
                                <div class="tab-content" id="img-gallery">
                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab-02">
                                        <figure style="border-radius: 12px; overflow: hidden; margin: 0;">
                                            <img src="/frontend/my-img/who-we-are.jpg" alt="Gallery Image" style="width:100%; height:auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ======================= -->
                <!-- testimony-section start -->
                <div class="testimony-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>What Our Clients Say</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="review-buttons">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                                <figure class="wow animate__animated animate__fadeInBottomRight">
                                                    <a href="#" data-review="1" class="review-btn active">
                                                        <img src="/frontend/assets/img/testimony/01.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-4 offset-4">
                                                <figure class="wow animate__animated animate__fadeInBottomLeft">
                                                    <a href="#" data-review="2" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/02.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-4 offset-4">
                                                <figure>
                                                    <a href="#" data-review="3" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/03.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                                <figure class="wow animate__animated animate__fadeInTopRight">
                                                    <a href="#" data-review="4" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/04.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-4 offset-4">
                                                <figure class="wow animate__animated animate__fadeInTopLeft">
                                                    <a href="#" data-review="5" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/05.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testimony-content">
                                        <div class="review-single active">
                                            <div class="review-inner overflow-hidden">
                                                <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                   Home Security Firm transformed my home into a safe haven, I’m so impressed!
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/01.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Allexa William</h3>
                                                        <span>Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                  Their team was professional, knowledgeable, and the installation was a breeze!
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/02.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Mark Davis</h3>
                                                        <span>Co-Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                    It has survived not only five an centuries typeset remaining essentially unchanged popular the release and more recent five and centurbut also these tesetng remaining essentially.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/03.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>David Brown</h3>
                                                        <span>UI/UX Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                    Protecting my rental properties has never been easier. Smart home integration saves time and gives tenants extra confidence in security.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/04.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Olivia Hernandez</h3>
                                                        <span>Realtor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                   I feel so much safer knowing my home is monitored 24/7. The installation was quick, the staff were friendly, and the system works flawlessly.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/05.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Samantha Lee</h3>
                                                        <span>Senior Technician</span>
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
                <!-- testimony-section end -->

      <div class="partners-section error-content" style=" background:#c9921e; background-image:url('/frontend/assets/img/bg/04.jpg'); background-size:cover; background-position:center; background-repeat:no-repeat;" id="contact">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                
                <div class="section-header text-white wow animate__animated animate__slow animate__fadeInUp">
                    <h2 style="font-size:40px; font-weight:700;">
                        Protect Your Home Today With Expert Solutions
                    </h2>
                    <p style="font-size:18px; margin-top:15px;">
                        Home Security Firm is dedicated to delivering innovative security solutions 
                        that cater to the needs of families and businesses in Hillsboro and surrounding areas.
                    </p>
                </div>

                <!-- Center Button -->
                <div>
                    <a href="tel:+15037146222">
                       Speak With an Expert <i class="icofont-double-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


                <!-- ===================== -->
            </main>
            
@endsection