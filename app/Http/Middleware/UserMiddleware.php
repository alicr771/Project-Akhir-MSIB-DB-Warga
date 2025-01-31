<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class UserMiddleware
{
    public function handle(Request $request, Closure $next) : Response
    {
        if(Auth::check())
        {
            if(Auth::user()->role == 0 || Auth::user()->role == 1)
            {
                return $next($request);
            }else{
                Auth::logout();
                return redirect('login');
            }
        }
        else{
            {
                Auth::logout();
                return redirect('login');
            }
        }
    }
}