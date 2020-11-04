@extends('layouts.frontLayout.website_design')
@section('website_content')
<div class="row" style="width: 100%">
    <div class="container">
        <div class="battery">
            <div class="all_battery">
                <div class="product">
                    <div class="img">
                        <img src=" {{ asset('/images/backend_images/large/amaron.png')}}">
                    </div>
                    <div class="title">
                        <p>Amaron AA-BL-OBL 400RMF(35Ah)</p>
                        
                    </div>
                    <div class="desc">
                        <p>Warranty</p>
                        <p>Capacity:35</p>
                    </div>
                    <div class="price">
                        <p>With Old Battery</p>
                        <p>Without Old Battery</p>
                    </div>
                    <div class="button">
                    <button>Add To Cart</button>
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>
@endsection