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
				 <div><small>Total Images Uploaded</small><p class="font-size-26 mb-0">
          @if(array_get($galleries, 'image_path'))
          {{count(explode(',', $galleries->image_path)) -1}}
          @else
           0
        @endif
      </p></div>

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
				<!-- <div class="row"> -->
                @if (array_get($galleries, 'category'))
                    <p>Category: {{$galleries->category}}</p>
					          <p>Created: {{$galleries->created_at->format('Y-m-d h:ia')}}</p>

                    <div class="row">
                      @if(array_get($galleries, 'image_path'))

                      @foreach(explode(',', $galleries->image_path) as $pix)
                        @if($pix !== '')
                          <div class="col-md-3">
                          <a href="/picture/{{$pix}}" target="_blank">
                          <img src="/picture/{{$pix}}" class="image" style="padding:3px;border: 1px solid #ccc"/>
                          </a>
                          </div>
                        @endif
                      @endforeach
                      @else
                        <div class="col-md-12">
                          <div class="alert-info alert">No pictures Available</div>
                        </div>
                      @endif
                    </div>
                    <hr>
                    <br>
                  @else
                    <div class="alert-info alert">No Information available</div>
                  @endif

            <!-- </div> -->
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
	  &copy; 2018 <a href="#">First Pavilion Inc.</a>. For BBSule.
  </footer>

  <!-- Control Sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




@stop