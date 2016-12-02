<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->role_id > 0 )
        {
            return $next($request);
        }

        return redirect('/');

    }

}
