<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $champs = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => 'required'
        ]);
        $champs['password'] = bcrypt($champs['password']);
        $user = User::create($champs);
        auth()->login($user);
        return 'login worked';
    }

    public function login(Request $request)
    {
        $champs = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!auth()->attempt($champs)) {
            return 'Invalid credentials';
        }
        return view('welcome');
    }

    public function logout()
    {
        auth()->logout();
        return view('welcome');
    }
}
