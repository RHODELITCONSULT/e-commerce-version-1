@extends('admin.layout.layout')
@section('content')
    <!-- include summernote css/js -->
  <link rel="stylesheet" href="{{asset('admin//css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Compose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('messages:all') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Folders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="{{ route('messages:all') }}" class="nav-link">
                                            <i class="fas fa-inbox"></i> Inbox
                                            <span class="badge bg-primary float-right">{{ App\Models\Message::where('read_at',null)->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('messages:all',['query'=>'sent'])}}" class="nav-link">
                                            <i class="far fa-envelope"></i> Sent
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-trash-alt"></i> Trash
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Reply to {{ $message->name }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('send:reply',['id'=>$message->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">To:</label>
                                        <input class="form-control" placeholder="To:" name="email" value="{{$message->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="message" class="form-control" style="height: 300px"></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i>
                                            Send</button>
                                    </div>
                                </div>
                                </form>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('admin/js/demo.js') }}"></script>

    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        $(function() {
            $('#message').summernote()
        })
    </script>
@endsection
