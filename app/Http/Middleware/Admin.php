<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

            /*if (Auth::guard('admin')->check()) {
                return $next($request);
                //return redirect('/admin');
            } else {
                return redirect('admin/login');
            }*/
        abort_if(!(auth('admin')->check()),403);
        return $next($request);

        }
}
