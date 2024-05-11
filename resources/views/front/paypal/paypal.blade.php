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

                                <a href="#">Payment</a></li>
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
                                    <h2 class="about__h2">YOUR ORDER HAS BEEN PLACED!</h2>
                                    <div class="about__p-wrap">
                                        <p class="about__p">Your Order is {{
                                        	Session::get('order_id') }} and Grand Total is GHC {{ Session::get('grand_total') }} ({{round(
                                                Session::get('grand_total')/83,2) }} USD)
                                        </p>
                                        <p>
                                            Please make payment to confirm your order
                                        </p>
                                        <p>
                                            <form action="{{ route('payment') }}" method="post">@csrf
                                                <input type="hidden" name="amount" value="{{round(
                                                Session::get('grand_total')/83,2) }}">
                                                <input type="image" src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_l.png" alt="Pay Now">
                                            </form>
                                        </p>
                                    </div>

                                    
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