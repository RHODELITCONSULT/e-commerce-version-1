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
              <div class="col-6">
              	 @if ($errors->any())
		        <div class="alert alert-danger">
		            <ul>
		                @foreach ($errors->all() as $error)
		                    <li>{{ $error }}</li>
		                @endforeach
			            </ul>
			        </div>
			    @endif
          <form name="bannerForm" id="bannerForm" @if(empty($banner['id']))  action="{{ url('admin/add-edit-banner') }}" @else action="{{ url('admin/add-edit-banner/'.$banner['id']) }}"@endif method="post" enctype="multipart/form-data">@csrf
            <div class="card-body">
            <div class="form-group">
              <label for="type">Banner Type</label>
                <select  class="form-control" id="type" name="type"> 
                <option value="">Select</option>
                <option @if(!empty($banner['type'])&&$banner['type']=="Slider") selected @endif value="Slider">Slider</option>
                <option @if(!empty($banner['type'])&&$banner['type']=="Fix") selected @endif value="Fix">Fix</option>
              </select>
            </div>
            <div class="form-group">
              <label for="banner_image">Banner Image</label>
              <input type="file" class="form-control" id="banner_image" name="banner_image"> 
              @if(!empty($banner['image']))
              <a target="blank" href="{{ url('front/images/banners/'.$banner['image']) }}"><img style="width:50px; margin: 10px;" src="{{ asset('front/images/banners/'.$banner['image']) }}"></a>
              @endif
            </div>
            <div class="form-group">
            <label for="title">Banner Title*</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Banner Title" @if(!empty($banner['title'])) value="{{ $banner['title'] }}" @else value="{{ old('title') }}" @endif>
            </div>
            <div class="form-group">
            <label for="alt">Banner Alt*</label>
            <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter Banner Alt" @if(!empty($banner['alt'])) value="{{ $banner['alt'] }}" @else value="{{ old('alt') }}" @endif>
            </div>
            <div class="form-group">
              <label for="link">Banner Link*</label>
              <input type="text" class="form-control" id="link" name="link" placeholder="Enter Banner Link" @if(!empty($banner['link'])) value="{{ $banner['link'] }}" @else value="{{ old('link') }}" @endif>
            </div>
            <div class="form-group">
              <label for="sort">Banner Sort*</label>
              <input type="number" class="form-control" id="sort" name="sort" placeholder="Enter Banner Sort" @if(!empty($banner['sort'])) value="{{ $banner['sort'] }}" @else value="{{ old('sort') }}" @endif>
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