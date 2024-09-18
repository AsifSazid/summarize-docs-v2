<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (!$request->session()->has('guest_id')) {
    //         // Assign a unique guest ID
    //         $request->session()->put('guest_id', uniqid('guest_', true));
    //     }

    //     return $next($request);
    // }
}
