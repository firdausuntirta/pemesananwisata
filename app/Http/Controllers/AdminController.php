<?php

// app/Http/Controllers/Admin/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Metode untuk menampilkan form login
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Metode untuk proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Gunakan guard admin
        if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Kredensial tidak valid.',
        ])->onlyInput('email');
    }

    // Metode logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    // Metode dashboard
    public function index()
    {
        // Ambil data admin yang login
        $admin = Auth::guard('admin')->user();

        return view('admin.dashboard', [
            'admin' => $admin
        ]);
    }
}
