@php 
	$app_info = App\Helper\AdditionalResources::appInfo();
@endphp

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $app_info['title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('frontend/images/favicon.png') }}"
    />
    <style>
      :root {
        --wave-image: url("{{ $app_info['wave_image'] }}");
        --running-bike-image: url("{{ $app_info['running_bike_image'] }}");
        --top-banner-image: url("{{ $app_info['banner_image'] }}");
        --footer-image: url("{{ $app_info['footer_image'] }}");
        --bahok-footer-image: url("{{ $app_info['footer_image'] }}");
      }
    </style>
    @include('layouts.frontend.partial.css') @stack('styles')
  </head>

  <body>
    @include('layouts.frontend.partial.header')
    <!-- Header End -->
    <main>
      @include('layouts.frontend.partial.overlay')

      <!-- Main Contents -->
      @yield('contents')
    </main>
    <!-- Footer -->
    @include('layouts.frontend.partial.footer')

    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- JS here -->
    @include('layouts.frontend.partial.scripts') 
    @stack('scripts')
  </body>
</html>
{{-- 
<style>
      :root {
        --wave-image: url("{{ asset('frontend/images/wave.png') }}");
        --running-bike-image: url("{{ asset('frontend/images/deliveryBike.gif') }}");
        --top-banner-image: url("{{ asset('frontend/images/topBanner.jpg') }}");
        --footer-image: url("{{ asset('frontend/images/footerImg.png') }}");
        --bahok-footer-image: url("{{ asset('frontend/images/bahokFooterBg.png') }}");
      }
    </style>
	
	--}}