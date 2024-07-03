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
        <!--Slider Start-->
        <section id="home-slider" class="owl-carousel owl-theme wf100">
            <div class="item">
                <div class="slider-caption h2slider">
                    <div class="container">
                        <strong>Welcome to </strong>
                        <h1>Feasts</h1>
                        <p>Consultants International Ltd</p>
                        <a href="#" class="active">Find Out More</a>
                        <a href="#">Join us Now</a>
                    </div>
                </div>
                <img src="images/1.jpg" alt="" />
            </div>
            <div class="item">
                <div class="slider-caption h2slider">
                    <div class="container">
                        <strong>EMPOWERING ,
                            </span> </strong>
                        <h1>GROWTH</h1>
                        <p><strong>grow with</strong> feasts consultants</p>
                        <a href="#" class="active">Find Out More</a>
                        <a href="#">Join us Now</a>
                    </div>
                </div>
                <img src="images/2.jpg" alt="" />
            </div>
            <div class="item">
                <div class="slider-caption h2slider">
                    <div class="container">
                        <strong>DRIVING </strong>
                        <h1>SUCCESS</h1>
                        <p>Now <strong>it isn' too late</strong> for us...</p>
                        <a href="#" class="active">Find Out More</a>
                        <a href="#">Join us Now</a>
                    </div>
                </div>
                <img src="images/4.jpg" alt="" />
            </div>
        </section>
        <!--Slider End-->
        <!--Service Area Start-->
        <section class="services-area wf100">
            <div class="container">
                <ul>
                    <!--box  start-->
                    <li>
                        <div class="sinfo">
                            <div class="fa-icon-circle"><i class="fa fa-layer-group"></i></div>
                            <h6>Formidable</h6>
                            <p>Formidable Expertise</p>
                        </div>

                    </li>
                    <!--box  end-->
                    <!--box  start-->
                    <li>
                        <div class="sinfo">
                            <div class="fa-icon-circle"><i class="fa fa-users"></i></div>
                            <h6>Efficiency</h6>
                            <p>Efficiency Solutions</p>
                        </div>
                    </li>
                    <!--box  end-->
                    <!--box  start-->
                    <li>
                        <div class="sinfo">
                            <div class="fa-icon-circle"><i class="fa fa-handshake"></i></div>
                            <h6>Accountable</h6>
                            <p>Personal Accountability</p>
                        </div>
                    </li>
                    <!--box  end-->
                    <!--box  start-->
                    <li class="active">
                        <div class="sinfo">
                            <div class="fa-icon-circle"><i class="fa fa-layer-group"></i></div>
                            <h6>Solution Provider</h6>
                            <p>Solution to world problems</p>
                        </div>
                    </li>
                    <!--box  end-->
                    <!--box  start-->
                    <li>
                        <div class="sinfo">
                            <div class="fa-icon-circle"><i class="fa fa-clock"></i></div>
                            <h6>Timeliness</h6>
                            <p>Sustainablilty</p>
                        </div>
                    </li>
                    <!--box  end-->
                </ul>
            </div>
        </section>
        <!--Service Area End-->
        <!--About Section Start-->
        <section class="home2-about wf100 p100 gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="video-img">

                            <img src="images/dr.png" height="100px" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="h2-about-txt">
                            <h3>About Company C.E.O</h3>
                            <h2>Our Team Leader.</h2>
                            <p>
                                Managing Director- Dr. Catherine Komugisha Tindiwensi
                                Dr. Catherine K. Tindiwensi holds a PhD focusing on Commercialization of Agriculture; a
                                Master of Business Administration (Entrepreneurship and Small Business Management) and a
                                Bachelor of Science in Agriculture.
                                She is a seasoned Agribusiness and SME development consultant with over 20 years of
                                consultancy experience and managing effective teams. Some of her notable clients include
                                the World Bank, UNDP, FAO, IFAD, UNHCR, Technoserve, CRS, SNV, NUFFIC, IGAD, EABC, PSFU,
                                UMA, PIBID and NAADS among others. At Feasts Consultants International, Catherine heads
                                a team of vibrant, intelligent professionals that are committed to deliver the promised
                                value.
                            </p>
                            <a class="aboutus" href="#">More About us</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--About Section End-->
        <!--Urgent Causes Start-->
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
        <!--Why you Need to Choose Ecova Start-->
        <div class="choose-ecova wf100 p80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title-2">
                            <h5>Why you Need to</h5>
                            <h2>Choose Feasts</h2>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="eco-box">
                                    <span class="econ-icon"><i class="far fa-handshake"></i></span>
                                    <h5> Become a Volunteer </h5>
                                    <p> Lorem ipsum dolor amet consectetur adipiscing elit, sed eiusmod tempor
                                        incididunt ut labore et dolore. </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="eco-box">
                                    <span class="econ-icon"><i class="far fa-money-bill-alt"></i></span>
                                    <h5> Send Donation </h5>
                                    <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id. </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="eco-box">
                                    <span class="econ-icon"><i class="fas fa-heart"></i></span>
                                    <h5> Affective Causes </h5>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of
                                        itself, because it is pain.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="eco-box">
                                    <span class="econ-icon"> <i class="fas fa-coffee"></i> </span>
                                    <h5> Fund Raising </h5>
                                    <p>Who has any right to find fault with a man who chooses to enjoy a pleasure that
                                        has no annoying consequences. </p>
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
        <!--Urgent Causes End-->
        <!--Current Projects Start-->
        <!--About Section Start-->
        <section class="home-about wf100 p80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-txt">

                            <h3>Our Strategic Direction</h3>
                            <h4>VISION</h4>
                            <p>To create a profitable and competitive agro-industrial sector, empower the private
                                sector, and foster a vibrant rural economy.</p>
                            <h4>MISSION</h4>
                            <p>We provide unparalleled technical assistance, innovative solutions, and cutting-edge
                                technologies to drive agro-industrialization, facilitate private sector development, and
                                promote sustainable rural economic growth.</p>
                            <h4>OBJECTIVES</h4>
                            <p>1. <strong>Catalyzing Growth:</strong> We tackle challenges head-on, armed with
                                expertise, resilience, and a determination to overcome obstacles.</p>
                            <p>2. <strong>Innovative Solutions:</strong> We pioneer services that revolutionize
                                productivity, offering visionary solutions to overcome development challenges in
                                agricultural logistics, infrastructure, and value chains.</p>
                            <p>3. <strong>Impactful Support:</strong> We stand at the forefront of development
                                initiatives, collaborating with government programs and aiding in humanitarian
                                emergencies. By providing essential inputs, tools, machinery, and technologies, we
                                enhance productivity and ensure effective service delivery.</p>
                            <ul>

                                <li><i class="fas fa-check"></i> Formidable</li>
                                <li><i class="fas fa-check"></i> Efficiency </li>
                                <li><i class="fas fa-check"></i> Accountable </li>
                                <li><i class="fas fa-check"></i> Solution Provider</li>
                                <li><i class="fas fa-check"></i> Timeliness</li>
                                <li><i class="fas fa-check"></i> Sustainablilty </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-pic">
                            <div class="pic1">
                                <div id="pic-slider" class="owl-carousel owl-theme">
                                    <div class="item"><img src="images/serimg1.jpg" alt=""></div>
                                    <div class="item"><img src="images/serimg1.jpg" height="50px" alt="">
                                    </div>
                                    <div class="item"><img src="images/serimg1.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="pic2"><img src="images/serimg4.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->
        <!--Services Slider Start-->
        <section class="home-services wf100 p80bottom">
            <div class="row">
                <!--Services Box Start-->
                <div class="ser-col">
                    <div class="ser-box">
                        <div class="ser-thumb">
                            <a href="#"><i class="fas fa-link"></i></a>
                            <img src="images/serimg1.jpg" alt="">
                        </div>
                        <div class="ser-txt">
                            <h4> <a href="#">E-Booster Project</a> </h4>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <!--Services Box End-->
                <!--Services Box Start-->
                <div class="ser-col">
                    <div class="ser-box">
                        <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                                src="images/serimg2.jpg" alt=""></div>
                        <div class="ser-txt">
                            <h4> <a href="#">American Embassy</a>
                            </h4>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <!--Services Box End-->
                <!--Services Box Start-->
                <div class="ser-col">
                    <div class="ser-box">
                        <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                                src="images/serimg3.jpg" alt=""></div>
                        <div class="ser-txt">
                            <h4> <a href="#">D-prize Project</a>
                            </h4>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <!--Services Box End-->
                <!--Services Box Start-->
                <div class="ser-col">
                    <div class="ser-box">
                        <div class="ser-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                src="images/serimg4.jpg" alt=""></div>
                        <div class="ser-txt">
                            <h4> <a href="#">Green Pastures Conservation</a>
                            </h4>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <!--Services Box End-->
                <!--Services Box Start-->
                <div class="ser-col">
                    <div class="ser-box">
                        <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                                src="images/serimg5.jpg" alt=""></div>
                        <div class="ser-txt">
                            <h4> <a href="#">Senegal Project</a>
                            </h4>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <!--Services Box End-->
            </div>
            <div class="load-more text-center w-100"> <a href="#" class="lm">View More Work</a> </div>
        </section>
        <!--Current Projects End-->
        <!--News & Articles Start-->
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
