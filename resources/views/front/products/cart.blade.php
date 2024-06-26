@extends('front.layout.layout')
@section('content')
    <div align="center"><div class="print-error-msg" style="width: 90%;"></div></div>
    <div align="center"><div class="print-success-msg" style="width: 90%;"></div></div>
    @if(Session::has('error_message'))
    <div align="center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 90%">
            <strong>Error:</strong> {{ Session::get('error_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="border: 0px; float:right;">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    <!--====== App Content ======-->
    <div class="app-content" id="appendCartItems">
        @include('front.products.cart_items')
    </div>
    <!--====== End - App Content ======-->
@endsection