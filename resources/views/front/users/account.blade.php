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
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">My Billing/Contact Address</h1>

                                    <span class="dash__text u-s-m-b-30">Please add your Billing/Contact details.</span>
                                    <p style="font-weight: bold; margin-bottom: 10px;" id="account-success"></p>
                                    <p id="account-error"><br></p>
                                    <form id="accountForm" action="javascript:;" method="post" class="dash-address-manipulation">@csrf
                                        <div class="gl-inline">
                                        	<div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-email">EMAIL *</label>

                                                <input style="background-color:#ccc;" class="input-text input-text--primary-style" type="text" id="billing-email" value="{{Auth::user()->email 
                                                }}" readonly="">
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-name">NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-name" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                                                <p id="account-name"></p>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-address">ADDRESS *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-address" name="address" placeholder="ADDRESS" value="{{ Auth::user()->address }}">
                                                 <p id="account-address"></p>
                                            </div>
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-city">CITY *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-city" name="city" placeholder="CITY" value="{{ Auth::user()->city }}">
                                                 <p id="account-city"></p>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-state">STATE *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-state" name="state" placeholder="STATE" value="{{ Auth::user()->state }}">
                                                 <p id="account-state"></p>
                                            </div>
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <!--====== Select Box ======-->

                                                <label class="gl-label" for="billing-country">COUNTRY *</label><select class="select-box select-box--primary-style" id="billing-country" name="country" required="">
                                                    <option selected value="">Choose Country</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{$country['country_name']}}"@if($country['country_name']==Auth::user()->country) selected @endif>{{$country['country_name']}}</option>
                                                    @endforeach
                                                </select>
                                                <p id="account-country"></p>
                                                <!--====== End - Select Box ======-->
                                            </div> 
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-pincode">PINCODE *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-pincode" name="pincode" placeholder="PINCODE" value="{{ Auth::user()->pincode }}">
                                                 <p id="account-pincode"></p>
                                            </div>
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="billing-mobile">MOBILE *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-mobile" name="mobile" placeholder="MOBILE" value="{{ Auth::user()->mobile }}">
                                                 <p id="account-mobile"></p>
                                            </div>

                                        </div>

                                        <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>
                                    </form>
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