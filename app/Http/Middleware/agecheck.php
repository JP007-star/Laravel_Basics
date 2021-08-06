<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->userpassword && $request->userpassword =='prasad'){
            return redirect('noaccess');
        }
        
        return $next($request);
    }
}
