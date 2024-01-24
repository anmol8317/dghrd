<?php

namespace App\Http\Controllers\DGFSALI\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileSettingController extends Controller
{
    //

    public function profile(){
        $admin = request()->session()->get('admin-auth');
        return view('DGFSALI.Admin.Profile-Setting.Profile',['admin'=>$admin]);
    }


    public function changepassword(Request $request){
       
        $this->validate($request, [
            'currentPassword' => 'required',
            'newPassword' => 'required',
        ]);
        
        $session= request()->session()->get('admin-auth');
        $data = $session->email;
        // The passwords matches
        $user=AdminLogin::where('email',$data)->first();
        if($user){
    
            if(Hash::check($request->currentPassword, $user->password)){
            $user->password=Hash::make($request['newPassword']);
            $user->isActive = 0;
            $user->save();
            request()->session()->forget('admin-auth');
              return redirect()->back()->with(['success' => "Password Successfully Change"]);
            }
            return redirect()->back()->with(['error' => "Current Password is Invalid"]);
           }
        return redirect()->back()->with(['error'=>'sorry! something went wrong']);
    }
}
