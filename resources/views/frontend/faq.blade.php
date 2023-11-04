@extends('layouts.frontend.app')
@section('contents')
	<div class="typography mb-50">
		<h1 class="hrBothSides"><span>Frequently Asked Questions</span></h1>
	</div>
	<section class="ftco-section ftco-no-pt intro">
		<div class="row" style="padding: 0 10px">
			<div class="col-sm-12">
				<div class="accordion js-accordion" style="width: 80%">
					
					@foreach ($faqs as $faq)
						<div class="accordion__item js-accordion-item">
							<div class="accordion-header js-accordion-header">
								{{ $faq->title }}
							</div>
							<div class="accordion-body js-accordion-body">
								<div class="accordion-body__contents bwColor">
									{!! $faq->short_description !!}
								</div>
								<div class="accordion js-accordion"></div>
								<!-- end of sub accordion -->
							</div>
							<!-- end of accordion body -->
						</div>
					@endforeach
					
				</div>
				<!-- end of accordion -->
			</div>
		</div>
	</section>
@endsection
