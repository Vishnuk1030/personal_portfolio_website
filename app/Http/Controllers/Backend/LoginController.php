<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class LoginController extends Controller
{
    public function login_page()
    {
        // $password = "1234567890";
        // $dd = Hash::make($password);
        // dd($dd);
        return view('backend.auth.login');
    }

    public function login_auth(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (!empty(Auth::user()->status)) {
                if (Auth::user()->is_role == '1') {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('login')->with('error', 'Not an admin');
                }
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect()->route('login')->with('success', 'This email is not verified yet!');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please enter the correct credentials');
        }
    }

    public function forgot_Pass()
    {
        return view('backend.auth.forgot');
    }

    public function forgot_admin(Request $request)
    {
        $request->validate([
            "email" => "required"
        ]);

        // dd($request->all());
        $random_password = rand(111111111, 999999999);
        $user = User::where('email', '=', $request->email)->first();

        if (!empty($user)) {
            $user->password = Hash::make($random_password);
            $user->save();

            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Password successfully send to your email id..please check email box !');

        } else {
            return redirect()->back()->with('error', 'Email id is not found');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Admin Logout successfully');
    }
}
