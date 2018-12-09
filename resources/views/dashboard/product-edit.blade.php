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
        Add Products to Stock
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
				  <h3 class="box-title">About Product</h3>
				</div>
              <div class="box-body">
              {{--   @if (Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ session('message')}}</p>
                    </div>
                @endif --}}
				<form method="post" action="{{route('store_route')}}" >
                    @csrf
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">

                @if(Session::has('error'))
                  <div class="alert alert-info">{{session('error')}}</div>
                @endif
								<div class="form-group">
								  <label class="text-info">Caption</label>
								  <textarea class="form-control" required name="caption"></textarea>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">

							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="text-info">Category</label>
									<select class="form-control" tabindex="1" name="category" required>
                                        <option value="">select</option>
                                        @if(count($categories) > 0)
                                          @foreach($categories as $category)
                                            <option value="{{array_get($category, 'title')}}">{{array_get($category, 'title')}}</option>
                                          @endforeach
                                        @endif

									</select>
                  <p></p>
                  <a href="javascript:void" data-toggle="modal" data-target="#modal-default"> click to add category</a>
                    @include('components.modal')
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
                  <input type="hidden" value="publish" name="status">

								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">

							</div>
							<!--/span-->
							<div class="col-md-6">

							</div>

							<!--/span-->
						</div>

						<!--/row-->
						<div class="row">

							<div class="col-md-10">
								<h3 class="box-title mt-20">Upload Image</h3>
								<div class="product-img text-left">
                      <div id="product-preview">
                        <img src="/images/avatar.jpg" alt="" id="img-preview">
                      </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                             <div class="btn btn-success btn-sm" id="fileupload-multiple">
                                        <span><i class="ion-upload mr-5"></i>Upload Multiple Images</span>
                                    </div>
                                    </div>

                                        </div>
                                    </div>


									{{-- <button class="btn bg-info btn-sm">Edit</button> --}}

								</div>
							</div>
						</div>

					</div>
					<div class="s mt-10">
						<button class="btn btn-success btn-lg" type="submit"> <i class="fa fa-check"></i> Save</button>
						<button type="button" class="btn btn-danger btn-lg">Cancel</button>
					</div>
				</form>
                <form method="post" action="/ajax-pictures" enctype="multipart/form-data" id="product-form" multiple>
                    @csrf
                    <input type="file" id="upload" name="upload[]" multiple="" accept=".jpg,.png,.gif,.jpeg" style="visibility: hidden;">
                </form>
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

</div>
<!-- ./wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script>
  $(function(){
    $('#category-form').click(function() {
      const title = $('#title-modal')
      if (title.val()  === '') {
        title.focus();
        return false
      } else {
        $(this).text('please wait...').attr('disabled')
        const dataString = { title: title.val() };
        $.ajax({
          url: '/category',
          method: 'post',
          data: dataString,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        }).then(function(resp) {
          if (resp.hasOwnProperty('title')) {
            alert('Added Successfully !')
            window.location.reload()
          }
        }).catch(function(err) {
          alert('Error ocurred while processing data')
        })
      }
    })

    $('#fileupload-multiple').click(function() {
      $('#upload').click()
    })

    // $('#upload').change(function() {
    //   $('#product-form').ajaxForm({
    //     'target': '#product-preview'
    //   }).submit();
    // });

    $('#upload').change(function() {
      let formdata = new FormData();
      
        if($(this).prop('files').length > 0) {
          let file = $(this).prop('files');
          console.log(file)
          for (var x = 0; x < file.length; x++) {
            let filesize = Math.floor(file[x].size)/1024;
            let fileint = parseInt(filesize);
            if (fileint > 2048) {
              alert('Max file size is 2MB');
              return false;
            } else {
              formdata.append("upload[]", file[x]);
            }
          }
          // formdata.append("upload", file);
        }
        $('#product-preview').html('<i>please wait....</i>')
       const config = {
        url: '/ajax-pictures',
         data: formdata,
         method: 'post',
         contentType: false,
         processData: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      };
      $.ajax(config).then(function(resp) {
        // console.log(resp)
        $('#product-preview').html(`<div class="row">${resp}</div>`);
        //if (resp.hasOwnProperty('images')) {

          // let html = "<div class='row'>";
          // resp.images.forEach(function(value) {
          //   html += `<div class="col-md-3">
          //       <img src="/gallery/${value}" border="0" class="image" style="border:1px solid #ccc;padding:2px;"/>
          //     </div>`
          // })
          // html += "</div><br/>";
        //    $('#product-preview').html(html);
        // }
      }).catch(function(err) {
        console.log(err)
      })


    })
  })
</script>
@stop
