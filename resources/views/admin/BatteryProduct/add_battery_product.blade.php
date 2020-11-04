@extends('layouts.adminLayout.admin_design')
@section('content')
 <div class="row" style="width: 100%">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
         <form id="battery_product_form" enctype="multipart/form-data"  method="post" action="{{url('/admin/add-battery')}}">
             @csrf
         <h2>Add battery_product(battery_product)</h2>
         <div class="makename">
         <h5>Select Make</h5>

         <select name="make" id="slt_make" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" required>
              <option value="#" disabled selected>Choose your Car</option>     
              @foreach($make as $val)
                 <option class="xselect" value="{{$val->id}}">{{$val->make_name}}</option>
              @endforeach      
        </select>

         </div>
         <div class="modelname">
         <h5>Select Model</h5>
         <select name="model" class="form-control jquery_append" required>
         <option value="#" disabled selected>Choose your model</option>  
                     
        </select>


         </div>
         <div class="fuelname">
         <h5>Select Fuel</h5>

         <select name="fuel" class="form-control" data-show-subtext="true" data-live-search="true" required>
              <option value="" disabled selected>Choose your Car</option>     
              @foreach($fuel as $val)
                 <option value="{{$val->id}}">{{$val->fuel_name}}</option>
              @endforeach      
        </select>


         </div>
         <div class="batteryname">
             <h5>Select Battery Company</h5>

             <select name="battery" class="form-control" required>
              <option value="" disabled selected>Choose your Battery</option>     
              @foreach($battery as $val)
                 <option value="{{$val->id}}">{{$val->BatteryCompany}}</option>
              @endforeach      
            </select>

         </div>
         <div class="battery_product_name">
             <h5>Add battery_product</h5>
             <input class="form-control form-control-lg" autocomplete="off" name="product_name" required id="battery_product" type="text" placeholder="Product Name">
         </div>

         <div class="price">
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">Rs</div>
                <input type="number" min="0.00" step="0.05" value="1.00" name="price" id="exampleInputAmount" class="form-control" placeholder="Price">
                </div>
            </div>
         </div>

         <div class="description">
             <h5>Description</h5>
             <input class="form-control form-control-lg" name="desc" required id="battery_product" type="text" placeholder="Description">
         </div>

         <div class="image">
            <label for="img">Select image:</label>
            <input required type="file" id="img" name="img" accept="image/*">
         </div>
         <div class="status"></div>
         <div class="get_started">
                <button type="submit" style="width:100%;margin-top:5%" id="add_battery_product" class="btn btn-success">Add Product</button>
         </div>
         </form>

     </div>
     <div class="col-sm-2"></div>
 </div>
@endsection