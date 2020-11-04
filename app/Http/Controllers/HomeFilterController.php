<?php

namespace App\Http\Controllers;

use App\CustomerNumber;
use App\Fule;
use Illuminate\Http\Request;
use App\Location;
use App\Mail\NumberMail;
use App\Make;
use App\Models;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeFilterController extends Controller
{
    public function filter(){
        $location = Location::get();
        $make = Make::get();
        $fuel = Fule::get();
      /*   $make_val = "1";
        $model_val = Make::find($make_val)->models;
        $model_val = json_decode(json_encode($model_val));
        echo"<pre>"; print_r($model_val);  */
         return view('welcome')->with(compact('location','fuel','make',));
    }

    public function carModel(Request $request){
        $make_val = $request['car_val'];
        $model_val = Make::find($make_val)->models;
        return json_encode(array('data'=>$model_val));
    }

    public function sendMail(Request $request){
            if($request->isMethod('post')){
                $Customerdata = new CustomerNumber();
                $Customerdata->customer_name = $request->contact_name;
                $Customerdata->customer_no = $request->contact_no;
                $Customerdata->save();
            }

        $data = array(
            'name' =>$request->contact_name,
            'contactno'=>$request->contact_no,
            'city'=>$request->contact_location
        );
        Mail::to('sonkrsh@gmail.com')->send(new NumberMail($data));
        return 'true';
    }

}
