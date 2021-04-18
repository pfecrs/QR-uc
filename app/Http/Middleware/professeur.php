<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class professeur
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
        if (!session()->has('prof')) {
            return redirect()->route('loginProf'); 
        }
       
                
       return $next($request);
    }
}
