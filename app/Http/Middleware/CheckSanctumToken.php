<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSanctumToken
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user tidak terautentikasi
        if (!$request->user()) {
            // Redirect ke halaman login admin
            return redirect()->route('admin.login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        return $next($request);
    }
}
