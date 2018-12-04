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
        Product Details
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="product-details.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="product-details.html#">e-Commerce</a></li>
        <li class="breadcrumb-item active">Product Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="box box-body b-1 text-center text-center">
								<img src="/dashboard/images/product/product-6.png" id="product-image" class="img-fluid" alt="" />
							</div>
							<div class="pro-photos">
								<div class="photos-item item-active">
									<img src="/dashboard/images/product/product-6.png" alt="" >
								</div>
								<div class="photos-item">
									<img src="/dashboard/images/product/product-7.png" alt="" >
								</div>
								<div class="photos-item">
									<img src="/dashboard/images/product/product-8.png" alt="" >
								</div>
								<div class="photos-item">
									<img src="/dashboard/images/product/product-9.png" alt="" >
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-8 col-sm-6">
							<h2 class="box-title mt-0">Product Title</h2>
							<h1 class="pro-price mb-0 mt-20">&#36;270
									<span class="old-price">&#36;540</span>
									<span class="text-danger">50% off</span>
								</h1>
							<hr>
							<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
							<div class="row">
								<div class="col-sm-12">
									<h6>Color</h6>
									<div class="input-group">
										<ul class="icolors">
											<li class="bg-red"></li>
											<li class="bg-blue"></li>
											<li class="bg-purple active"></li>
										</ul>
									</div>
									<h6 class="mt-20">Available Size</h6>
									<p class="mb-0">
										<span class="badge badge-lg badge-default">S</span>
										<span class="badge badge-lg badge-default">M</span>
										<span class="badge badge-lg badge-default">L</span>
									</p>
								</div>
							</div>
							<hr>
							<button class="btn btn-danger mr-5"> Buy Now </button>
							<button class="btn btn-primary mr-5"><i class="ti-shopping-cart"></i> Add to Cart</button>
							<button class="btn btn-info"><i class="ti-plus"></i> Add to Compare</button>
							<h3 class="box-title mt-40">Key Highlights</h3>
							<ul class="list-icons">
								<li><i class="fa fa-check text-danger float-none"></i> Party Wear</li>
								<li><i class="fa fa-check text-danger float-none"></i> Nam libero tempore, cum soluta nobis est</li>
								<li><i class="fa fa-check text-danger float-none"></i> Omnis voluptas as placeat facere possimus omnis voluptas.</li>
							</ul>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h3 class="box-title mt-40">General Info</h3>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td width="390">Brand</td>
											<td> Brand Name </td>
										</tr>
										<tr>
											<td>Delivery Condition</td>
											<td> Lorem Ipsum </td>
										</tr>
										<tr>
											<td>Type</td>
											<td> Party Wear </td>
										</tr>
										<tr>
											<td>Style</td>
											<td> Modern </td>
										</tr>
										<tr>
											<td>Product Number</td>
											<td> FG1548952 </td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h2 class="page-header">Related Products</h2>
	<div class="row">
		  <div class="col-6 col-lg-3">
		    <div class="box">
              <div class="box-body">
				<div class="product-img">
					<img src="/dashboard/images/product/product-1.png" alt="">
					<div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info">Edit</a> <a href="javascript:void(0)" class="bg-danger">Delete</a></div>
				</div>
				<div class="product-text">
					<h2 class="pro-price text-blue">$15.00</h2>
					<h3 class="box-title mb-0">Product Name</h3>
					<small class="text-muted db">Lorem Ipsum Dummy Text</small>
				</div>
              </div>
            </div>
		  </div>
		  <div class="col-6 col-lg-3">
		    <div class="box">
              <div class="box-body">
				<div class="product-img">
					<img src="/dashboard/images/product/product-2.png" alt="">
					<div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info">Edit</a> <a href="javascript:void(0)" class="bg-danger">Delete</a></div>
				</div>
				<div class="product-text">
					<h2 class="pro-price text-pink">$15.00</h2>
					<h3 class="box-title mb-0">Product Name</h3>
					<small class="text-muted db">Lorem Ipsum Dummy Text</small>
				</div>
              </div>
            </div>
		  </div>
		  <div class="col-6 col-lg-3">
		    <div class="box">
              <div class="box-body">
				<div class="product-img">
					<img src="/dashboard/images/product/product-3.png" alt="">
					<div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info">Edit</a> <a href="javascript:void(0)" class="bg-danger">Delete</a></div>
				</div>
				<div class="product-text">
					<h2 class="pro-price text-purple">$15.00</h2>
					<h3 class="box-title mb-0">Product Name</h3>
					<small class="text-muted db">Lorem Ipsum Dummy Text</small>
				</div>
              </div>
            </div>
		  </div>
		  <div class="col-6 col-lg-3">
		    <div class="box">
              <div class="box-body">
				<div class="product-img">
					<img src="/dashboard/images/product/product-4.png" alt="">
					<div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info">Edit</a> <a href="javascript:void(0)" class="bg-danger">Delete</a></div>
				</div>
				<div class="product-text">
					<h2 class="pro-price text-navy">$15.00</h2>
					<h3 class="box-title mb-0">Product Name</h3>
					<small class="text-muted db">Lorem Ipsum Dummy Text</small>
				</div>
              </div>
            </div>
		  </div>
	  </div>

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
			<a class="nav-link" href="product-details.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="product-details.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="product-details.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-info"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="../../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="../../../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- SlimScroll -->
	<script src="../../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

	<!-- FastClick -->
	<script src="../../../assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Fab Admin App -->
	<script src="../../js/template.js"></script>

	<!-- Fab Admin for demo purposes -->
	<script src="../../js/demo.js"></script>

    <script type="text/javascript">
    $(function() {
        $('.icolors li').on("click", function() {
            $('.icolors li').removeClass('active');
            $(this).addClass('active');
        });

        $('.photos-item').on("click", function() {
            var src = $(this).children().attr('src');
            $('#product-image').attr('src', src);
            $('.photos-item').removeClass('item-active');
            $(this).addClass('item-active');
        });
    });
    </script>

@stop
