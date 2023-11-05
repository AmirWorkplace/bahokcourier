@extends('layouts.frontend.app')
@section('route_name') Privacy Policy @endsection
@section('contents')
<div class="typography mb-50">
  <h1 class="hrBothSides" style=""><span>Privacy Policy</span></h1>
  <div class="row">
      <div class="col-md-8 offset-md-2 about">
          <div class="about-section">
              <p>
                  {!! $heading_description !!}
              </p>
          </div>
          
          @foreach ($privacies as $privacy)
            <div class="about-section">
                <fieldset>
                    <legend><h2>{{ $privacy->title }}</h2></legend>
                    <div>
                      {!! $privacy->description !!}
                    </div>
                </fieldset>
            </div> 
          @endforeach
          
      </div>
  </div>
</div>
@section('route_name') About @endsection
