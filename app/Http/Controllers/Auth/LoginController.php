<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function login_proses(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::User()->role == '1') {

                return redirect()->intended('admin/dashboard');
            } else if (Auth::User()->role == '0') {
                return redirect()->intended('user/dashboard');
            } else {
                return redirect('login');
            }
        } else {
            return redirect()->back()->with('error');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}
