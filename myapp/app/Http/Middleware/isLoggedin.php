<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class isLoggedin
{
    
    public function handle($request, Closure $next)
    {
        if(!Session::has('userid')){
            return redirect('/login');
           // return redirect()->route('/login');
        }
        return $next($request);
    }
}
