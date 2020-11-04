@extends('layouts.adminLayout.admin_design')
@section('content')
 <div class="row" style="width: 100%">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
         <form id="battery_company_form" method="post" action="{{url('/admin/battery-company')}}">
             @csrf
         <h2>Add battery_company(battery_company)</h2>
         <div class="battery_company_name">
             <h5>Add battery_company</h5>
             <input class="form-control form-control-lg" autocomplete="off" name="inputtxt" required id="battery_company" type="text" placeholder="battery_company Name">
         </div>
         <div class="status"></div>
         <div class="get_started">
                <button type="submit" style="width:100%;margin-top:5%" id="add_battery_company" class="btn btn-success">Add </button>
         </div>
         </form>

     </div>
     <div class="col-sm-2"></div>
 </div>
 <div class="row" style="width: 100%">
     <div class="col-sm-12" style="margin-top: 5%">
     <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Total Enrty</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>id</th>
                                                    <th>Company</th>
                                                    <th>model Name(Car Name)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                               $i=0;
                                            @endphp
                                            @foreach($battery_blade_data as $val)
                                                 @php
                                                    $i = $i+1;
                                                 @endphp
                                                <tr>                                           
                                                <th scope="row">{{$i}}</th>
                                                <td>{{$val->id}}</td>
                                                <td id="{{$val->id}}" class="car_name edit2">{{$val->BatteryCompany}}</td>
                                                <td> <a href="{{url('/admin/delete-batteryCompany/'.$val->id)}}"><button value="{{$val->id}}" type="button" class="btn btn-danger model_delete">Delete</button></a></td>
                                                </tr>         
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
     </div>
 </div>
@endsection