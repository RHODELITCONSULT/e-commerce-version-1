<?php use App\Models\Product; ?>
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

                                <a href="checkout.html">Checkout</a></li>
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
                <div class="checkout-f">
                    @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> {{ Session::get('error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="border: 0px; float:right;">
                                <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="deliveryAddresses">
                                @include('front.products.delivery_addresses')
                            </div>
                            <h1 class="checkout-f__h1 deliveryText">ADD NEW DELIVERY ADDRESS</h1>
                            <form class="checkout-f__delivery" id="deliveryAddressForm" action="javascript:;" method="post">@csrf
                                <input type="hidden" name="delivery_id">
                                <div class="u-s-m-b-30">

                                    <!--====== NAME ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-name">NAME *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="delivery_name" name="delivery_name" value="{{Auth::user()->name}}">
                                        <p id="delivery-delivery_name"></p>
                                    </div>
                                    <!--====== End - NAME ======-->

                                    <!--====== ADDRESS ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-address">ADDRESS *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="delivery_address" name="delivery_address">
                                        <p id="delivery-delivery_address"></p>
                                    </div>
                                    <!--====== End - ADDRESS ======-->

                                    <!--====== CITY ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-city">CITY *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="sdelivery_city" name="delivery_city">
                                        <p id="delivery-delivery_city"></p>
                                    </div>
                                    <!--====== End - CITY ======-->

                                    <!--====== STATE ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-state">STATE *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="delivery_state" name="delivery_state">
                                        <p id="delivery-delivery_state"></p>
                                    </div>
                                    <!--====== End - STATE ======-->

                                    <!--====== Country ======-->
                                    <div class="u-s-m-b-15">

                                        <!--====== Select Box ======-->

                                        <label class="gl-label" for="billing-country">COUNTRY *</label><select class="select-box select-box--primary-style" id="delivery_country" name="delivery_country">
                                            <option selected value="">Choose Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country['country_name'] }}"@if($country['country_name']==Auth::user()->country) selected @endif>{{ $country['country_name'] }}</option>
                                            @endforeach
                                        </select>
                                        <p id="delivery-delivery_country"></p>
                                        <!--====== End - Select Box ======-->
                                    </div>
                                    <!--====== End - Country ======-->


                                    <!--====== PINCODE ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-pincode">PINCODE *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="delivery_pincode" name="delivery_pincode">
                                        <p id="delivery-delivery_pincode"></p>
                                    </div>
                                    <!--====== End - PINCODE ======-->


                                    <!--====== MOBILE ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="shipping-mobile">MOBILE *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="delivery_mobile" name="delivery_mobile">
                                        <p id="delivery-delivery_mobile"></p>
                                    </div>
                                    <!--====== End - MOBILE ======-->

                                    <div>

                                        <button class="btn btn--e-transparent-brand-b-2" type="submit" id="deliveryForm">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                            <!--====== Order Summary ======-->
                            <div class="o-summary">
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__item-wrap gl-scroll">
                                        @php $total_price = 0 @endphp
                                        @foreach($getCartItems as $item)
                                        @php
                                        $getAttributePrice = Product::getAttributePrice($item['product_id'],$item['product_size']) @endphp
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">
                                                    @if(isset($item['product']['images'][0]['image'])&& !empty($item['product']['images'][0]['image']))
                                                    <a href="{{ url('product/'.$item['product']['id'])}}"><img class="u-img-fluid" src="{{ asset('front/images/products/small/'.$item['product']['images'][0]['image']) }}" alt=""></a>
                                                @else
                                                    <a href="{{ url('product/'.$item['product']['id'])}}"><img class="u-img-fluid" src="{{ asset('front/images/product/sitemakers-tshirt.png') }}" alt=""></a>
                                                @endif
                                                </div>
                                                <div class="o-card__info-wrap">
                                                    <span class="o-card__name">
                                                        <a href="{{ url('product/'.$item['product']['id'])}}">{{ $item['product']['product_name']}}</a></span>

                                                    <span class="o-card__quantity">Size: {{$item['product_size']}}</span>
                                                     <span class="o-card__quantity">Quantity x {{$item['product_qty']}}</span>

                                                    <span class="o-card__price">GHC{{$getAttributePrice['final_price'] * $item['product_qty']}}</span></div>
                                            </div>

                                            <a class="o-card__del far fa-trash-alt deleteCartItem"data-cartid="{{ $item['id'] }}"data-page="Checkout"></a>
                                        </div>
                                         @php $total_price = $total_price + ($getAttributePrice['final_price'] * $item['product_qty']) @endphp
                                        @endforeach
                                    </div>
                                </div>
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <h1 class="checkout-f__h1">BILLING ADDRESS</h1>
                                        <div class="ship-b">

                                            <span class="ship-b__text">Bill to:</span>
                                            <div class="ship-b__box u-s-m-b-10">
                                                <p class="ship-b__p">
                                                    {{ Auth::user()->name }},
                                                    @if(!empty(Auth::user()->address))
                                                    {{ Auth::user()->address }},
                                                    @endif
                                                     @if(!empty(Auth::user()->city))
                                                    {{ Auth::user()->city }},
                                                    @endif
                                                    @if(!empty(Auth::user()->state))
                                                    {{ Auth::user()->state }},
                                                    @endif
                                                    @if(!empty(Auth::user()->country))
                                                    {{ Auth::user()->country }},
                                                    @endif
                                                    @if(!empty(Auth::user()->mobile))
                                                    M: {{Auth::user()->mobile }}
                                                    @endif
                                                    </p>

                                                <a class="ship-b__edit btn--e-transparent-platinum-b-2" data-modal="modal" data-modal-id="#edit-ship-address" href="{{ url('user/account') }}" >Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <table class="o-summary__table">
                                            <tbody>
                                                <tr>
                                                    <td>SUBTOTAL</td>
                                                    <td>GHC{{$total_price}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SHIPPING CHARGES(+)</td>
                                                    <td>GHC{{$shipping_charges}}</td>
                                                </tr>
                                                <tr>
                                                    <td>DISCOUNT (-)</td>
                                                    <td>@if(Session::has('couponAmount'))
                                                        GHC{{Session::get('couponAmount')}}
                                                        @else
                                                            GHC0
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>GRAND TOTAL</td>
                                                    <td>GHC{{ $total_price - Session::get('couponAmount') + $shipping_charges}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <h1 class="checkout-f__h1">PAYMENT METHODS</h1>
                                        <form class="checkout-f__payment" name="checkoutForm" action="{{ url('checkout') }}" method="post">@csrf
                                            <div class="u-s-m-b-10">

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="cash-on-delivery" name="payment_gateway" value="COD">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="cash-on-delivery">Cash on Delivery</label></div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This service is only available for some countries)</span>
                                            </div>
                                            {{-- <div class="u-s-m-b-10">

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="direct-bank-transfer" name="payment_gateway" value="Bank Transfer">
                                                    <div class="radio-box__state radio-box__state--primary" >

                                                        <label class="radio-box__label" for="direct-bank-transfer">Direct Bank Transfer</label></div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</span>
                                            </div> --}}
                                            {{-- <div class="u-s-m-b-10">

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="pay-with-check" name="payment_gateway" value="Check">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="pay-with-check">Pay With Check</label></div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
                                            </div> --}}

                                            <div class="u-s-m-b-10">

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="pay-pal" name="payment_gateway" value="Paystack">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="pay-pal">Pay With MOMO / Debit Card</label></div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll take you to our checkout portal to make Payment with your Mobile Money/Debit Card(Visa/Mastercard)</span>
                                            </div>
                                            {{-- <div class="u-s-m-b-10">

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="pay-pal" name="payment_gateway" value="Paypal">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="pay-pal">PayPal (Pay With Credit / Debit Card / Paypal Wallet)</label></div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll take you to Paypal's site to make Payment with your Credit / Debit Card or Paypal Credit.</span>
                                            </div> --}}
                                            <div class="u-s-m-b-15">

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="term-and-condition" name="agree" value="Yes">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="term-and-condition">I consent to the</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <a class="gl-link">Terms of Service.</a>
                                            </div>
                                            <div>

                                                <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Order Summary ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->
</div>
<!--====== End - App Content ======-->
@endsection
