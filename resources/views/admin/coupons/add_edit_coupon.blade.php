@extends('admin.layout.layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	 @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
          @endif
          @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
          @endif
          <form name="couponForm" id="couponForm" @if(empty($coupon['id']))  action="{{ url('admin/add-edit-coupon') }}" @else action="{{ url('admin/add-edit-coupon/'.$coupon['id']) }}"@endif method="post" enctype="multipart/form-data">@csrf
          <div class="card-body">

            @if(empty($coupon['coupon_code']))


          <div class="form-group">
            <label for="coupon_option">Coupon Option*</label>&nbsp;&nbsp;
             <input type="radio" id="AutomaticCoupon" name="coupon_option" value="Automatic" checked="">&nbsp;Automatic&nbsp;&nbsp;
             <input type="radio" id="ManualCoupon" name="coupon_option" value="Manual">&nbsp;Manual&nbsp;&nbsp;
            </div>
            <div class="form-group" style="display: none;" id="couponField">
              <label for="coupon_code">Coupon Code*</label>
              <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter Coupon Code"> 
              </div>


              @else

              <input type="hidden" name="coupon_option" value="{{ $coupon['coupon_option'] }}">
              <input type="hidden" name="coupon_code" value="{{ $coupon['coupon_code'] }}">

              <div class="form-group">
                    <label>Coupon Code</label>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;{{ $coupon['coupon_code'] }}</span>
              </div>

              @endif

            <div class="form-group">
            <label for="coupon_type">Coupon Type*</label>&nbsp;&nbsp;
             <input type="radio"  name="coupon_type" value="Single Time" @if(isset($coupon['coupon_type'])&&$coupon['coupon_type']=="Single Time") checked="" @elseif(!isset($coupon['coupon_type'])) checked="" @endif>&nbsp;Single Time&nbsp;&nbsp;
             <input type="radio"  name="coupon_type" value="Multiple Times" @if(isset($coupon['coupon_type'])&&$coupon['coupon_type']=="Multiple Time") checked="" @endif>&nbsp;Multiple Times&nbsp;&nbsp;
            </div>
             <div class="form-group">
            <label for="amount_type">Amount Type*</label>&nbsp;&nbsp;
             <input type="radio"  name="amount_type" value="Percentage" @if(isset($coupon['amount_type'])&&$coupon['amount_type']=="Percentage") checked="" @elseif(!isset($coupon['amount_type'])) checked="" @endif>&nbsp;Percentage&nbsp;&nbsp;
             <input type="radio" name="amount_type" value="Fixed" @if(isset($coupon['amount_type'])&&$coupon['amount_type']=="Fixed") checked="" @endif>&nbsp;Fixed&nbsp;&nbsp;
            </div>
            <div class="form-group">
              <label for="amount">Amount*</label>
              <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" value="{{ $coupon['amount'] }}">
              </div>
             
              <div class="form-group">
              <label for="categories">Select Category*</label>
                <select name="categories[]" multiple="" class="form-control">
                  @foreach($getCategories as $cat)
                      <option  value="{{ $cat['id'] }}" @if(in_array($cat['id'],$selCats)) selected="" @endif >{{ $cat['category_name'] }}</option>
                      @if(!empty($cat['subcategories']))
                        @foreach($cat['subcategories'] as $subcat)
                          <option  value="{{ $subcat['id'] }}" @if(in_array($subcat['id'],$selCats)) selected="" @endif>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;&nbsp;{{ $subcat['category_name'] }}</option> 
                          @if(!empty($subcat['subcategories']))
                              @foreach($subcat['subcategories'] as $subsubcat)
                                <option  value="{{ $subcat['id'] }}" @if(in_array($subsubcat['id'],$selCats)) selected="" @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;{{ $subsubcat['category_name'] }}</option> 
                              @endforeach
                            @endif
                        @endforeach
                      @endif
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="brands">Select Brand*</label>
                    <select name="brands[]" multiple=""  class="form-control">
                      @foreach($getBrands as $brand)
                        <option value="{{ $brand['id'] }}" @if(in_array($brand['id'],$selBrands)) selected="" @endif> {{ $brand['brand_name'] }}</option>
                      @endforeach
                    </select>
                    </div>
                     <div class="form-group">
                    <label for="users">Select User*</label>
                    <select name="users[]" multiple=""  class="form-control">
                      @foreach($getUsers as $user)
                        <option value="{{ $user['email'] }}" @if(in_array($user['email'],$selUsers)) selected="" @endif> {{ $user['email'] }}</option>
                      @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="expiry_date">Expiry Date*</label>
                      <input type="date" class="form-control" id="expiry_date" name="expiry_date" placeholder="Enter Expiry Date" value="{{ $coupon['expiry_date'] }}">
                      </div>
                   
                    
           
            </div>
                <!-- /.card-body -->

                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
        <!-- /.card -->

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection