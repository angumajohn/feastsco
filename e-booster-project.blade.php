@extends('layouts.main')

@section('content')
    <div class="wrapper home2">

        <!--Header Start-->
        @include('layouts.header')
        <div id="search">
            <button type="button" class="close">×</button>
            <form class="search-overlay-form">
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <!--Header End-->
        <section class="wf100 p100 inner-header">
            <div class="container">
                <h1>E-booster </h1>
                <ul>
                    <li><a href="#">Project</a></li>
                </ul>
            </div>
        </section>
        <section class="wf100 about">
            <!--About Txt Video Start-->
            <div class="about-video-section wf100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-text">
                                <h5>Feasts Consultants International Ltd</h5>
                                <h2>Winner of UCC E-Booster Project</h2>
                                <p><strong>Feasts Consultants International Ltd has been awarded the UCC E-Booster Project
                                        grant to upgrade an IT solution for underserved and unserved communities.</strong>
                                </p>
                                <p>Our goal is to create an innovative app that addresses the unique challenges faced by
                                    these communities. We aim to improve their access to essential services and enhance
                                    their quality of life through technology.</p>
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-video-img">
                                <img src="{{ asset('images/winning.jpg') }}" alt="E-Booster Project">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--About Txt Video End-->




            <!--Counting Section Start-->
            <section class="our-core-projects wf100 p80">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="h3-stitle">
                                <h1>Project Scope</h1>
                                <p>Currently Running in the Following Districts</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="core-projects-slider" class="owl-carousel owl-theme">
                                <!--Project Box Start-->
                                <div class="item">
                                    <div class="ocp-box">
                                        <div class="ocp-thumb">
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset('images/1.jpg') }}" alt="">
                                        </div>
                                        <div class="ser-txt">
                                            <h4> <a href="#">Luweero</a>
                                            </h4>
                                            <p>Empowering local farmers with sustainable agricultural practices</p>
                                            <br>
                                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Box End-->
                                <!--Project Box Start-->
                                <div class="item">
                                    <div class="ocp-box">
                                        <div class="ocp-thumb">
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset('images/2.jpg') }}" alt="">
                                        </div>
                                        {{-- <h5> <a href="#">Gomba</a> </h5>
                                        <p>Promoting eco-friendly waste management and recycling initiatives.</p> --}}
                                        <div class="ser-txt">
                                            <h4> <a href="#">Gomba</a>
                                            </h4>
                                            <p>Promoting eco-friendly waste management and recycling initiatives.</p>
                                            <br>
                                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Box End-->
                                <!--Project Box Start-->
                                <div class="item">
                                    <div class="ocp-box">
                                        <div class="ocp-thumb">
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset('images/3.jpg') }}" alt="">
                                        </div>

                                        <div class="ser-txt">
                                            <h4> <a href="#">Kayunga</a>
                                            </h4>
                                            <p>Enhancing water resource management and conservation efforts.</p>
                                            <br>
                                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Box End-->
                                <!--Project Box Start-->
                                <div class="item">
                                    <div class="ocp-box">
                                        <div class="ocp-thumb">
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset('images/4.jpg') }}" alt="">
                                        </div>

                                        <div class="ser-txt">
                                            <h4> <a href="#">Wakiso</a>
                                            </h4>
                                            <p>Implementing pollution control and environmental protection measures.</p>
                                            <br>
                                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Box End-->
                                <!--Project Box Start-->
                                <div class="item">
                                    <div class="ocp-box">
                                        <div class="ocp-thumb">
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset('images/2.jpg') }}" alt="">
                                        </div>

                                        <div class="ser-txt">
                                            <h4> <a href="#">Kampala</a>
                                            </h4>
                                            <p>Supporting urban agriculture and community development projects</p>
                                            <br>
                                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Box End-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Counting Section End-->

            <!--App Download Section Start-->
            <div class="choose-ecova wf100 p80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title-2">
                                <h5>Download Our App</h5>
                                <h2>Feasts Farms App</h2>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="eco-box">
                                        <span class="econ-icon"><i class="fas fa-mobile-alt"></i></span>
                                        <h5>Get it on the Play Store</h5>
                                        <p>Our app is available on the Play Store. Download now to start accessing our
                                            services and stay connected with the latest updates.</p>
                                        <a href="https://play.google.com/store/apps/details?id=com.feasts.farm_manager&pli=1"
                                            target="_blank"><img src="{{ asset('images/google.png') }}"
                                                alt="Play Store"></a>
                                        <a href="#"><img src="{{ asset('images/apple.png') }}"
                                                alt="Play Store"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="volunteer-form">
                                <div class="section-title">
                                    <h3>Join us Now</h3>
                                </div>
                                <ul>
                                    <li>
                                        <input type="text" class="form-control" placeholder="Your Name"
                                            aria-label="Your Name">
                                    </li>
                                    <li>
                                        <input type="text" class="form-control" placeholder="Email Address"
                                            aria-label="Email Address">
                                    </li>
                                    <li>
                                        <input type="text" class="form-control" placeholder="Contact"
                                            aria-label="Contact">
                                    </li>
                                    <li>
                                        <input type="submit" class="fsubmit" value="Signup to Join us">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--App Download Section End-->

            <!--Testimonials Start-->
            <section class="testimonials-section bg-white wf100 p80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h5>Testimonials</h5>
                                <h2>What People Say</h2>
                            </div>
                            <div id="testimonials" class="owl-carousel owl-theme">
                                <!--testimonials box start-->
                                <div class="item">
                                    <p>It is a long established idea that a user will not be distracted by the readable
                                        content of a app when looking at its layout. The point of using feasts farmsApp is
                                        that
                                        it has a more or less normal distubances.</p>
                                    <div class="tuser"> <img src="{{ asset('images/2.jpg') }}" alt="">
                                        <strong>Yiga
                                            Charlse</strong> App user </div>
                                </div>
                                <!--testimonials box End-->
                                <!--testimonials box start-->
                                <div class="item">
                                    <p>As opposed to using the app 'Content here, content here', making it look like
                                        readable
                                        English. Many Districts are using the app.</p>
                                    <div class="tuser"> <img src="{{ asset('images/3.jpg') }}" alt="">
                                        <strong>Richardson</strong> Kyeyune
                                    </div>
                                </div>
                                <!--testimonials box End-->
                                <!--testimonials box start-->
                                <div class="item">
                                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model
                                        sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                    <div class="tuser"> <img src="{{ asset('images/3.jpg') }}" alt="">
                                        <strong>Ann
                                            Bulya</strong> Kayunga Partner
                                    </div>
                                </div>
                                <!--testimonials box End-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Testimonials End-->


        </section>

        <!--Partner Logos Section Start-->
        <div class="partner-logos wf100 mb80">
            <div class="container">
                <div id="partner-logos" class="owl-carousel owl-theme">
                    <div class="item"><img src="images/ucc-web-logo.png" alt=""></div>
                    <div class="item"><img src="images/afdb-logo-en_0.webp" alt=""></div>
                    <div class="item"><img src="images/ucc-web-logo.png" alt=""></div>
                    <div class="item"><img src="images/afdb-logo-en_0.webp" alt=""></div>
                    <div class="item"><img src="images/ucc-web-logo.png" alt=""></div>
                    <div class="item"><img src="images/afdb-logo-en_0.webp" alt=""></div>
                    <div class="item"><img src="images/ucc-web-logo.png" alt=""></div>
                    <div class="item"><img src="images/afdb-logo-en_0.webp" alt=""></div>
                    <div class="item"><img src="images/ucc-web-logo.png" alt=""></div>
                    <div class="item"><img src="images/afdb-logo-en_0.webp" alt=""></div>
                </div>
            </div>
        </div>
        <!--Partner Logos Section End-->
        <!--Footer Start-->
        @include('layouts.footer')
        <!--Footer End-->
        <nav class="sidenav">
            <ul class="main">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="events-grid.html">Events</a></li>
                <li><a href="causes.html">Causes</a></li>
                <li><a href="projects-grid.html">Projects</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="shop-two.html">Shop</a></li>
                <li><a href="contact-one.html">Contact</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>
        <!--Footer End-->
    </div>
@endsection
