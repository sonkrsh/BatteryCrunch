@extends('layouts.adminLayout.admin_design')
@section('content')
 <div class="row" style="width: 100%">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
         <form id="model_form" method="" action="">
             @csrf
         <h2>Add Model(Company Model)</h2>
         <div class="model_name">
         <h5>Select Made(Company Name):</h5>
         <select name="car" class="form-control makeVal" data-show-subtext="true" data-live-search="true" required>
              <option value="" disabled selected>Choose your Car</option>     
              @foreach($make_data as $val)
                 <option value="{{$val->id}}">{{$val->make_name}}</option>
              @endforeach      
        </select>
       
             <h5>Model Name:</h5>
             <input class="form-control form-control-lg" autocomplete="off" name="inputtxt" required id="model" type="text" placeholder="model Name">
         </div>
         <div class="status"></div>
         <div class="get_started">
                <button type="submit" style="width:100%;margin-top:5%" id="add_model" class="btn btn-success">Add </button>
         </div>
         </form>
     </div>
     <div class="col-sm-2"></div>
 </div>
@endsection