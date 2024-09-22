<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SanctumAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the request is authenticated using Sanctum
        if (!Auth::guard('sanctum')->check()) {
            // Return a 401 Unauthorized response if not authenticated
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Proceed to the next middleware if authenticated
        return $next($request);
    }
}
