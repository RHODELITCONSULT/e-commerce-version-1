@extends('admin.layout.layout')
@section('content')
<style>
    body {
        background-color: #2C2C2C;
        color: #FFFFFF;
    }

    .cke_editable {
        background-color: #2C2C2C !important;
        color: #FFFFFF !important;
    }

    .cke_top,
    .cke_bottom {
        background-color: #1B1B1B !important;
    }

    .cke_toolgroup,
    .cke_button {
        background-color: #333333 !important;
        border-color: #444444 !important;
    }

    .cke_button__save_icon,
    .cke_button__bold_icon,
    .cke_button__italic_icon,
    .cke_button__underline_icon,
    .cke_button__strike_icon,
    .cke_button__link_icon {
        filter: invert(1);
    }
</style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ 'Create/Edit About-US Page' }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{ 'about-us' }}</li>
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
                        <h3 class="card-title">{{ 'About-Us' }}</h3>

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
                            <div class="col-lg-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @php
                                    $about = \App\Models\About::where('info_type','about-us')->first();
                                @endphp
                                <form name="cmsForm" id="cmsForm" action="{{route("admin.create.update.about",['type'=>'about-us'])}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="title" name="company_name"
                                                placeholder="Enter Name of Platform"
                                                value="{{ $about ? $about->company_name : '' }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Information <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="9" id="editor" name="information" placeholder="Enter About-Us Information">{{ $about ? $about->information : '' }}</textarea>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div>
                                        <button type="submit" class="btn btn-primary">Update Page Details</button>
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
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            uiColor: '#2C2C2C',
            on: {
                instanceReady: function(evt) {
                    var editor = evt.editor;
                    editor.document.getBody().setStyle('background-color', '#2C2C2C');
                    editor.document.getBody().setStyle('color', '#FFFFFF');
                }
            }
        });
    </script>
@endsection
