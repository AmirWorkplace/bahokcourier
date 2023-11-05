@extends('layouts.frontend.app')
@section('route_name') Delivery Man Register @endsection
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
    }

    .merchant-form-body form .group-input-radio input.radio{
      visibility: visible;
      position: relative;
      left: 0;
      top: 0;
      width: auto;
      height: auto;
    }

    .merchant-form-body form .group-input-radio {
      display: flex;
      gap: 20px;
      margin-left: 30px;
      font-weight: 600;
      padding: 12px 0;
      cursor: pointer;
    }

    @media (min-width: 644px) {
      .merchant-form-body form .group-input-double {
        flex-direction: row;
        width: 100%;
        gap: 15px;
      }
    }
    
    #navigation  { pointer-events: none !important; }
    .nice-select { width: 100% !important; margin-bottom: 15px !important; border: 1px solid #bebebe !important;}

  </style>

  <section>
    <section class="p-5 d-100" id="delivery_agent_form" style="margin-top: 80px;">
      <div class="merchant-form-body container">
        <form action="#" method="POST">
          @csrf

          <div class="merchant-form__heading">Become a Delivery Agent</div>

          <div class="group-input">
            <input type="text" placeholder="Agent Name" class="form-control">
          </div>

          <div class="group-input-double" style="margin-bottom: -13px;">
            <div class="group-input">
              <input type="text" placeholder="Contact Person Name" class="form-control">
            </div>
            <div class="group-input">
              <input type="text" placeholder="Contact Person Phone" class="form-control">
            </div>
          </div>

          <div class="group-input">
            <select type="text">
              <option value="">Select Supporting Warehouse</option>
              <option value="1">Advertisement</option>
              <option value="2">Online Shopping</option>
              <option value="3">Rasel Store</option>
              <option value="4">F&F Fashion House</option>
            </select>
          </div>

          <div class="group-input">
            <select type="text">
              <option value="">Select A Hub</option>
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

          <div class="group-input">
            <select type="text">
              <option value="">Select Preferred Area</option> 
            </select>
          </div>

          <div class="group-input">
            <textarea cols="30" rows="2" placeholder="Agent's Address" class="form-control" style="padding: 8px 12px;"></textarea>
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

    
    <section class="p-5 d-100 d-none" id="delivery_man_form">
      <div class="merchant-form-body container">
        <form action="#" method="POST">
          @csrf

          <div class="merchant-form__heading">Become a Delivery Man</div>

          <div class="group-input-radio">
            <label for="delivery_agent">
              <input type="radio" class="delivery_agent radio form-input" name="delivery_agent" id="delivery_agent1"> <span>Delivery Agent</span>
            </label>
            <label for="delivery_man">
              <input type="radio" class="delivery_man radio form-input" checked name="delivery_man" id="delivery_man1"> <span>Delivery Man</span>
            </label>
          </div>

          <div class="group-input">
            <input type="text" placeholder="Delivery Man Name" class="form-control">
          </div> 

          <div class="group-input">
            <input type="text" placeholder="Delivery Preferred Area" class="form-control">
          </div> 

          <div class="group-input">
            <input type="text" placeholder="E-mail" class="form-control">
          </div>

          <div class="group-input">
            <input type="text" placeholder="Phone Number" class="form-control">
          </div> 

          <div class="group-input">
            <textarea cols="30" rows="2" placeholder="Agent's Address" class="form-control" style="padding: 8px 12px;"></textarea>
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
  </section>


@push('scripts')
  <script>
    $(document).ready(function(){
      $('.overlay').addClass('d-none');
      $($('.nice-select')[0]).css('margin-top', '15px');
      $('.header-bottom.header-sticky').addClass('sticky-bar');
    });  
  </script>    
@endpush