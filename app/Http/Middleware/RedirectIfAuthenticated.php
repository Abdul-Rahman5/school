<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::STUDENT);
            }
        }
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::TEACHER);
            }
        }
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::PARENT);
            }
        }


        //        if (Auth('web')->check()) {
        //             return redirect(RouteServiceProvider::HOME);
        //         }
        // if (Auth('student')->check()) {
        //             return redirect(RouteServiceProvider::STUDENT);
        //         }
        // if (Auth('teacher')->check()) {
        //             return redirect(RouteServiceProvider::TEACHER);
        //         }
        // if (Auth('parents')->check()) {
        //             return redirect(RouteServiceProvider::PARENT);
        //         }
        return $next($request);


    }
}
