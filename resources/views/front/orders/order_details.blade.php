@php use App\Models\Product; @endphp 
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
                            <h1 class="dash__h1 u-s-m-b-30">Order Details</h1>
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="dash-l-r">
                                        <div>
                                            <div class="manage-o__text-2 u-c-secondary">Order #{{$orderDetails['id']}}</div>
                                            <div class="manage-o__text u-c-silver">Placed on {{date("F j, Y,g:i a",strtotime($orderDetails['created_at']));}}</div>
                                        </div>
                                        <div>
                                            <div class="manage-o__text-2 u-c-silver">Total:

                                                <span class="manage-o__text-2 u-c-secondary">GHC{{$orderDetails['grand_total']}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $total_price = 0 @endphp
                            @foreach($orderDetails['orders_products'] as $key => $product)
                            @php $total_price = $total_price + ($product['product_price'] * $product['product_qty']) @endphp
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="manage-o">
                                        <div class="manage-o__header u-s-m-b-30">
                                            <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                                                <span class="manage-o__text">Package {{$key+1}}</span></div>
                                        </div>
                                        <div class="dash-l-r">
                                            <div class="manage-o__text u-c-secondary">Placed on 20 Aug 2023</div>
                                            <div class="manage-o__icon"><i class="fas fa-truck u-s-m-r-5"></i>

                                                <span class="manage-o__text">Standard</span></div>
                                        </div>
                                        <div class="manage-o__timeline">
                                            <div class="timeline-row">
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="timeline-step">
                                                        <div class="timeline-l-i timeline-l-i--finish">

                                                            <span class="timeline-circle"></span></div>

                                                        <span class="timeline-text">Placed</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="timeline-step">
                                                        <div @if($orderDetails['order_status']=="Shipped" || $orderDetails['order_status']=="Delivered") class="timeline-l-i timeline-l-i--finish" @else class="timeline-l-i" @endif>
                                                            <span class="timeline-circle"></span>
                                                        </div>
                                                        <span class="timeline-text">Shipped</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="timeline-step">
                                                        <div @if($orderDetails['order_status']=="Delivered") class="timeline-l-i timeline-l-i--finish" @else class="timeline-l-i" @endif>
                                                            <span class="timeline-circle"></span>
                                                        </div>
                                                        <span class="timeline-text">Delivered</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="manage-o__description">
                                            <div class="description__container">
                                                <div class="description__img-wrap">
                                                    @php $getProductImage = Product::getProductImage($product['product_id']) @endphp
                                                    @if($getProductImage!="")
                                                    <img class="u-img-fluid" src="{{ asset('front/images/products/small/'.$getProductImage) }}" alt="">
                                                    @else
                                                    <img class="u-img-fluid" src="{{ asset('front/images/product/sitemakers-tshirt.png') }}" alt="">
                                                    @endif
                                                </div>
                                                <div class="description-title">{{$product['product_name']}}
                                                ({{$product['product_code']}})<br>
                                                Size: {{$product['product_size']}}
                                            </div>
                                            </div>
                                            <div class="description__info-wrap">
                                                <div>

                                                    <span class="manage-o__text-2 u-c-silver">Quantity:

                                                        <span class="manage-o__text-2 u-c-secondary">{{$product['product_qty']}}</span></span></div>
                                                <div>

                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                        <span class="manage-o__text-2 u-c-secondary">GHC{{$product['product_price']}}</span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        <div class="dash__pad-3">
                                            <h2 class="dash__h2 u-s-m-b-8">Shipping Address</h2>
                                            <h2 class="dash__h2 u-s-m-b-8">{{$orderDetails['name']}}</h2>

                                            <span class="dash__text-2">
                                            {{$orderDetails['address']}},
                                            {{$orderDetails['city']}}, {{$orderDetails['state']}}, {{$orderDetails['pincode']}},
                                        	{{$orderDetails['country']}}</span>

                                            <span class="dash__text-2">{{$orderDetails['mobile']}}</span>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                        <div class="dash__pad-3">
                                            <h2 class="dash__h2 u-s-m-b-8">Billing Address</h2>
                                            <h2 class="dash__h2 u-s-m-b-8">
                                            {{$orderDetails['user']['name']}}</h2>

                                            <span class="dash__text-2">
                                            {{$orderDetails['user']['address']}},
                                            {{$orderDetails['user']['city']}}, {{$orderDetails['state']}}, {{$orderDetails['user']['pincode']}},
                                        	{{$orderDetails['user']['country']}}</span>

                                            <span class="dash__text-2">{{$orderDetails['user']['mobile']}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                        <div class="dash__pad-3">
                                            <h2 class="dash__h2 u-s-m-b-8">Total Summary</h2>
                                            <div class="dash-l-r u-s-m-b-8">
                                                <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                                <div class="manage-o__text-2 u-c-secondary">GHC{{$total_price}}</div>
                                            </div>
                                            <div class="dash-l-r u-s-m-b-8">
                                                <div class="manage-o__text-2 u-c-secondary">Shipping Fee (+)</div>
                                                <div class="manage-o__text-2 u-c-secondary">GHC{{$orderDetails['shipping_charges']}}</div>
                                            </div>
                                            <div class="dash-l-r u-s-m-b-8">
                                                <div class="manage-o__text-2 u-c-secondary">Taxes (+)</div>
                                                <div class="manage-o__text-2 u-c-secondary">GHC0.00</div>
                                            </div>
                                            <div class="dash-l-r u-s-m-b-8">
                                                <div class="manage-o__text-2 u-c-secondary">Discount (-)</div>
                                                <div class="manage-o__text-2 u-c-secondary">GHC @if($orderDetails['coupon_amount']>0){{ $orderDetails['coupon_amount']}} @else 0 @endif 
                                                </div>
                                            </div>
                                            <div class="dash-l-r u-s-m-b-8">
                                                <div class="manage-o__text-2 u-c-secondary">Grand Total</div>
                                                <div class="manage-o__text-2 u-c-secondary">GHCGHC{{$orderDetails['grand_total']}}</div>
                                            </div>

                                            <span class="dash__text-2">Paid by {{$orderDetails['payment_method']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <h1 class="dash__h1 u-s-m-b-30">Order Logs / Tracking Details</h1>
                             <div class="dash__box dash__box--shadow dash__box--radius 
                             dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                     @foreach($orderDetails['log'] as $log)
                                        <span style="height:10px;"></span> 
                                        <strong>{{ $log['order_status'] }}</strong><br>
                                        @if($log['order_status']=="Shipped")
                                            @if(!empty($orderDetails['courier_name']))
                                                Courier Name: {{ $orderDetails['courier_name']}}<br>
                                            @endif
                                        @if(!empty($orderDetails['tracking_number']))
                                            Tracking Number: {{ $orderDetails['tracking_number']}}<br>
                                        @endif
                                    @endif
                                    {{ date("F j, Y, g:i a", strtotime($log ['created_at'])); }}
                                    <hr color="f9f9f9">
                                    @endforeach
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