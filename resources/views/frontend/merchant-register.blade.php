@extends('layouts.frontend.app')
@section('route_name') Merchant Register @endsection
@section('contents')

  <style>
    .merchant-form-body {
      margin-top: 30px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .merchant-form-body form{
      max-width: 800px;
      width: 100%;
      padding: 25px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.12);
    }

    .merchant-form__heading {
      font-size: 22px;
      font-weight: 700;
      padding: 10px 0;
    }

    .merchant-form-body form .group-input {
      padding: 6px 0;
      width: 100%;
      /* margin-top: 6px; */
    }

    .merchant-form-body form .group-input textarea,
    .merchant-form-body form .group-input select,
    .merchant-form-body form .group-input input {
      width: 100%;
      padding: 14px;
      border: 1px solid #bebebe;
      font-size: 14px;
      border-radius: 4px;
      outline: none;
      font-weight: 400;
      font-family: "Poppins", sans-serif;
      /* padding: 10px; border-radius: 4px; height: 44px; width: 100% */
    }

    .merchant-form-body form .group-input input { padding: 19px 12px; }
    .merchant-form-body form .group-input select:focus,
    .merchant-form-body form .group-input textarea:focus,
    .merchant-form-body form .group-input input:focus{
      border: 1px solid #eb2650;
      outline: none;
    }

    .merchant-form-body form .group-input button {
      background: #eb2650;
      color: #ffffff;
      font-weight: 700;
      font-size: 16px;
      padding: 8px 0;
      text-align: center;
      text-transform: uppercase;
      border-radius: 6px;
      height: auto !important;
    }

    .merchant-form-body form .group-input-double {
      display: flex;
      flex-direction: column;
      width: 100%;
      /* width: 98%; */
      /* gap: 15px */
    }

    @media (min-width: 644px) {
      .merchant-form-body form .group-input-double {
        flex-direction: row;
        gap: 15px;
      }
    }
    
    .nice-select { width: 100%; }
    /* #navigation li a button span { color: #000; } */
    #navigation  { pointer-events: none !important; }
    /* #navigation li { display: none !important; } */
  </style>
  <section class="p-5 d-100">
    <div class="merchant-form-body container">
      <form action="#" method="POST">
        @csrf

        <div class="merchant-form__heading">Become a Merchant</div>

        <div class="group-input pt-3">
          <select type="text">
            <option value="">How can you know about us</option>
            <option value="1">Advertisement</option>
            <option value="2">Online Shopping</option>
            <option value="3">Rasel Store</option>
            <option value="4">F&F Fashion House</option>
          </select>
        </div>

        <div class="group-input" style="margin-top: 40px">
          <input type="text" placeholder="Merchant Name" class="form-control">
        </div>

        <div class="group-input">
          <input type="text" placeholder="Merchant Name" class="form-control">
        </div>

        <div class="group-input-double">
          <div class="group-input">
            <input type="text" placeholder="Merchant Name" class="form-control">
          </div>
          <div class="group-input">
            <input type="text" placeholder="Merchant Name" class="form-control">
          </div>
        </div>

        <div class="group-input">
          <input type="text" placeholder="Merchant Pickup Area" class="form-control">
        </div>

        <div class="group-input">
          <textarea cols="30" rows="2" placeholder="Merchant Address" class="form-control" style="padding: 8px 12px;"></textarea>
        </div>

        <div class="group-input">
          <input type="text" placeholder="E-mail" class="form-control">
        </div>

        <div class="group-input-double">
          <div class="group-input">
            <input type="password" placeholder="Password min:6 Character" class="form-control">
          </div>
           <div class="group-input">
            <input type="password" placeholder="Confirm Password" class="form-control">
          </div>
        </div>

        <div class="group-input">
          <button type="submit" class="form-control">Register Now</button>
        </div>

        <div class="group-input">
          <label for="logged">Already have an account? <a href="" class="text-danger">Login</a></label>
        </div>
				</div>
      </form>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    $(document).ready(function(){
      $('.overlay').addClass('d-none')
      $('.header-bottom.header-sticky').addClass('sticky-bar')
    });  
  </script>    


@endpush
    
{{--  // $('#back-top').addClass('d-block') <div class="col-sm-12 mr-2 mb-2 group-input" style="padding-left: 0px; padding-right: 0px">
  <select required name="phone" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="text" placeholder="Mobile No.">
    <option value="1">How can you know about us</option>
    <option value="2">How can you know about us</option>
  </select>
  <span class="focus-border">
    <i></i>
  </span>
</div>

<div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
  <input required name="phone" style="padding: 10px; border-radius: 4px; height: 44px; width: 100%" class="effect-8" type="text" placeholder="Mobile No.">
  <span class="focus-border">
    <i></i>
  </span> --}}