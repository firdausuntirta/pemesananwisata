<?php

// app/Http/Controllers/Admin/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public function updateProfile(Request $request)
    {
        try {
            // Tambahkan logging request
            Log::info('Profile Update Request', [
                'data' => $request->all(),
                'user' => Auth::guard('admin')->user()
            ]);

            $admin = Auth::guard('admin')->user();

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:admin,email,' . $admin->id,
                'current_password' => 'required',
                'new_password' => 'nullable|min:6|confirmed'
            ]);

            // Verifikasi password
            if (!Hash::check($request->current_password, $admin->password)) {
                Log::warning('Invalid Current Password', [
                    'user_id' => $admin->id
                ]);
                return back()->withErrors(['current_password' => 'Password saat ini salah']);
            }

            // Update data
            $updateData = [
                'nama' => $request->name,
                'email' => $request->email,
                'updated_at' => now()
            ];

            // Update password jika ada
            if ($request->filled('new_password')) {
                $updateData['password'] = Hash::make($request->new_password);
            }

            // Proses update
            $result = DB::table('admin')
                ->where('id', $admin->id)
                ->update($updateData);

            Log::info('Profile Update Result', [
                'user_id' => $admin->id,
                'update_result' => $result
            ]);

            return back()->with('success', 'Profil berhasil diperbarui');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani error validasi
            Log::error('Validation Error', [
                'errors' => $e->errors()
            ]);
            return back()->withErrors($e->errors());
        } catch (\Exception $e) {
            // Tangani error umum
            Log::error('Profile Update Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->withErrors([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }

    public function apiLogin(Request $request)
    {
        try {
            // Validasi email dan password
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // Gunakan guard 'admin' untuk autentikasi
            if (!Auth::guard('admin')->attempt($credentials)) {
                return response()->json(['message' => 'Credentials are not valid'], 401);
            }

            // Ambil admin yang sedang login
            $admin = Auth::guard('admin')->user();

            // Pastikan Anda menggunakan Sanctum untuk token API
            return response()->json([
                'message' => 'Login successful',
                'token' => $admin->createToken('$email')->plainTextToken,
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('API Login Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['message' => 'An error occurred during login'], 500);
        }
    }
    public function apiLogout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            Log::error('User not authenticated. Token: ' . $request->bearerToken());
            return response()->json([
                'message' => 'No authenticated user found.',
            ], 401);
        }

        $user->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout successful',
        ], 200);
    }
}
