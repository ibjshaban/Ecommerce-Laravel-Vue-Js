<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminOrSeller
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        abort_if(!(auth('admin')->check() || auth('member')->check()),403);
        return $next($request);

//        if ($guard = 'member') {
           /* if (Auth::guard($guard)->check()) {
                return $next($request);
                //return redirect('/admin');
            } else {
                return redirect('admin/login-users');
            }*/
//        }
    }
}
