<?php

namespace App\Http\Controllers;

use App\Mail\OTPmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $admin_email = $data['email'];
            $admin_pass = $data['password'];
            $user_data = User::where([['email',$admin_email],['admin','1']])->get();
            $password=0;
            foreach ($user_data as $user) {
                $password =  $user->password;
            }
            if(Hash::check($admin_pass, $password)){
                /* Session::flush(); */
                Session::put('temp_key',$admin_email);
                $OTP = rand(100000,999999);
                Mail::raw($OTP, function ($message) {
                    $message->to('sonkrsh@gmail.com', 'BatteryCrunch');
                    $message->subject('OTP');
                });
                Cache::put('otp_key', $OTP, now()->addSecond(60));
                
                return view('admin.admin_verify');
            }
            else{
                return redirect('/admin')->with('login_error','Enter Correct user name Password');
            }
           // echo"<pre>"; print_r($user_data);
        }
        if(Session::has('active_admin')){
            return redirect('/admin/dashboard');
        }
        else{
             //User::where(['user',])
        return view('admin.admin_login');
        }
       
    }

   /*  public function attemptlogin(Request $request){
        $OTP = rand(100000,999999);

        Mail::send(new OTPmail($OTP));
        
    } */

    public function otpVerify(Request $request){
        if($request->isMethod('post')){
            $data = $request->coupan;
            $cache_data = Cache::get('otp_key');
            if($data==$cache_data){
                $value = Session::get('temp_key');
                Session::put('active_admin',$value);
                return 'true';
            }
            else{
                return 'false';

            }
        }
       
    }
    public function logout(){
        Session::flush();
        return redirect('/admin');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
