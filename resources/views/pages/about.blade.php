@extends('layouts.default')

@section('content')
<div class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        @include('includes.header')
        <!-- end header section -->
    </div>

    <!-- experience section -->

    <section class="experience_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="images/experience-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Best Experinced Freelancer Here
                            </h2>
                        </div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                        </p>
                        <div class="btn-box">
                            <a href="" class="btn-1">
                                Read More
                            </a>
                            <a href="" class="btn-2">
                                Hire
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end experience section -->


    <!-- about section -->

    <section class="about_section layout_padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-9 mx-auto">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="detail-box">
                <h2>
                    About Spering Company
                </h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                </p>
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- end about section -->

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
