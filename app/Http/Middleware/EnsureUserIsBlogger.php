<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsBlogger
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Cek apakah user memiliki role blogger
        if (Auth::user()->role !== 'blogger') {
            return redirect()->route('dashboard')->with('error', 'Akses hanya untuk blogger.');
        }

        return $next($request);
    }
}