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

        <!--Contact Start-->
        <section class="contact-page wf100 p80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form">
                            <h3>Feel Free to Contact us</h3>
                            <ul class="cform">
                                <li class="half pr-15">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" class="form-control" placeholder="Email">
                                </li>
                                <li class="half pr-15">
                                    <input type="text" class="form-control" placeholder="Contact">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </li>
                                <li class="full">
                                    <textarea class="textarea-control" placeholder="Message"></textarea>
                                </li>
                                <li class="full">
                                    <input type="submit" value="Contact us" class="fsubmit">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3989.739949562732!2d32.6168663!3d0.3591194!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x177dbbbe49232747%3A0x5dbb8dd3168d41d0!2sKisakye%20Business%20Centre%20869%20Naalya%20Road%20Kampala!3m2!1d0.3591194!2d32.6168663!5e0!3m2!1sen!2sug!4v1719703271104!5m2!1sen!2sug"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container contact-info">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Contact Information</h3>
                    </div>
                    <!--Contact Info Start-->
                    <div class="col-md-4">
                        <div class="c-info">
                            <h6>Address:</h6>
                            <p> Kisakye Business Centre 869 3rd Floor
                                P.O Box 112687 Naalya Road, Ntinda- Kampala </p>
                        </div>
                    </div>
                    <!--Contact Info End-->
                    <!--Contact Info Start-->
                    <div class="col-md-4">
                        <div class="c-info">
                            <h6>Contact:</h6>
                            <p><strong>Phone:</strong> 0393246820</p>
                            <p><strong>Fax:</strong> + 256-755297098</p>
                        </div>
                    </div>
                    <!--Contact Info End-->
                    <!--Contact Info Start-->
                    <div class="col-md-4">
                        <div class="c-info">
                            <h6>For More Information:</h6>
                            <p><strong>Email:</strong> info@feasts.co.ug</p>
                            <p>feastsconsultants@gmail.com</p>
                        </div>
                    </div>
                    <!--Contact Info End-->
                </div>
            </div>
        </section>
        <!--Contact End-->
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
