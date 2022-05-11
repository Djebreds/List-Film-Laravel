<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.authenticate.register');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:80|min:3',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        $validate['name'] = ucfirst($validate['name']);
        User::create($validate);

        return redirect('login')->with('status', 'You has registered! Please login.');
    }
}
