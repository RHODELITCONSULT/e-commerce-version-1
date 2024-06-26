@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Inbox</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @php
                $total = App\Models\Message::count();
            @endphp
            <div class="row">
                <div class="col-md-3">
                    {{-- <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a> --}}

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
                                    <a href="{{route('messages:all',['query'=>"sent"])}}" class="nav-link">
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
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle text-danger"></i>
                                        Important
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle text-warning"></i> Promotions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle text-primary"></i>
                                        Social
                                    </a>
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
                            <h3 class="card-title">Inbox</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search Mail">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                        class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    {{-- <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-share"></i>
                                    </button> --}}
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">

                                    1-50/{{ $total }}
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.float-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check1">
                                                        <label for="check1"></label>
                                                    </div>
                                                </td>
                                                @if (is_null($message->read_at))
                                                    <td class="mailbox-star"><a
                                                            href="{{ route('message:read', ['id' => $message->id]) }}"><i
                                                                class="fas fa-star text-warning"></i></a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                                <td class="mailbox-name"><a
                                                        href="{{ route('message:read', ['id' => $message->id]) }}">{{ $message->name }}</a>
                                                </td>
                                                <td class="mailbox-subject">
                                                    @if (is_null($message->read_at))
                                                        <b>{{ $message->subject . '-' }}</b>
                                                    @else
                                                        {{ $message->subject . '-' }}
                                                    @endif
                                                    @if ($query ==="inbox")
                                                    {{ substr($message->message_text, 0, 20) }}...
                                                    @else
                                                    {{ substr($message->reply_text, 0, 20) }}...
                                                    @endif
                                                </td>
                                                <td class="mailbox-date">
                                                    {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                    <i class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">
                                    1-50/{{ $total }}
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.float-right -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
