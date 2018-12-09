@extends('layout.admin')
@section('content-body')
<!-- Site wrapper -->

<div class="wrapper">

  @include('components.nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('components.sidebar')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="product-edit.html#"><i class="fa fa-dashboard"></i> Home</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		  <div class="col-12">
		    <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Images</h3>
				</div>
          <div class="box-body">
                {{-- <div class="row"> --}}
          @if(count($galleries) > 0)
           @foreach($galleries as $gallery)
           @if($gallery->caption === null)
           @else
						<h3>{{$gallery->caption}}</h3>
						<p>Category: {{$gallery->category}}</p>
						<p>{{$gallery->created_at->format('Y-m-d h:ia')}}</p>
						<div class="row">
						@foreach(explode(',', $gallery->image_path) as $pix)
							@if($pix !== '')
                <div class="col-md-3">
                <a href="/picture/{{$pix}}" target="_blank">
                  <img src="/picture/{{$pix}}" class="image" style="padding:3px;border: 1px solid #ccc"/>
                </a>
                </div>
							@endif
						@endforeach
                    </div>
                    <hr>
                    <br>
                    @endif
                  @endforeach
              @else
                <div class="alert alert-info">
                  <p>No Image in the gallery</p>
                </div>
               @endif
              </div>
            </div>
		  </div>
	  </div>
	  <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="product-edit.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop
