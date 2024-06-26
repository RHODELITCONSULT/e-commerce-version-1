@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains category content -->
<div class="content-wrapper">
  <!-- Content Header (Category header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Shipping Charges</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shipping Charges</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Shipping Charges</h3>
              </div>
      
              <!-- /.card-header -->
              <div class="card-body">
                <table id="shipping" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Rate</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($shipping_charges as $shipping)
                  <tr>
                    <td>{{ $shipping['id'] }}</td>
                    <td>{{ $shipping['country'] }}</td>
                    <td>{{ $shipping['rate'] }}</td>
                    <td>
                      @if($shippingModule['edit_access']==1 || $shippingModule['full_access']==1)
                       @if($shipping['status']==1)
                          <a class="updateShippingStatus" id="shipping-{{ $shipping['id'] }}" shipping_id="{{ $shipping['id'] }}" style='color:#3f6ed3' href="javascript:void(0)"><i class="fas fa-toggle-on" status="Active"></i></a>
                      @else
                          <a class="updateShippingStatus" id="shipping-{{ $shipping['id'] }}" shipping_id="{{ $shipping['id'] }}" style="color:grey" href="javascript:void(0)"><i class="fas fa-toggle-off" status="Inactive"></i></a>
                      @endif
                      @endif
                      @if($shippingModule['edit_access']==1 || $shippingModule['full_access']==1)
                      &nbsp;&nbsp;
                       <a style='color:#3f6ed3' href="{{ url('admin/edit-shipping-charges/'.$shipping['id']) }}"> <i class="fas fa-edit"></i></a>
                           &nbsp;&nbsp;
                      @endif 
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection