<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ResetPasswordController extends Controller
{
    public function getReset(Request $request, $token)
    {
        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            abort(403);
        }

        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function postReset($token, ResetPassword $request)
    {
        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            abort(403);
        }

        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect()->route('login')->with('status', 'Password has been reset.');
    }
}
