@extends('layouts.adminLayout.admin_design')
@section('content')
 
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">All model(Car Model)</h3>
                        <div class="status"></div>
                
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
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
                                            @foreach($model_data as $val)
                                                 @php
                                                    $i = $i+1;
                                                 @endphp
                                                <tr>                                           
                                                <th scope="row">{{$i}}</th>
                                                <td>{{$val->id}}</td>
                                                @foreach($make_data as $val2) 
                                                    @if($val->make_id==$val2->id)           
                                                    <td id="{{$val2->id}}" class="car_name edit2">{{$val2->make_name}}</td>
                                                    @endif
                                                @endforeach
                                                <td id="{{$val->id}}" contentEditable='true' class="car_name edit2">{{$val->model_name}}</td>
                                                <td> <a href="{{url('/admin/delete-model/'.$val->id)}}"><button value="{{$val->id}}" type="button" class="btn btn-danger model_delete">Delete</button></a></td>
                                                </tr>         
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
                </div><!-- /Page Inner -->
@endsection