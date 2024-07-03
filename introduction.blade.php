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
        <!--Our Success Story Start-->
        <div class="our-success-story wf100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="story-title-bg"> <strong class="t1">Feasts</strong> <strong
                                class="t2">2+</strong> <strong class="t3">Years of
                                Services</strong>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title-2">
                            <h5>About our History</h5>
                            <h2>Our Success Story</h2>
                        </div>
                        <!--eco History Start-->
                        <div class="eco-history">
                            <div class="timeline-slider">
                                <div class="timeline-nav">

                                    <div><span><strong>2023 - 2024</strong></span></div>
                                    <div><span><strong>2025 - 2026</strong></span></div>
                                    <div><span><strong>2027 - 2028</strong></span></div>
                                    <!--
                                                              <div><span><strong>2009 - 2012</strong></span></div>
                                                              <div><span><strong>2012 - 2015</strong></span></div> -->

                                </div>
                                <div class="timeline">
                                    <!--Timeline Text Start-->
                                    <div>
                                        <div class="row">
                                            <div class=" col-4">
                                                <div class="timeline-box">
                                                    <h6>We Started</h6>
                                                    <p> In 2023, We tackle challenges head-on, armed with expertise,
                                                        resilience, and a determination to overcome obstacles.
                                                        We tackle challenges head-on, armed with expertise, resilience,
                                                        and...</p>
                                                </div>
                                            </div>
                                            <div class=" col-4">
                                                <div class="timeline-box">
                                                    <h6>Results of Hardwork</h6>
                                                    <p> We have a very strong group of our senior team members and
                                                        volunteers
                                                        projects are being completed in time Trust us with your proposal
                                                        complete account We pioneer
                                                        services that revolutionize.. </p>
                                                </div>
                                            </div>
                                            <div class=" col-4">
                                                <div class="timeline-box">
                                                    <h6>Project </h6>
                                                    <p> We stand at the forefront of development initiatives,
                                                        collaborating
                                                        with government programs and aiding in humanitarian emergencies.
                                                        By providing essential inputs, tools, machinery, and..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Timeline Text End-->


                                    <!--Timeline Text End-->
                                </div>
                            </div>
                        </div>
                        <!--Political History End-->
                    </div>
                </div>
            </div>
        </div>
        <!--Our Success Story End-->

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
