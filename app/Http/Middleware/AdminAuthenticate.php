<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah sudah login sebagai admin
        if (!Auth::guard('admin')->check()) {
            // Jika belum, redirect ke login admin
            return redirect()->route('admin.login')
                ->with('error', 'Anda harus login sebagai admin');
        }

        return $next($request);
    }
}
