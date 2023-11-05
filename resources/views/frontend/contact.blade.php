@extends('layouts.frontend.app')
@section('route_name') Contact @endsection
@section('contents')
<div class="typography mb-50">
	<h1 class="hrBothSides"><span>Contact Us</span></h1>
</div>
<section class="ftco-section ftco-no-pt intro container justitfy">
	<h4 style="padding: 20px">
			{!! $about_details->short_description !!}
	</h4>
	<div class="container">
			<div class="mapouter">
					<div class="gmap_canvas">
							<iframe width="100%" height="400px" id="gmap_canvas" src="{{ App\Helper\AdditionalResources::appInfo('map_url') }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
							</iframe>
					</div>
			</div>
	</div>

	<div class="row container mt-50">
			<div class="col-sm-8 mb-50">
					<h4>Get in Touch With Us</h4>
					<form id="contactform" method="POST">
							<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
									<input required name="name" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="text" placeholder="Your Name">
									<span class="focus-border">
											<i></i>
									</span>
							</div>
							<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
									<input required name="phone" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="text" placeholder="Mobile No.">
									<span class="focus-border">
											<i></i>
									</span>
							</div>
							<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
									<input name="email" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="email" placeholder="example@gmail.com">
									<span class="focus-border">
											<i></i>
									</span>
							</div>
							<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
									<input required name="address" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="text" placeholder="Your Address">
									<span class="focus-border">
											<i></i>
									</span>
							</div>
							<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
									<textarea required cols="30" rows="6" name="message" style="padding: 10px; border-radius: 4px; height: 120px; width: 100%" class="effect-8" type="text" placeholder="Write here..."></textarea>
									<span class="focus-border">
											<i></i>
									</span>
							</div>
							<button class="btn btn-primary">Submit</button>
					</form>
			</div>

			<div class="col-sm-3" style="padding: 0px 15px!important">
					<div class="media contact-info">
							<span class="contact-info__icon"><i class="fa-solid fa-house-user"></i></span>
							<div class="media-body">
									<h3>{{ App\Helper\AdditionalResources::appInfo('address') }}</h3>
							</div>
					</div>
					<div class="media contact-info">
							<span class="contact-info__icon"><i class="fa-solid fa-phone-volume"></i></span>
							<div class="media-body">
									<h3>{{ App\Helper\AdditionalResources::appInfo('phone_one') }}</h3>
									<h3>{{ App\Helper\AdditionalResources::appInfo('phone_two') }}</h3>
									<p>{{ App\Helper\AdditionalResources::appInfo('office_time') }}</p>
							</div>
					</div>
					<div class="media contact-info">
							<span class="contact-info__icon"><i class="fa-solid fa-envelope"></i></span>
							<div class="media-body">
									<h3>{{ App\Helper\AdditionalResources::appInfo('email') }}</h3>
									<p>Send us your query anytime!</p>
							</div>
					</div>
			</div>
	</div>

	<style>
		.branch-container{ 
			padding: 0 20px;
			display:grid;
			gap: 20px;
			grid-template-columns: repeat(1, 1fr);
		}

		.branch-box {
			max-width: 300px;
			width: 100%;
			padding: 16px;
			border: 1px solid #ccc;
			border-radius: 12px;
			box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.12);
		}

		.branch-box .branch-card {
			width: 100%;
			display: flex; 
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.branch-box .branch-card__heading{
			margin: 0 14px;
			padding: 4px 10px;
			font-size: 17px;
			font-weight: 500;
			background: #eb2650;
			color: #fff;
			border-radius: 18px;
			box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.12)
		}

		.branch-box .branch-card__address {
			font-size: 15.5px;
			padding: 12px;
			line-height: 1.3;
			text-align: center;
		}

		.branch-box .branch-card__email,
		.branch-box .branch-card__phone {
			font-size: 15px;
			padding: 6px; 
			word-break: break-all;
			text-align: center;
		}

		@media (min-width: 644px) {
			.branch-container {
				grid-template-columns: repeat(2, 1fr);
			}
		}
		
		@media (min-width: 920px) {
			.branch-container {
				grid-template-columns: repeat(3, 1fr);
			}
		}

		@media (min-width: 1244px) {
			.branch-container {
				grid-template-columns: repeat(4, 1fr);
			}
		}
	</style>

	<div class="pt-3 mt-lg-5">
		<div class="branch-container">
			
			@foreach ($branches as $branch)
					<div class="branch-box">
							<div class="branch-card">
									<span class="branch-card__heading">{{ $branch->name }}</span>
									<div class="branch-card__address">{{ $branch->address }}</div>
									<div class="branch-card__email">{{ $branch->primary_email }} 
										@if ($branch->secondary_email) <br> {{ $branch->secondary_email }} @endif
									</div>
									<div class="branch-card__phone">
										{{ $branch->primary_phone }}
										@if ($branch->secondary_phone) <br> {{ $branch->secondary_phone }} @endif
									</div>
							</div>
					</div>
			@endforeach

		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      }
    });

    $("#contactform").submit(function(event){
      event.preventDefault();

      $.ajax({
        url: "{{ route('admin.client-message.store') }}",
        method: 'POST',
        data: $(this).serialize(),
        success: function(data){
          alert(data.message);
          event.target.reset();
        },
        error: function(error){
          alert('There is an serious error occurred, Please try again.' + 'Error: ' + error?.message);
        }

      });
    });
  });
</script>

@endsection
