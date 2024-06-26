<?php use App\Models\ContactUs; ?>
@extends('front.layout.layout')
@section('content')
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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

                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->



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
        <!--====== End - Section 3 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-area u-h-100">
                                <div class="contact-area__heading">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form class="contact-f" method="post" action="{{ route('message:us') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">
                                                <label for="c-name"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="text" id="c-name" name="name"
                                                    placeholder="Name (Required)" required />
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label for="c-email"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="email" id="c-email" name="email"
                                                    placeholder="Email (Required)" required />
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label for="c-subject"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="text" id="c-subject" placeholder="Subject (Required)"
                                                    name="subject" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">
                                                <label for="c-message"></label>
                                                <textarea class="text-area text-area--border-radius text-area--primary-style" name="message" id="c-message"
                                                    placeholder="Compose a Message (Required)" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn--e-brand-b-2" type="submit">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>

        <!--  -->
    </div>
    <!--====== End - App Content ======-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <script>
        @if (Session::has('success_message'))
            toastr.success("{{ Session::get('success_message') }}");
        @endif

        @if (Session::has('error_message'))
            toastr.error("{{ Session::get('error_message') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script>
@endsection
