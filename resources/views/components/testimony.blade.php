<!-- Section Testimonials  -->
				<section data-id="3fd6ac1e" class="elementor-element elementor-element-3fd6ac1e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div data-id="257c313b" class="elementor-element elementor-element-257c313b elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div data-id="ca13f19" class="elementor-element elementor-element-ca13f19 elementor-widget elementor-widget-heading" data-element_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">What our clients say</h2>		
											</div>
										</div>
										<div data-id="778affe" class="elementor-element elementor-element-778affe elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
											<div class="elementor-widget-container">
												<div class="elementor-text-editor elementor-clearfix">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											</div>
										</div>
										<section data-id="5feac36" class="elementor-element elementor-element-5feac36 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section">
											<div class="elementor-container elementor-column-gap-extended">
												<div class="elementor-row">
                                                
                                                @if (count($testimonies))
                                                @foreach($testimonies as $testimony)
													<div data-id="0cd32f5" class="elementor-element elementor-element-0cd32f5 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div data-id="a661e0a" class="elementor-element elementor-element-a661e0a atu-logistics-testimonials elementor-widget elementor-widget-testimonial" data-element_type="testimonial.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-testimonial-wrapper elementor-testimonial-text-align-left">
																			<div class="elementor-testimonial-content">
                                                                                
                                                                                 {!! $testimony->testimony !!}
                                                                                
                                                                            </div>
																			<div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
																				<div class="elementor-testimonial-meta-inner">
																					<div class="elementor-testimonial-image">
																						<img width="80" height="80" src="https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/uploads/sites/89/2018/07/t1.png" class="attachment-full size-full" alt="" />						
																					</div>

																					<div class="elementor-testimonial-details">
																						<div class="elementor-testimonial-name">
                                                                                            {{$testimony->username}}
                                                                                        </div>
																						<div class="elementor-testimonial-job">- 
                                                                                            {{$testimony->location ?? 'Unknown'}}
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
                                                @endforeach
                                                @endif
                                                
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

		<!-- End Sections -->