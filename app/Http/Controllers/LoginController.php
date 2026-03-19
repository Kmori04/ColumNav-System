<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('partials.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
            'is_active' => 1
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid username or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function showForgotPassword()
    {
        return view('partials.forgot-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'recovery_key' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ], [
            'new_password.confirmed' => 'The password confirmation does not match.',
        ]);

        $user = User::where('username', $request->username)
            ->where('role', 'admin')
            ->where('is_active', 1)
            ->first();

        if (!$user) {
            return back()->with('error', 'Admin account not found.')->withInput();
        }

        if ($request->recovery_key !== config('admin.recovery_key')) {
            return back()->with('error', 'Invalid recovery key.')->withInput();
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('login.show')->with('success', 'Password reset successful. You can now log in.');
    }
}