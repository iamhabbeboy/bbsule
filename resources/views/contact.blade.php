@extends('layouts.parent')
@section('content')
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
			<h2 class="elementor-heading-title elementor-size-default  animated bounceIn">Contact Us</h2>		</div>
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
			<h2 class="elementor-heading-title elementor-size-default">Get in touch</h2>		</div>
				</div>
				<div data-id="1b17d079" class="elementor-element elementor-element-1b17d079 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				<br><br>
				<div class="row">
					<div class="col-md-5" style="text-align: left !important">
						<form>
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Email Address</label>
								<input class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Content</label>
								<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
								<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">SUBMIT</span>
		</span>
					</a>
							</div>
						</form>
					</div>
					<div class="col-md-7">
						<div data-id="1d61ea14" class="elementor-element elementor-element-1d61ea14 elementor-widget elementor-widget-google_maps" data-element_type="google_maps.airi_google_maps">
				<div class="elementor-widget-container">

		<div id="airi-map"></div>

        <script type="text/javascript">

            function init() {

                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.712775, -74.005973), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"sairiration":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                var mapElement = document.getElementById('airi-map');

                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.712775, -74.005973),
                    map: map,
                    icon: "http://demo.athemes.com/atu-logistics/wp-content/uploads/sites/89/2018/07/marker.png",
                });


			}

        </script>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&callback=init"></script>

        <style type="text/css">
            #airi-map {
								width: 100%;
								height: 360px;
            }
        </style>

					</div>
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






@stop