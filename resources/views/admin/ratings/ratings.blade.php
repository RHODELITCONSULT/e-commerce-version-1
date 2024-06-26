@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains category content -->
<div class="content-wrapper">
  <!-- Content Header (Category header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ratings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ratings</li>
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
                <h3 class="card-title">Ratings</h3>
              </div>
      
              <!-- /.card-header -->
              <div class="card-body">
                <table id="ratings" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>User Email</th>
                    <th>Review</th>
                    <th>Rating</th>

                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($ratings as $rating)
                  <tr>
                    <td>{{ $rating['id'] }}</td>
                    <td> 
                      <a target="_blank" href="{{ url('product/'.$rating['product']['id']) }}">{{ $rating['product']['product_name'] }}</a>
                    </td>
                    <td>{{ $rating['user']['email'] }}</td>
                    <td>{{ $rating['review'] }}</td>
                    <td>{{ $rating['rating'] }}</td>
                    <td>
                      
                       @if($rating['status']==1)
                          <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}" style='color:#3f6ed3' href="javascript:void(0)"><i class="fas fa-toggle-on" status="Active"></i></a>
                      @else
                          <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}" style="color:grey" href="javascript:void(0)"><i class="fas fa-toggle-off" status="Inactive"></i></a>
                      @endif
                        &nbsp;&nbsp;
                       <a style='color:#3f6ed3;' class="confirmDelete"  title="Delete Rating" href="javascript:void(0)" record="rating" recordid="{{ $rating['id'] }}"><i class="fas fa-trash"></i></a>
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