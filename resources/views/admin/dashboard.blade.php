@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  @if(Session::has('error_message'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error:</strong> {{ Session::get('error_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  @endif

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tasks"></i></span>
            <a style="color:#fff;" href="{{ url('admin/categories') }}">
             <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">
                {{$categoriesCount}}
                <!-- <small>%</small> -->
              </span>
            </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-th-list"></i></span>
            <a style="color:#fff;" href="{{ url('admin/brands') }}">
            <div class="info-box-content">
              <span class="info-box-text">Brands</span>
              <span class="info-box-number">{{$brandsCount}}</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <a style="color:#fff;" href="{{ url('admin/products') }}">
            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">{{$productsCount}}</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <a style="color:#fff;" href="{{ url('admin/users') }}">
            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">{{$usersCount}}</span></a>
            </div></a>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cart-plus"></i></span>
            <a style="color:#fff;" href="{{ url('admin/orders') }}">
             <div class="info-box-content">
              <span class="info-box-text">Orders</span>
              <span class="info-box-number">
                {{$ordersCount}}
                <!-- <small>%</small> -->
              </span>
            </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-pen-alt"></i></span>
            <a style="color:#fff;" href="{{ url('admin/ratings') }}">
            <div class="info-box-content">
              <span class="info-box-text">Ratings & Reviews</span>
              <span class="info-box-number">{{$ratingsCount}}</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck"></i></span>
            <a style="color:#fff;" href="{{ url('admin/shipping-charges') }}">
            <div class="info-box-content">
              <span class="info-box-text">Shipping</span>
              <span class="info-box-number">{{$shippingCount}}</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-gifts"></i></span>
            <a style="color:#fff;" href="{{ url('admin/coupons') }}">
             <div class="info-box-content">
              <span class="info-box-text">Coupons</span>
              <span class="info-box-number">
                {{$couponsCount}}
                <!-- <small>%</small> -->
              </span>
            </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        
        

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        
        
      </div>
      <!-- /.row -->
    
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection