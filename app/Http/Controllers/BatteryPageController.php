<?php

namespace App\Http\Controllers;
use App\BatteryProduct;
use App\Location;
use Illuminate\Http\Request;

class BatteryPageController extends Controller
{
    public function showProduct($loc=null,$make=null,$model=null,$fuel=null){
        $data = Location::where(['location_name'=>$loc])->select('id')->get();
        $data = json_decode(json_encode($data));
        /* BatteryProduct::where('') */
        echo "<pre>";print_r($data);
        /* return view('batteries'); */
    }
}
