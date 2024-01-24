<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminlogin;
use Illuminate\Support\Facades\Hash;
class SuperadminController extends Controller
{
    public function superadmin_profile()
    {
        return view("superadmin_profile");
    }
    public function add_admin()
    {  
        $data = Adminlogin::orderBy("created_at", "desc")->latest()->get();
        return view("add_admin", compact('data'));
    }
    public function adminlogin(Request $request)
    {
        $email = $request->email;

        if (Adminlogin::where('email', $email)->exists()) {
            return redirect()->back()->with(['error' => 'email already exist']);
        }
        try {
            $supadminsession = request()->session()->get('auth');
            $supemail=$supadminsession['email'];
        $email = $request->email;
        $password = $request->password;
        Adminlogin::create([
            'email' => $request->email,
            'password' => Hash::make($password),
            'user_type' => 'user',
            'added_by'=>$supemail,
            'status'=>'1',
        ]);
        return redirect()->back()->with('success','Added Successfully');

    }
     catch (\Exception $e) {
       // dd($e);
        return redirect()->back()->with('error','Something Went Wrong');
    }


    }

    public function login()
    {
    return view("login");
    }

    public function logincheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = Adminlogin::where('email', $request->email)->first();

        if ($data && Hash::check($request->password, $data->password)) {
           if($data['status']=='1')
           {
            $request->session()->put('auth', $data);
            return redirect("superadmin_profile")->with('success', 'Successfully logged in');
        }
        else {
            return redirect()->back()->with(['error' => 'Admin has Denied your access from portal']);
        }
    }
        
        else {
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }
    
    }

    public function delete_login($id)
 {
   
     $idd = Adminlogin::find($id);
 
     if ($idd) {
        
         $idd->delete();
 
         return redirect()->back()->with('success', 'successfully deleted ');
     } else {
         // Handle the case when the image doesn't exist
         return redirect()->back()->with(['error' => 'Something went wrong']);
     }
 }

 public function logout()
 {
    if (session()->has('auth')) 
    {
        session()->forget('auth');
        return redirect("login")->withSuccess('logged out');
    }
    else{
        return redirect("login")->witherror('session not found');
    }
 }
   
 public function approvelogin(Request $request,$id)
 {
 try{
 
    $rep=Adminlogin::find($id);
        
    $rep->status = '1';
    $rep->save();

  return redirect(url('/add_admin'))->with('success','request activated Successfully');

 }
 catch (\Exception $e) {
  
     return redirect()->back()->with('error','Something Went Wrong');
 }}

 public function dis_approvelogin(Request $request,$id)
 {
 try{
 
    $rep=Adminlogin::find($id);
        
    $rep->status = '0';
    $rep->save();

  return redirect(url('/add_admin'))->with('success','request status changed to Deactivated Successfully');

 }
 catch (\Exception $e) {
  
     return redirect()->back()->with('error','Something Went Wrong');
 }}
 
}
