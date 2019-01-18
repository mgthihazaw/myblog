<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
          return redirect('/login');
        }
        else{
        if(Auth::user()->is_admin==1){
            return $next($request);
           }
        else {
            return redirect('/home');
            }
        }
        return $next($request);
    }
}
