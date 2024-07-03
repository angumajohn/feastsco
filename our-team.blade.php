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

        <section class="wf100 team">
            <div class="team-grid team-small-grid p80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">Our Team</h1>
                        </div>
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr. Anguma John</h5>
                                    <p>IT Systems Admin</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr.Collin Eboku.</h5>
                                    <p>Project Coordinator</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5> Mr.Natuhereza Protus</h5>
                                    <p>Volunteer</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mrs. Cathy</h5>
                                    <p>C.E.O</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->

                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr. Ayebare Denis Tindiwensi</h5>
                                    <p>BDO</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr.Wasswa Vincent Zziwa</h5>
                                    <p>BDO</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Ms. Babirye Sarah</h5>
                                    <p>Finance&Admin</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mrs. Wanna Assumin</h5>
                                    <p>Technical Officer</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Box Start-->
                        <!--Team Box Start-->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr.Wasswa Vincent Zziwa</h5>
                                    <p>BDO</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Ms.Stellah Aguti</h5>
                                    <p>Technical Officer</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr.Ambrose A</h5>
                                    <p>Acountant</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-box">
                                <img src="{{ asset('images/john.jpeg') }}" alt="">
                                <div class="team-info">
                                    <h5>Mr.Ssemakula Denis</h5>
                                    <p>Technical Officer</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="volunteers wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 rel">
                        <h1>Strong Volunteers</h1>
                        <a class="bav" href="#">Become a Volunteer</a>
                     </div>
                  </div>
                  <div class="row">
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-1.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Johny Elite</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-2.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Mitchell</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-3.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Kelly Rog</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-4.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Mason Gray</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-5.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Collins Bell</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-6.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Thomas Lee</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-7.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Smith Hill</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-8.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Murphy Shaw</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-9.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Richard Cox</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-10.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Palmer Mills</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-11.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Beth Butler</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                     <!--Team Box Start-->
                     <div class="col-md-2">
                        <div class="vol-box">
                           <div class="vol-thumb"><img src="images/vol-12.jpg" alt=""></div>
                           <div class="vol-txt"> <strong>Clarke Davis</strong> </div>
                        </div>
                     </div>
                     <!--Team Box End-->
                  </div>
               </div>
            </div> --}}
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
