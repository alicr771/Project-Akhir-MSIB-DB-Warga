<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;  // Correct namespace for Str
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;  // Correct namespace for Mail


class ForgotPasswordController extends Controller
{
    public function forgot(){
        return view('auth.passwords.email');
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
