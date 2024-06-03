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
          <form name="brandForm" id="brandForm" @if(empty($brand['id']))  action="{{ url('admin/add-edit-brand') }}" @else action="{{ url('admin/add-edit-brand/'.$brand['id']) }}"@endif method="post" enctype="multipart/form-data">@csrf
            <div class="card-body">
            <div class="form-group">
            <label for="brand_name">Brand Name*</label>
            <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Enter Brand Name" @if(!empty($brand['brand_name'])) value="{{ $brand['brand_name'] }}" @else value="{{ old('brand_name') }}" @endif>
            </div>
            <div class="form-group">
              <label for="brand_image">Brand Image</label>
              <input type="file" class="form-control" id="brand_image" name="brand_image">
              @if(!empty($brand['brand_image']))
              <a target="blank" href="{{ url('front/images/brands/'.$brand['brand_image']) }}"><img style="width:50px; margin: 10px;" src="{{ asset('front/images/brands/'.$brand['brand_image']) }}"></a>
              <a style='color:#3f6ed3;' class="confirmDelete"  title="Delete Brand Image" href="javascript:void(0)" record="brand-image" recordid="{{ $brand['id'] }}"><i style="color:#fff" class="fas fa-trash"></i></a>
              @endif
            </div>
            <div class="form-group">
              <label for="brand_logo">Brand Logo</label>
              <input type="file" class="form-control" id="brand_logo" name="brand_logo">
              @if(!empty($brand['brand_logo']))
              <a target="blank" href="{{ url('front/images/brands/'.$brand['brand_logo']) }}"><img style="width:50px; margin: 10px;" src="{{ asset('front/images/brands/'.$brand['brand_logo']) }}"></a>
              <a style='color:#3f6ed3;' class="confirmDelete"  title="Delete Brand Logo" href="javascript:void(0)" record="brand-logo" recordid="{{ $brand['id'] }}"><i style="color:#fff" class="fas fa-trash"></i></a>
              @endif
            </div>
            <div class="form-group">
              <label for="brand_discount">Brand Discount</label>
              <input type="text" class="form-control" id="brand_discount" name="brand_discount" placeholder="Enter Brand Discount" @if(!empty($brand['brand_discount'])) value="{{ $brand['brand_discount'] }}" @else value="{{ old('brand_discount') }}" @endif>
            </div>
            {{-- <div class="form-group">
              <label for="url">Brand URL*</label>
              <input type="text" class="form-control" id="url" name="url" placeholder="Enter Brand URL" @if(!empty($brand['url'])) value="{{ $brand['url'] }}" @else value="{{ old('url') }}" @endif>
            </div> --}}
            <div class="form-group">
              <label for="description">Brand Description</label>
              <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Brand Description">@if(!empty($brand['description'])) {{ $brand['description'] }} @else {{ old('description') }} @endif</textarea>
            </div>
            <div class="form-group">
              <label for="meta_title">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" @if(!empty($brand['meta_title'])) value="{{ $brand['meta_title'] }}" @else value="{{ old('meta_title') }}" @endif>
            </div>
            <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" @if(!empty($brand['meta_description'])) value="{{ $brand['meta_description'] }}" @else value="{{ old('meta_description') }}" @endif>
            </div>
            <div class="form-group">
              <label for="meta_keywords">Meta Keywords</label>
              <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords" @if(!empty($brand['meta_keywords'])) value="{{ $brand['meta_keywords'] }}" @else value="{{ old('meta_keywords') }}" @endif>
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
