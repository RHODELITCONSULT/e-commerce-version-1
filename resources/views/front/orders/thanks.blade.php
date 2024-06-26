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

                                <a href="index.html">Home</a></li>
                            <li class="is-marked">

                                <a href="about.html">Thanks</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about">
                            <div class="about__container">
                                <div class="about__info">
                                    <h2 class="about__h2">YOUR ORDER HAS BEEN PLACED SUCCESSFULLY!</h2>
                                    <div class="about__p-wrap">
                                        <p class="about__p">Your Order ID is {{
                                        	Session::get('order_id') }} and Grand Total is GHC {{ Session::get('grand_total') }}
                                        </p>
                                    </div>

                                    @if(!empty($_GET['order'])&&$_GET['order']=="check")
                                        <div class="about__p-wrap">
                                            <p class="about__p">Please send your Check amount GHC {{ Session::get('grand_total') }} to below  Address:<br>
                                                Rhodel IT Consult<br>
                                                2-3 SSNIT Emporium<br>
                                                Accra Airport City<br>
                                                Ghana<br>
                                                Check Name: Rhodel IT Consult
                                            </p>
                                        </div>
                                    @endif

                                     @if(!empty($_GET['order'])&&$_GET['order']=="bank")
                                        <div class="about__p-wrap">
                                            <p class="about__p">Please transfer amount GHC {{ Session::get('grand_total') }} to below  Bank Account:<br>
                                                Account Name: Rhodel IT Consult<br>
                                                Bank Name: EcoBank<br>
                                                Account Number: 191919191<br>
                                            </p>
                                        </div>
                                    @endif


                                    <a class="about__link btn--e-secondary" href="{{ url('/')}}" target="_blank">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->

</div>
<!--====== End - App Content ======-->
@endsection

<?php
// Session::forget('grand_total');
// Session::forget('order_id');
// Session::forget('couponCode');
// Session::forget('couponAmount');
?>