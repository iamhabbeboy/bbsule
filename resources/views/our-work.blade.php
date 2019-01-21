@extends('layouts.parent')
@section('content')

    <!-- <script src="/js/masonry.pkgd.min.js"></script> -->

<link rel="stylesheet" href="/css/lightbox.css"/>
	<div id="content" class="site-content">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

									<div class="elementor elementor-6">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section data-id="3271c67f" class="elementor-element elementor-element-3271c67f elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="4940b9f3" class="elementor-element elementor-element-4940b9f3 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="28f970c6" class="elementor-element elementor-element-28f970c6 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default animated bounceIn">Our Works</h2>		</div>
				</div>

						</div>
			</div>
		</div>
				<div data-id="1879c30b" class="elementor-element elementor-element-1879c30b elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap">
					<div class="elementor-widget-wrap">
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="1e3ed0a9" class="elementor-element elementor-element-1e3ed0a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="26a66581" class="elementor-element elementor-element-26a66581 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="7360c3df" class="elementor-element elementor-element-7360c3df elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default " >Our Work</h2>		</div>
				</div>
				<div data-id="1b17d079" class="elementor-element elementor-element-1b17d079 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
				</div>
				</div>

			@if(count($galleries) )
            @foreach($galleries as $gallery)
                <h3>{{$gallery->caption}}</h3>
                    <p>Category: {{$gallery->category}}</p>
                    <div class="row">
                      @foreach(explode(',', $gallery->image_path) as $pix)
                        @if($pix !== '')
                          <div class="col-md-3" style="margin-bottom: 15px;">
						  <a class="example-image-link" href="/picture/{{$pix}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" style="width:20vw;height: 20vw;border-radius: 9px;" src="/picture/{{$pix}}" alt=""/></a>
							</div>
                        @endif
                      @endforeach
                </div>
                <hr>
                <br>
                @endforeach
              @else
                <div class="alert alert-info">
                  <p>No Image for our work</p>
                </div>
               @endif
         {{-- <div class="clearfix"></div> --}}

						</div>
			</div>
		</div>
						</div>
			</div>
		</section>



						</div>
			</div>
		</div>
						</div>
			</div>
		</section>

				<section data-id="6c87aab0" class="elementor-element elementor-element-6c87aab0 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div data-id="45e1452f" class="elementor-element elementor-element-45e1452f elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="1d61ea14" class="elementor-element elementor-element-1d61ea14 elementor-widget elementor-widget-google_maps" data-element_type="google_maps.airi_google_maps">
				<div class="elementor-widget-container">





		</div>
				</div>
						</div>
			</div>
		</div>

		<section data-id="66fa81eb" class="elementor-element elementor-element-66fa81eb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="4ac38423" class="elementor-element elementor-element-4ac38423 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="3ca5126" class="elementor-element elementor-element-3ca5126 gallery-spacing-custom elementor-widget elementor-widget-image-gallery" data-element_type="image-gallery.default">
				<div class="elementor-widget-container">
					<div class="elementor-image-gallery">
			<div id='gallery-1' class='gallery galleryid-6 gallery-columns-5 gallery-size-medium'><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<img width="90" height="43" src="/images/user7-128x128.jpg" class="attachment-medium size-medium" alt="" />
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<img width="115" height="48" src="https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/uploads/sites/89/2018/07/2-1.png" class="attachment-medium size-medium" alt="" />
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<img width="137" height="44" src="https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/uploads/sites/89/2018/07/4-1.png" class="attachment-medium size-medium" alt="" />
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<img width="147" height="37" src="https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/uploads/sites/89/2018/07/5-1.png" class="attachment-medium size-medium" alt="" />
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<img width="196" height="41" src="https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/uploads/sites/89/2018/07/3-1.png" class="attachment-medium size-medium" alt="" />
			</div></figure>
		</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


	</div><!-- #content -->
 <script src="/client/lightbox.js"></script>

@stop