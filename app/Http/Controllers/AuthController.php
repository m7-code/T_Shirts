<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    // 1. Register Logic: Naya data save karne ke liye
    public function registerPost(Request $request)
    {

        // dd($request->all()); // Debugging ke liye, form se aane wala data dekhne ke liye
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
    
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('home');
    }

    // 2. Login Logic: Data check karke login karne ke liye
    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Auth::attempt check karta hai ke email aur password sahi hain ya nahi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home'); // Login hone ke baad home page par bhej dega
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
