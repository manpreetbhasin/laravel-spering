@extends('layouts.default')

@section('content')
    <div class="sub_page">

        <div class="hero_area">
            <!-- header section strats -->
            @include('includes.header')
            <!-- end header section -->
        </div>

        <!-- freelance section -->

        <section class="freelance_section layout_padding">
            <div id="accordion">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <div class="detail-box">
                                <div class="heading_container">
                                    <h2>
                                        Work Freelancer Has Done
                                    </h2>
                                </div>
                                <div class="tab_container">
                                    <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="img-box">
                                            <img src="images/f1.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                $250 Million
                                            </h5>
                                            <h3>
                                                Paid to Freelancers
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="img-box">
                                            <img src="images/f2.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                2 Million
                                            </h5>
                                            <h3>
                                                Paid Invoices
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="img-box">
                                            <img src="images/f3.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                700,000
                                            </h5>
                                            <h3>
                                                Worldwide Freelancer
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <div class="img-box">
                                            <img src="images/f4.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                98%
                                            </h5>
                                            <h3>
                                                Customer <br>
                                                Satisfaction Rate
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="img-box">
                                    <img src="images/freelance-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="img-box">
                                    <img src="images/freelance-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="img-box">
                                    <img src="images/freelance-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                                <div class="img-box">
                                    <img src="images/freelance-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end freelance section -->

        <!-- info section -->

        <section class="info_section ">
            <div class="info_container layout_padding-top">
                <div class="container">
                    <div class="info_top">
                        <div class="info_logo">
                            <img src="images/logo.png" alt="" />
                            <span>
              Spering
            </span>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/instagram.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="info_main">
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <div class="info_link-box">
                                    <h5>
                                        Useful Link
                                    </h5>
                                    <ul>
                                        <li class=" active">
                                            <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="">
                                            <a class="" href="about.html">About </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="work.html">Work </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="category.html">Category </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h5>
                                    Offices
                                </h5>
                                <p>
                                    Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
                                </p>
                            </div>

                            <div class="col-md-3 col-lg-2 offset-lg-1">
                                <h5>
                                    Information
                                </h5>
                                <p>
                                    Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
                                </p>
                            </div>

                            <div class="col-md-3  offset-lg-1">
                                <div class="info_form ">
                                    <h5>
                                        Newsletter
                                    </h5>
                                    <form action="">
                                        <input type="email" placeholder="Email">
                                        <button>
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-10 mx-auto">
                            <div class="info_contact layout_padding2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/location.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    Location
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/mail.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    demo@gmail.com
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/call.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    Call +01 1234567890
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- end info section -->
    </div>
@stop
