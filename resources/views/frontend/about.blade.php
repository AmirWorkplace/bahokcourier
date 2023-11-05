@extends('layouts.frontend.app')
@section('route_name') About @endsection
@section('contents')
<div style="height: 100px"></div>
<div class="typography mb-50 px-2">
  <h1 class="hrBothSides" style=""><span>{{ $about_details->title }}</span></h1>
  <div class="row">
    <div class="col-md-8 offset-md-2 about">
      <div class="about-section">
        <p class="text-justify">
          {!! $about_details->short_description !!}
        </p>
      </div>

      @foreach ($about_faqs as $faq)
      <div class="about-section">
        <fieldset>
          <legend><h2>{{ $faq->title }}</h2></legend>
          <p class="text-justify">
            {!! $faq->short_description !!}
          </p>
        </fieldset>
      </div>
      @endforeach
      
      {{-- <div class="about-section">
        <fieldset>
          <legend><h2>Our Mission :</h2></legend>
          <p>
            Our delivery services are primarily for e-commerce businesses. But
            we also deliver non-ecommerce Company, shop’s and other company who
            wants to deliver documents, small parcel etc. Our target is:
          </p>
        </fieldset>
        <ul class="mission-list">
          <li>
            To provide total logistic support to our client i,e one stop
            solution.
          </li>
          <li>
            As e-commerce is now growing business, our target is to grow our
            business through quality service and value for money.
          </li>
          <li>
            To be innovative, professional and build business partnerships.
          </li>
        </ul>
      </div> --}}
    </div>
  </div>
</div>

@endsection
