@extends('admin.layout.layout')
@section('content')
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
                        <a href="{{route('messages:all')}}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

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
                                        <a href="{{route('messages:all')}}" class="nav-link">
                                            <i class="fas fa-inbox"></i> Inbox
                                            <span class="badge bg-primary float-right">{{ App\Models\Message::where('read_at',null)->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('messages:all',['query'=>"sent"])}}" class="nav-link">
                                            <i class="far fa-envelope"></i> Sent
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-file-alt"></i> Drafts
                                        </a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-filter"></i> Junk
                                            <span class="badge bg-warning float-right">65</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-trash-alt"></i> Trash
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        {{-- <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Labels</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i>
                                            Important</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i>
                                            Promotions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i>
                                            Social</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div> --}}
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Message</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>{{$message->subject}}</h5>
                                    <h6>From: {{ $message->email }}
                                        <span class="mailbox-read-time float-right">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('d M, Y. g:iA') }}</span>
                                    </h6>
                                </div>

                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message">
                                    <p>Hello,</p>
                                    <p>
                                        {{ $message->message_text }}
                                    </p>

                                    <p>Thanks,<br>{{ $message->name }}</p>
                                    <hr>
                                    <p style="font-weight: bold;" class="bg-white p-2">Reply:</p>
                                    <hr>
                                    @if (!is_null($message->reply_text))
                                        <p>{{ $message->reply_text }}</p>
                                        @else
                                        <p>No Reply Yet</p>
                                    @endif
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
                                    @if (is_null($message->reply_text))
                                    <a href="{{route('message:reply',['id'=>$message->id])}}" class="btn btn-default"><i class="fas fa-reply"></i>
                                        Reply</a>
                                    @endif
                                    {{-- <button type="button" class="btn btn-default"><i class="fas fa-share"></i>
                                        Forward</button> --}}
                                </div>
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                    Delete</button>
                                {{-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i>
                                    Print</button> --}}
                            </div>
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
@endsection
