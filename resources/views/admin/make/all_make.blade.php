@extends('layouts.adminLayout.admin_design')
@section('content')
 
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">All Make(Car COmpany)</h3>
                        <div class="status"></div>
                
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Toatal Enrty</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>id</th>
                                                    <th>Make Name(Company Name)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                               $i=0;
                                            @endphp
                                            @foreach($data as $val)
                                                 @php
                                                    $i = $i+1;
                                                 @endphp
                                                <tr>
                                               
                                                <th scope="row">{{$i}}</th>
                                                <td>{{$val->id}}</td>
                                                <td id="{{$val->id}}" contentEditable='true' class="car_name edit">{{$val->make_name}}</td>
                                                <td> <a href="{{url('/admin/delete-make/'.$val->id)}}"><button value="{{$val->id}}" type="button" class="btn btn-danger make_delete">Delete</button></a></td>
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