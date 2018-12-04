@extends('layout.admin')
@section('content-body')
<div class="wrapper">

  @include('components.nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	  <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-primary">
              <h6>
                <span class="text-uppercase">Total Image</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="index.html#">View</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Total Images Uploaded</small><p class="font-size-26 mb-0">{{count(explode(',', $galleries->image_path)) -1}}</p></div>

			  </div>
            </div>
        </div>

        <!-- /.col -->

        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-danger">
              <h6>
                <span class="text-uppercase">Last Login</span>
                <span class="float-right">&nbsp;</span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Date</small><p class="font-size-26 mb-0">{{ date('Y')}}-{{date('m')}}-{{date('d')}}</p></div>

			  </div>
            </div>
        </div>
        <!-- /.col -->

      </div>

      <div class="row">

		<div class="">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Recent Image Uploaded</h4>
            </div>
            <div class="box-body">
				<div class="row">
			{{-- @if(count($galleries) > 0) --}}

                    <div class="row">
                      @foreach(explode(',', $galleries->image_path) as $pix)
                        @if($pix !== '')
                          <div class="col-md-3"><img src="/gallery/{{$pix}}" class="image" /></div>
                        @endif
                      @endforeach
                    </div>
                    <hr>
                    <br>

              {{-- @else
                <div class="alert alert-info">
                  <p>No Image in the gallery</p>
                </div>
               @endif --}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
			<a class="nav-link" href="index.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




@stop