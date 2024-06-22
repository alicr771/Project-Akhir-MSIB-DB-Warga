<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;  
use App\Mail\ForgotPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail; 


class ForgotPasswordController extends Controller
{
    public function forgot(){
        return view('auth.forgot-password');
    }

    public function forgot_proses(Request $request)
    {
        $count = User::where('email', '=', $request->email)->count();
        if($count > 0)
        {
            $user = User::where('email', '=', $request->email)->first();
            $user -> remember_token = Str::random(50);
            $user -> save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Password has been reset');
        }
        else
        {
            return redirect()->back()->with('error', 'Email not fount in the system');
        }
    }
}
