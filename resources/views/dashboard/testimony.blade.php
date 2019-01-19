@extends('layout.admin')
@section('content-body')
<!-- Site wrapper -->
<script src="/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="/summernote/summernote.css">
<script type="text/javascript">
    $(document).ready(function() {
      $('#summernote').summernote({
		  height: 250
	  });

	  $('#add-new').on('click', function() {
		  $('#show-hide').toggle();
	  })
    });
  </script>
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
        Testimony
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
				  <h3 class="box-title">Create user testimony</h3>
				</div>
          <div class="box-body">
			  <a href="javascript:void(0)" id="add-new" class="btn btn-default btn-lg">Add New <i class="fa fa-plus-circle"></i></a>
			  <p></p>
			  <div id="show-hide" style="display:none">
			  <form method="post" action="/dashboard/store-testimony">
			  <!-- {{Session::has('errors') ? dd(Session('errors')) : ''}} -->
			  @if (Session::has('msg'))
			  	<div class="alert alert-success">{{Session('msg')}}</div>
			  @endif
			  @csrf
				  <div class="form-group">
					<label for="">Testimony Content</label>
					<textarea name="testimony" id="summernote"></textarea>
				  </div>
				  <div class="form-group">
				  	<label>User Name</label>
				 	 <input type="text" class="form-control" name="username" required>
				  </div>
				  <div class="form-group">
				  	<label>Location</label>
				 	 <input type="text" class="form-control" name="location">
				  </div>
				  <div class="form-group">
					  <button type="submit" class="btn btn-lg btn-primary">Submit <i class="fa fa-plus-circle"></i>
					  </button>
				  </div>
			  </form>
			 </div>
			  @if (count($testimonies))
			  <ul class="list-group">
				@foreach ($testimonies as $testimony)
					<li class="list-group-item">
						<p>{!! $testimony->testimony !!}</p>
						<h4>{{$testimony->username}}, {{$testimony->location ?? 'N/A'}}</h4>
						<a href="#" class="btn btn-sm btn-danger">delete <i class="fa fa-times"></i></a>
					</li>
				@endforeach
			</ul>
			@else 
				<h2>No testimony record available</h2>
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
