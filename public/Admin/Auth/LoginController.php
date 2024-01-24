<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login_view(){
        return view('Dghrd.Admin.Auth.Login');
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          ]);


          #admin
          $data = AdminLogin::where('email', $request->email)->first();
         
          if ($data) {
            if (Hash::check($request->password, $data->password)) {
              $data->isActive = 1;
              $data->save();
              $request->session()->put('admin-auth', $data);
              return redirect('dashboard')->with('succesfully logged in');
            }
          }
        return redirect()->back()->with(['error'=>'Oppes! You have entered invalid credentials']);
    }


    public function checkstatus(){
      $data = AdminLogin::first();
      return $data;
    }

    public function logout(){
      
      request()->session()->forget('admin-auth');
      return redirect('admin/login');
    }
}
