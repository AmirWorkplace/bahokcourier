@extends('layouts.frontend.app')
@section('contents')
<div class="typography mb-50">
	<h1 class="hrBothSides" style=""><span>{{ $about_details->heading }}</span></h1>
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
