<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth('admin-web')->check()){
            if(auth('admin-web')->user()){
                return $next($request);
            } else {
                return redirect('admin/login');
            }
        } else {
            return redirect('admin/login');
        }
    }
}
