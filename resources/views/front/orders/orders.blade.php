@extends('front.layout.layout')
@section('content')
<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-10">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a></li>
                            <li class="is-marked">

                                <a href="dash-my-order.html">My Account</a></li>
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
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                             @include('front.layout.account_sidebar')
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                    <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
                                    <!-- <form class="m-order u-s-m-b-30">
                                        <div class="m-order__select-wrapper">

                                            <label class="u-s-m-r-8" for="my-order-sort">Show:</label><select class="select-box select-box--primary-style" id="my-order-sort">
                                                <option selected>Last 5 orders</option>
                                                <option>Last 15 days</option>
                                                <option>Last 30 days</option>
                                                <option>Last 6 months</option>
                                                <option>Orders placed in 2018</option>
                                                <option>All Orders</option>
                                            </select></div>
                                    </form> -->
                                    <div class="m-order__list">
                                    	@foreach($orders as $order)
                                        <div class="m-order__get">
                                            <div class="manage-o__header u-s-m-b-30">
                                                <div class="dash-l-r">
                                                    <div>
                                                        <div class="manage-o__text-2 u-c-secondary">Order #{{$order->id}}</div>
                                                        <div class="manage-o__text u-c-silver">Placed on {{date("F j, Y,g:i a",strtotime($order->created_at)) }}</div>
                                                    </div>
                                                    <div>
                                                        <div class="dash__link dash__link--brand">

                                                            <a href="{{ url('user/orders/'.$order->id)}}">VIEW DETAILS</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="manage-o__description">
                                                <div class="description__info-wrap">
                                                    <div>
                                                        <span class="manage-o__badge badge--processing">{{$order->order_status}}</span>
                                                    </div>  
                                                </div>
                                                <div class="description__info-wrap">
                                                    <div>
                                                        <span class="manage-o__text-2 u-c-silver">Payment Method:
                                                            <span class="manage-o__text-2 u-c-secondary">{{$order->payment_method}}</span></span>
                                                    </div>
                                                    <div>
                                                        <span class="manage-o__text-2 u-c-silver">Total Items:
                                                            <span class="manage-o__text-2 u-c-secondary">{{ count($order->orders_products) }}</span></span>
                                                    </div>
                                                    <div>
                                                            <span class="manage-o__text-2 u-c-silver">Grand Total:

                                                                <span class="manage-o__text-2 u-c-secondary">GHC{{ $order->grand_total }}</span></span></div>
                                                    </div>
                                                </div>
                                        </div>
                                        @endforeach
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