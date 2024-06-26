@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Category header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Subscribers</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Subscribers</li>
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
      
              <!-- /.card-header -->
              <div class="card-body">
                 <a href="{{ url('admin/export-subscribers') }}" style="max-width: 150px; float: right;" class="btn btn-block btn-primary">Export</a>
                <table id="subscribers" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Subscribed on</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($subscribers as $subscriber)
                  <tr>
                    <td>{{ $subscriber['id'] }}</td>
                    <td>{{ $subscriber['email'] }}</td>
                    <td>{{ date("F j, Y, g:i a", strtotime($subscriber ['created_at'])); }}</td>
                    <td>
                       @if($subscriber['status']==1)
                          <a class="updateSubscriberStatus" id="subscriber-{{ $subscriber['id'] }}" subscriber_id="{{ $subscriber['id'] }}" style='color:#3f6ed3' href="javascript:void(0)"><i class="fas fa-toggle-on" status="Active"></i></a>
                      @else
                          <a class="updateSubscriberStatus" id="subscriber-{{ $subscriber['id'] }}" subscriber_id="{{ $subscriber['id'] }}" style="color:grey" href="javascript:void(0)"><i class="fas fa-toggle-off" status="Inactive"></i></a>
                      @endif
                    </td>
                    <td>
                       <a style='color:#3f6ed3;' class="confirmDelete"  title="Delete Subscriber" href="javascript:void(0)" record="subscriber" recordid="{{ $subscriber['id'] }}"><i class="fas fa-trash"></i></a>
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