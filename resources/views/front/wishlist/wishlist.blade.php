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

                                <a href="dash-address-add.html">My Account</a></li>
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
                            <!--====== Dashboard Features ======-->
                            <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                <div class="dash__pad-1">
                                    <span class="dash__text u-s-m-b-16">Hello, Amit Gupta</span>
                                    <ul class="dash__f-list">
                                        <li><a href="account.html">My Billing/Contact Address</a></li>
                                        <li><a href="orders.html">My Orders</a></li>
                                        <li><a href="wishlist.html">My Wish List</a></li>
                                        <li><a href="update-password.html">Update Password</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--====== End - Dashboard Features ======-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">My Wish List</h1>

                                    <!--====== Section Content ======-->
                                    <div class="section__content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">

                                                    <!--====== Wishlist Product ======-->
                                                    @foreach ($wishlists as $wishlist)
                                                    <div class="w-r u-s-m-b-30">
                                                        <div class="w-r__container">
                                                            <div class="w-r__wrap-1">
                                                                <div class="w-r__img-wrap">
                                                                    @php
                                                                    $product_image = "sitemakers-tshirt.png";
                                                                        $product = \App\Models\Product::where('id',$wishlist->product_id)->first();
                                                                        if($product){
                                                                            $product_image = $product["images"][0]["image"];
                                                                        }
                                                                    @endphp
                                                                    {{-- <img class="u-img-fluid" src="images/product/sitemakers-tshirt.png" alt=""></div> --}}
                                                                    <img class="u-img-fluid" src="{{asset('front/images/products/small/'.$product_image)}}" alt=""></div>
                                                                <div class="w-r__info">

                                                                    <span class="w-r__name">

                                                                        <a href="{{ route('product.detail',['id'=>$wishlist->product_id]) }}">{{ $wishlist->product->product_name }}</a></span>

                                                                    <span class="w-r__category">
                                                                        @php
                                                                            $brand = App\Models\Brand::where("id",$wishlist->product->brand_id)->first()->brand_name;
                                                                        @endphp

                                                                        <a href="shop-side-version-2.html">{{$brand}}</a></span>

                                                                        @if ($wishlist->product->discount_type =="")
                                                                        <span class="w-r__discount">GHS.{{ number_format((float)$wishlist->product->product_price, 2,'.','') }}
                                                                        @else
                                                                        <span class="w-r__price">GHS.{{ number_format((float)$wishlist->product->product_price,2,'.','') }}
                                                                        <span class="w-r__discount">GHS.{{ number_format((float)$wishlist->product->product_price,2,'.','') }}</span></span></div>
                                                                        @endif
                                                            </div>
                                                            <div class="w-r__wrap-2">

                                                                {{-- <a class="w-r__link btn--e-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart">ADD TO CART</a> --}}

                                                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="{{ route('product.detail',['id'=>$wishlist->product_id]) }}">VIEW</a>

                                                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="{{route("wishlist.remove",['product_id'=>$wishlist->product_id])}}">REMOVE</a></div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!--====== End - Wishlist Product ======-->
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="route-box">
                                                        <div class="route-box__g">
                                                            <a class="route-box__link" href="{{ url("/") }}"><i class="fas fa-long-arrow-alt-left"></i>
                                                                <span>CONTINUE SHOPPING</span></a></div>
                                                        <div class="route-box__g">

                                                            <a class="route-box__link" href="{{route("clear.wishlists")}}"><i class="fas fa-trash"></i>

                                                                <span>CLEAR WISHLIST</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Section Content ======-->
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
