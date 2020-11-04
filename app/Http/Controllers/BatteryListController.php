<?php

namespace App\Http\Controllers;

use App\BatteryProduct;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BatteryListController extends Controller
{
   public function addBattery(Request $request){
      $make  = $request->make;
      $model  = $request->model;
      $fuel  = $request->fuel;
      $battery  = $request->battery;
      $product  = $request->product_name;
      $price  = $request->price;
      $desc  = $request->desc;
      $battery_table = new BatteryProduct();
      if($request->hasFile('img')){
         $img_tmp = $request->file('img');
         if($img_tmp->isValid()){
            $extension = $img_tmp->getClientOriginalExtension();
            $file_name = $img_tmp->getClientOriginalName();
            $filename = $file_name.'.'.$extension;
            //echo "<pre>"; print_r($filename);
            $large_image_path = 'images/backend_images/large/'.$filename;
            $medium_image_path = 'images/backend_images/medium/'.$filename;
            $small_image_path = 'images/backend_images/small/'.$filename;  
            
            Image::make($img_tmp)->save($large_image_path);
            Image::make($img_tmp)->resize(600,600)->save($medium_image_path);
            Image::make($img_tmp)->resize(300,300)->save($small_image_path);

            //Store image name in product table
            $battery_table->Product_image = $filename;
         }
     }
       
       $battery_table->make_id = $make;
       $battery_table->model_id = $model;
       $battery_table->fuel_id = $fuel;
       $battery_table->batterCompany_id = $battery;
       $battery_table->Product_name = $product;
       $battery_table->Product_price = $price;
       $battery_table->Product_descp = $desc;
       $battery_table->save();
    
      return redirect('/admin/battery-product');

   } 
}
