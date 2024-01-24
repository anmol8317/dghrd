<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\AdminLogin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class LoginController extends Controller
{
    //
    public function login_view(){
        return view('Dghrd.Admin.Auth.Login');
    }

    public function update_password(){
        $admin = request()->session()->get('admin-auth');

        return view('Dghrd.Admin.Auth.change_password',compact('admin'));
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
    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Retrieve the admin user from the session
        $admin = $request->session()->get('admin-auth');

        // Check if the entered current password matches the stored password
        if (Hash::check($request->current_password, $admin->password)) {
            // Update the admin user's password with the new password
            $admin->password = Hash::make($request->new_password);
            $admin->save();

            return redirect()->back()->with('success', 'Password changed successfully');
        } else {
            return redirect()->back()->with(['error' => 'Invalid current password']);
        }
    }

    public function checkstatus(){
      $data = AdminLogin::first();
      return $data;
    }

    public function logout(){

      request()->session()->forget('admin-auth');
      return redirect('admin/login');
    }




    public function sendPasswordResetEmail(Request $request)
{
    $user = Adminlogin::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->with(['error' => "User not found"]);
    }

    $token = $user->generatePasswordResetToken();

    try {
        $resetLink = route('password.reset', ['token' => $token]);
        $message = "Click here to reset your password: $resetLink";

        Mail::to($user->email)->send(new ResetPasswordMail($resetLink));
    } catch (\Exception $e) {
        // Log the detailed exception message
        Log::error('Email sending failed: ' . $e->getMessage());
dd($e);
        // Return a detailed error message to the user
        return redirect()->back()->with(['error' => "Something went wrong while sending the email. Please try again later."]);
    }

    return redirect()->back()->with(['success' => "Password reset link sent to your email"]);
}

    public function forgotPasswordForm()
    {
        return view('emails.forget_password');
    }
    public function email()
    {
        return view('emails.reset_password');
    }
    public function showResetForm($token)
    {
        $user = Adminlogin::where('password_reset_token', $token)->first();

        if (!$user) {
            return redirect()->route('password.request')->with(['error' => "Invalid token"]);
        }

        return view('emails.reset_password_form', ['token' => $token, 'email' => $user->email]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = Adminlogin::where('email', $request->email)
            ->where('password_reset_token', $request->token)
            ->first();

        if (!$user) {
            return redirect()->route('password.request')->with(['error' => "Invalid token"]);
        }

        $user->password = bcrypt($request->password);
        $user->password_reset_token = null;
        $user->save();

        return redirect('/admin/login')->with(['success' => "Password reset successfully"]);
    }


}
