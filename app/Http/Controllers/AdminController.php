<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller

{
 public function loginnow(Request $request){
    $data=$request->all();

    $row=DB::table('admin')->where('Email',$data['email'])
    ->where('Password',$data['password'])->count();
    // dd($row);
    if($row > 0){

       session()->put('login_id', $data['email'] );
        return redirect('/dashboard')->with('flash_message_success','LOGIN Succesfuly!');

    }else{

        return redirect('/login')->with('flash_error_message','Ivalid Password or Email!');
    }
}
function test(){
    $var= session()->get('login_id');
}
    public function dashboard(){
        return view('admin.dashboard');
    }
    // check
    public function logout(){
       session()->forget('adminSession');
       session()->forget('session_id');
        return redirect('/login')->with('flash_message_success','loged out Successfully!');
    }

}

