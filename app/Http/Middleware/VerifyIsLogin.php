<?php

namespace App\Http\Middleware;

use Closure;

class VerifyIsLogin
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
        if(! auth()->user()->isLogin())
        {
            return redirect('/register');
        }

        return $next($request);
    }
}
