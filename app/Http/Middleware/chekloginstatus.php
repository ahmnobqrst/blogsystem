<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class chekloginstatus
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
       
       //dd(auth()->user()->status);
      $user_stat = ['admin','writer'];
       if(!in_array(auth()->user()->status, $user_stat) ){
        Auth::logout();
        return redirect()->route('login');
       }

        return $next($request);
    }
}
