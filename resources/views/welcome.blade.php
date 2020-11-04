@extends('layouts.frontLayout.website_design')
@section('website_content')
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="box">
          <form id="searchForm" action="{{url('/location')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <h3 class="battery_text">Seach Right Car Battery</h3>
            <h3 class="req_text">Request For Call Back</h3>
            <div class="header">
              <div class="batter_req" data-track-section="tab">
                <li class="car_battery">Car Batteries</li>
                <li class="req_call">Request CallBack</li>
              </div>
            </div>

            <div class="search_box1">
              <div class="select_location">
                <input id="input_location" autocomplete="off" name="location" required class="form-control form-control-lg" style="background-color: white;" type="text" placeholder="Select .Location">
                <ul class="list-group" id="location">
                  @foreach($location as $locations)
                  <li value="{{$locations->id}}" class="list-group-item">{{ $locations->location_name }}</li>
                  @endforeach

                </ul>
              </div>
              <div class="select_vechile">
                <input class="form-control form-control-lg" autocomplete="off" required  style="background-color: white;" id="main_search" type="text" placeholder="Search">

                <div class="select_car">

                  <ul class="list-group" id="car">

                    <input class="form-control form-control-lg make" name="make" value="" id="car_input" type="text" placeholder="Select ManuFacture , eg MAruti">
                    @foreach($make as $makes)
                    <li value="{{$makes->id}}" class="list-group-item">{{ $makes->make_name }}</li>
                    @endforeach

                  </ul>

                </div>

                <div class="select_model">
                  <ul class="list-group" id="model">

                    <input class="form-control form-control-lg model" name="model" class="custm" id="model_input" type="text" placeholder="Select ManuFacture Model, eg Marti 800">

                  </ul>
                </div>
              </div>
              <div class="select_fuel_l">
                <input class="form-control form-control-lg" autocomplete="off" required id="fuel" style="background-color: white;" type="text" placeholder="Select Fuel">

                <div class="fuel_search">

                  <ul class="list-group" id="fuel_list">

                    <input class="form-control form-control-lg fuel" name="fuel" id="fuel_input" type="text" placeholder="Select Fuel">
                    @foreach($fuel as $fuels)
                    <li value="{{$fuels->id}}" class="list-group-item">{{ $fuels->fuel_name}}</li>
                    @endforeach

                  </ul>

                </div>
              </div>
              <div class="get_started">
                <button type="submit" id="get_strt" class="btn btn-success">Get Started</button>
              </div>
            </div>
            </form>
            <div class="search_box2">
             
              <form id="contactForm">
              @csrf
            <div class="select_location">
            <div class="message">
            </div>
                <input class="form-control form-control-lg" autocomplete="off" id="contact_name" name="name" required type="text" placeholder="Name">
              </div>
              <div class="select_vechile">
              <h5 id="cunty_code">+91</h5>
                <input class="form-control form-control-lg" type="text" maxlength="13" autocomplete="off" id="contact_no" name="contactno" required placeholder="Contact Number">
              </div>
              <div id="recaptcha-container"></div>
              <div style="display: none" class="otp_confirm">
                <input type="text" class="form-control form-control-lg" id="verificationCode" placeholder="Enter verification code">
                <button type="button" id="verifycode">Verify code</button>
              </div>
              
              <div class="get_started">
                <button type="submit" id="get_submit" class="btn btn-success">Submit</button>
              </div>
              </form>
            
            </div>
         
        </div>

      </div>
      <div class="col-sm-8">
        <span id="check"></span>
      </div>
    </div>


  </div>

<@endsection