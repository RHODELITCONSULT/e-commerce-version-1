<!--====== Dashboard Features ======-->
<div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
    <div class="dash__pad-1">

        <span class="dash__text u-s-m-b-16">Hello, {{Auth::user()->name}}</span>
        <ul class="dash__f-list">
            <li><a href="{{url('user/account')}}">My Billing/Contact Address</a></li>
            <li><a href="{{url('user/orders')}}">My Orders</a></li>
            <li><a href="{{route('wishlists')}}">My Wish List</a></li>
            <li><a href="{{ url('user/update-password')}}">Update Password</a></li>
        </ul>
    </div>
</div>
<!--====== End - Dashboard Features ======-->
