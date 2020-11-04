@extends('layouts.adminLayout.admin_design')
@section('content')
 <div class="row" style="width: 100%">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
         <form id="make_form" method="" action="">
             @csrf
         <h2>Add Make(Company Name)</h2>
         <div class="make_name">
             <h5>Make Name:</h5>
             <input class="form-control form-control-lg" autocomplete="off" name="inputtxt" required id="make" type="text" placeholder="Make Name">
             
         </div>
         <div class="status"></div>
         <div class="get_started">
                <button type="submit" id="add_make" class="btn btn-success">Add </button>
         </div>
         </form>
     </div>
     <div class="col-sm-2"></div>
 </div>
@endsection