<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // if(Auth::user()->role == 1)
        // {
            return view('admin.dashboard');
        // }
        // else if(Auth::user()->role == 0)
        // {
        //     return view('user.dashboard');
        // }

    }
}