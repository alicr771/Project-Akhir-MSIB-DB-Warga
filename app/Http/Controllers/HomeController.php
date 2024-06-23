<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user() && Auth::user()->role == 1 ? 'admin' : 'user';
        return view($role . ".dashboard");
    }
}