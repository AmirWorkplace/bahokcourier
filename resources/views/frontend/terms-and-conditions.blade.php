@extends('layouts.frontend.app')
@section('route_name') Terms and Conditions @endsection
@section('contents')
<div class="typography mb-50">
  <h1 class="hrBothSides"><span>Terms & Condition</span></h1>
  <div class="row">
      <div class="col-md-8 offset-md-2 about">
        
        @foreach ($terms_and_conditions as $item)
          <div class="about-section">
              <fieldset>
                  <legend><h2>{{ $item->title }}</h2></legend>
                  <div>{!! $item->description !!}</div>
              </fieldset>
          </div> 
        @endforeach
          
          <div class="about-section">
              
              <fieldset>
                    <legend><h2>Price Chart are in following:</h2></legend>
                    @foreach ($delivery_all_items as $key => $item)
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <h4>Price List For Parcel ({{ $item->title }})</h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Time</th>
                                        
                                        @foreach ($item->delivery_prices as $price)
                                            <th>{{ $price->delivery_weights->attribute }} {{ $price->delivery_weights->weight }} {{ $price->delivery_weights->unit }}</th>
                                        @endforeach
                                        
                                    </tr>
                                        <tr>
                                            <td>{{ $item->qty ?? 'Any' }}</td>
                                            <td>{{ $item->time ?? 'Next Day (24H-48H)' }}</td>
                                            @foreach ($item->delivery_prices as $price)
                                                <td>{{ $price->price }}</td>
                                            @endforeach
                                        </tr>
                                </table>
                            </div>
                        </div>
                    @endforeach
                  
                  {{-- <ul class="mission-list">
                      <li>1% COD(Cash on Delivery) Charges will be applied</li>
                      <li>PRICE MAY VARY ON THE PACKET SIZE OF THE PRODUCT</li>
                      <li>Sundorban/SA paribahan Booking Charge 30/= per parcel</li>
                  </ul> --}}
              </fieldset>

          </div>
      </div>
  </div>
  
</div>

@endsection