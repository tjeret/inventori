<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($role == 'admin' && auth()->user()->role != 0) {
            abort(code: 403);
        }

        if ($role == 'supervisor' && auth()->user()->role != 1 & 0) {
            abort(code: 403);
        }

        if ($role == 'finance' && auth()->user()->role != 2) {
            abort(code: 403);
        }

        if ($role == 'accounting' && auth()->user()->role != 3) {
            abort(code: 403);
        }

        if ($role == 'cashier' && auth()->user()->role != 4) {
            abort(code: 403);
        }

        if ($role == 'warehouse' && auth()->user()->role != 5) {
            abort(code: 403);
        }

        if ($role == 'production' && auth()->user()->role != 6) {
            abort(code: 403);
        }

        if ($role == 'marketing' && auth()->user()->role != 7) {
            abort(code: 403);
        }
        return $next($request);
    }
}
