<?php

namespace App\Http\Middleware;

use Closure;
use App\at;
class Admin
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
        if(auth()->at()->type == "Admin"){
            return $next($request);
        }else{
            return redirect('home');
        }
    }
}
