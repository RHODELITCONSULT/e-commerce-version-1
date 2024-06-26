@extends('front.layout.layout')
@section('content')
<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="about.html">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== End - Section 3 ======-->
    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about">
                            <div class="about__container">
                                @if ($about)
                                <div class="">
                                    <h2 class="about__h2" align="center">Welcome to {{ $about->company_name }}!</h2>
                                    <div class="about__p-wrap">
                                        <p class="about__p">{!! $about->information !!}</p>
                                    </div>

                                    <a class="about__link btn--e-secondary" href="/" target="_blank">Shop Now</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->

    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="contact-o u-h-100">
                            <div class="contact-o__wrap">
                                <div class="contact-o__icon"><i class="fas fa-phone-volume"></i></div>

                                <span class="contact-o__info-text-1">LET'S HAVE A CALL</span>

                                <span class="contact-o__info-text-2">(+233) 244 491 802</span>

                                <span class="contact-o__info-text-2">(+233) 206 931 921</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="contact-o u-h-100">
                            <div class="contact-o__wrap">
                                <div class="contact-o__icon"><i class="fas fa-map-marker-alt"></i></div>

                                <span class="contact-o__info-text-1">OUR LOCATION</span>

                                <span class="contact-o__info-text-2">2-3, SSNIT EMPORIUM, AIRPORT CITY</span>

                                <span class="contact-o__info-text-2">ACCRA, GHANA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="contact-o u-h-100">
                            <div class="contact-o__wrap">
                                <div class="contact-o__icon"><i class="far fa-clock"></i></div>

                                <span class="contact-o__info-text-1">WORK TIME</span>

                                <span class="contact-o__info-text-2">5 Days a Week</span>

                                <span class="contact-o__info-text-2">From 8 AM to 5 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
</div>
<!--====== End - App Content ======-->
@endsection