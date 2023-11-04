@extends('layouts.frontend.app')
@section('contents')
	<div class="typography" id="serviceSection">
		<h1 class="hrBothSides"><span>Services</span></h1>
	</div>
	<section class="ftco-section ftco-no-pt intro">
		<div class="container">
			<div class="row featureImg">
				
				@foreach ($services as $service)
					<div class="col-md-4 d-flex align-self-stretch">
						<div class="d-block services justify-content-between">
							<div class="icon align-items-center justify-content-center">
								<img src="{{ asset($service->image) }}" />
							</div>
							<div class="media-body">
								<h3 class="heading">{{ $service->title }}</h3>
								<p class="mb-0">
									{!! $service->short_description !!}
								</p>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</section>
	<div class="typography">
		<h1 class="hrBothSides">
			<span>{{ App\Helper\AdditionalResources::appInfo('processing_page_title') }}</span>
		</h1>
	</div>
	<div class="services-area services-area2 section-padding40">
		<div class="container">
			<div class="row justify-content-sm-center" style="justify-content: center">
				<div style="display: contents">
					
					@foreach ($delivery_items as $key => $item)
						<input class="plan" type="radio" name="plan" id="{{ $key+1 }}" value="{{ $key+1 }}" data-id="{{ $item->id }}" />
						<label data-id="{{ $item->id }}" class="plan labl genric-btn primary-border circle circle{{ $key+1 }} {{ $key == 0 ? 'circle-selected' : '' }}" for="plan{{ $key+1 }}">{{ $item->title }}</label>
					@endforeach

				</div>
				<div class="section over-hide">
					<div class="typography mt-20">
						<h2>Please Select Your Product(s) Weight</h2>
					</div>
					<div class="section over-hide">
						<div class="container pb-2">
							<div class="row justify-content-center pb-3">
								<div class="col-xl-10 pb-2">
									
									@foreach ($delivery_weights as $key => $weight)
										<input
											class="checkbox-budget product_weight {{ $key == 0 ? 'weight active' : '' }}"
											type="radio"
											name="payment"
											id="budget-{{ $key+1 }}"
											value="{{ $weight->weight }}"
											data-id="{{ $weight->id }}"
										/>
										<label class="for-checkbox-budget" for="budget-{{ $key+1 }}">
											<span data-hover="{{ $weight->attribute }} {{ $weight->weight }} {{ $weight->unit }}">{{ $weight->attribute }} {{ $weight->weight }} {{ $weight->unit }}</span>
										</label>
									@endforeach

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section over-hide">
					<div class="col-md-12">
						<div class="login100-pic js-tilt" data-tilt>
							<div class="deliveryCharge">
								<div class="deliveryChargeRate verticalMiddle">
									<h3 style="color: white; text-decoration: underline">
										Your Delivery Charge
									</h3>
									<h1 style="color: white; font-size: 5rem" class="totalCharge">
										BDT <span id="totalCharge">100</span>
									</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="container section over-hide justify-content-center text-center align-items-center center"
				>
					<div class="row mt-5 d-flex chart-card" style="padding: 10px">

						@foreach ($delivery_details as $item)
							<div class="col-sm-3 d-flex align-self-stretch">
								<div class="d-block delivery-content justify-content-between">
									<span
										>{!! $item->short_description !!}</span
									>
								</div>
							</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="typography mb-50">
		<h1 class="hrBothSides"><span>Three Step processing</span></h1>
	</div>
	<section class="ftco-section ftco-no-pt intro">
		<div class="container">
			<div class="row">

				@foreach ($processing_details as $item)
				<div class="col-md-4 d-flex align-self-stretch">
					<div class="d-block services justify-content-between">
						<div class="icon align-items-center justify-content-center">
							<img src="{{ asset($item->image) }}" />
						</div>
						<div class="media-body">
							<h3 class="heading">{{ $item->title }}</h3>
							<p class="mb-0">
								{!! $item->short_description !!}
							</p>
						</div>
					</div>
				</div>
				@endforeach
						
			</div>
		</div>
	</section>
	<div class="typography">
		<h1 class="hrBothSides"><span>Service Area</span></h1>
	</div>
	<section class="ftco-section ftco-no-pt intro">
		<div class="row" style="padding: 0 10px">
			<div class="text-center col-sm-6">
				<img
					src="{{ App\Helper\AdditionalResources::appInfo('map_image') }}"
					style="width: 90%; height: auto"
				/>
			</div>
			<div class="col-sm-6">
				<div class="accordion js-accordion">
					
					@foreach ($areas as $area)
						<div class="accordion__item js-accordion-item active">
							<div class="accordion-header js-accordion-header">{{ $area->title }}</div>
							<div class="accordion-body js-accordion-body">
								<div class="accordion js-accordion">

									@foreach ($area->sub_areas as $sub_area)
										<div class="accordion__item js-accordion-item">
											<div class="accordion-header js-accordion-header">
												{{ $sub_area->title }}
											</div>
											<div class="accordion-body js-accordion-body">
												<div class="accordion-body__contents">
													{!! $sub_area->short_description !!}
												</div>
											</div>
										</div>
 									@endforeach
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<!-- end of accordion -->
			</div>
		</div>
	</section>
	<div class="typography">
		<h1 class="hrBothSides"><span>Why Choose Us</span></h1>
	</div>
	<div
		class="container section over-hide justify-content-center text-center align-items-center center"
	>
		<div class="row mt-5 d-flex" style="padding: 10px">
			
			@foreach ($accordions as $key => $accordion)
				<div class="col-sm-6 d-flex align-self-stretch">
					<div class="d-block whyus-content justify-content-between {{ $key % 2 == 0 ? '' : 'bg-black' }}">
						<span>{!! $accordion->short_description !!}</span>
					</div>
				</div>
				<div class="col-sm-6 d-flex align-self-stretch"></div>
				<div class="col-sm-6 d-flex align-self-stretch"></div>
			@endforeach
			
		</div>
	</div>
	<div style="height: 50px"></div>
	<div class="typography">
		<h1 class="hrBothSides"><span>What Our Team Says</span></h1>
	</div>
	<section class="team-area section-padding40 fix">
		<div class="container">
			<div class="team-active">

				@foreach ($testimonials as $testimonial)
					<div class="single-cat text-center">
						<div class="cat-icon">
							<img
								src="{{ asset($testimonial->thumbnail) }}"
								style="width: 100px"
								alt=""
							/>
						</div>
						<div class="cat-cap hrBothSides">
							<h5><a href="#">{{ $testimonial->name }}</a></h5>
							<h5>{{ $testimonial->title }}</h5>
							<p>
								{!! $testimonial->short_description !!}
							</p>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<div class="typography" id="aboutSection">
		<h1 class="hrBothSides"><span>{{ $about_details->heading }}</span></h1>
	</div>
	<section class="ftco-section ftco-no-pt intro">
		<div class="container text-center">
			<p>
				{!! $about_details->short_description !!}
			</p>
		</div>
	</section>
	<!-- <div style="height: 100px"></div> -->
	<div class="col-sm-12 text-center">
		<img
			src="{{ asset($about_details->image) }}"
			class="bahokMobile"
		/>
	</div>

@endsection

@push('scripts')
		<script>
			const delivery_data = @json($delivery_all_items);

			$('.plan.labl').click(function(){
				const id  = $(this).attr('data-id');
				const data = delivery_data.find(delivery => delivery.id == id);

				const weight_id = $('.product_weight.active').attr('data-id');

				const delivery_price = data.delivery_prices.find(delivery => delivery.weight_id == weight_id);

				$('#totalCharge').html(delivery_price.price)
				console.log(delivery_price);
				$('.plan.labl').removeClass('circle-selected');
				$(this).addClass('circle-selected');
			});

			$('.product_weight').click(function(){
				$('.product_weight').removeClass('active weight')
				$(this).addClass('active weight');
				
				const id  = $('.plan.labl.circle-selected').attr('data-id');
				const data = delivery_data.find(delivery => delivery.id == id);

				const weight_id = $('.product_weight.active').attr('data-id');

				const delivery_price = data.delivery_prices.find(delivery => delivery.weight_id == weight_id);

				$('#totalCharge').html(delivery_price.price)
			})

			$('.product_weight.active').click();

		</script>
@endpush