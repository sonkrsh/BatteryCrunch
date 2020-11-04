<?php

namespace App\Http\Controllers;

use App\BatteryCompany;
use App\Fule;
use Illuminate\Http\Request;
use App\Make;
use App\Models;

class DashboardController extends Controller
{
    public function showmake(){
        $data = Make::get();
        return view('admin.make.all_make')->with(compact('data'));
    }

    public function addmake(Request $request){
        if($request->isMethod('post')){
            $make = new Make();
            $make->make_name = $request['input_data'];
            $make->save();
            return 'true';
        }
        return view('admin.make.add_make');
    }

    public function addDelete($id=null){
            Make::where(['id'=>$id])->delete();
            return redirect('/admin/show-make');
    }
    public function addEdit(Request $request){
        $data_id  = $request['input_data'];
        $data_name  = $request['input_data2'];
        Make::where(['id'=>$data_id])->update(['make_name'=>$data_name]);
        return 'true';
    }

    //Model Controller 

    public function addModel(Request $request){
        if($request->isMethod('post')){
            $model = new Models();
            $model->make_id  = $request['input_data'];
            $model->model_name   = $request['input_data2'];
            $model->save();
            return 'true';
        }
        $make_data = Make::get();
        return view('admin.model.add_model')->with(compact('make_data'));
    }
    public function showModel(){
        $make_data = Make::get();
        $model_data = Models::get();
        return view('admin.model.all_model')->with(compact('model_data','make_data'));
    }
    public function editModel(Request $request){
        $data_id  = $request['input_data'];
        $data_name  = $request['input_data2'];
        Models::where(['id'=>$data_id])->update(['model_name'=>$data_name]);
        return 'true';
    }
    public function deleteModel($id=null){
        Models::where(['id'=>$id])->delete();
        return redirect('/admin/show-model');
    }
    public function addFuel(Request $request){
        if($request->isMethod('post')){
            $Fuel = new Fule();
            $Fuel->fuel_name   = $request['input_data'];
            $Fuel->save();
            return 'true';
        }
        $fuel_data  = Fule::get();
        return view('admin.fuel.add_fuel')->with(compact('fuel_data'));
    }
    public function deleteFuel($id=null){
        Fule::where(['id'=>$id])->delete();
        return redirect('/admin/add-fuel');
    }
    public function batteryCompany(Request $request){
        if($request->isMethod('post')){
            $data = $request->inputtxt;
            $battery_data = new BatteryCompany();
            $battery_data->BatteryCompany = $data;
            $battery_data->save();
            return redirect('/admin/battery-company');
        }
        $battery_blade_data =  BatteryCompany::get();

        return view('admin.BatteryCompany.battery_company')->with(compact('battery_blade_data'));
    }
    public function deleteBatteryCompany($id=null){
        BatteryCompany::where(['id'=>$id])->delete();
        return redirect('admin/battery-company');
    }
    public function addBatteryProduct(Request $request){
        if($request->isMethod('post')){
            $value = $request['input_data'];
            $model_val = Make::find($value)->models;
           /*  return json_encode(array('data'=>$model_val)); */
            return $model_val;
            
        }
        $make = Make::get();
        $battery = BatteryCompany::get();
        $fuel = Fule::get();
        return view('admin.BatteryProduct.add_battery_product')->with(compact('make','fuel','battery'));
    }
}
