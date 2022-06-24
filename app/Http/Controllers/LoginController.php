<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == User::ROLE_USER) {
                return redirect()->intended(route('home'));
            } else if ($user->role == User::ROLE_ADMIN) {
                return redirect()->intended(route('dashboard'));
            }
        }
        return view('admin.authenticate.login');
    }

    public function authenticate(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        $validation = $request->validate([
            'email' => ['required', 'string', 'email:dns'],
            'password' => ['required', 'string', 'min:5']
        ]);

        if (Auth::attempt($validation, $remember)) {
            $user = Auth::user();
            if ($user->role == User::ROLE_ADMIN) {
                $request->session()->regenerate();
                return redirect()->intended(route('dashboard'));
            } else if ($user->role == User::ROLE_USER) {
                $request->session()->regenerate();
                return redirect()->intended(route('home'));
            }
            return redirect(route('home'));
        }
        return back()->with('status', 'incorrect username or password.');
    }

    public function logout(Request $request)
    {
        if ($user = Auth::user()) {
            if ($user->role == User::ROLE_USER) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->intended(route('home'));
            } else if ($user->role == User::ROLE_ADMIN) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->intended(route('login'));
            }
        }
        return redirect(route('login'));
    }

    public function profile()
    {
        return view('admin.authenticate.profile');
    }
}
