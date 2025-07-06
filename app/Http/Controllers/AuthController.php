<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $formdata = request()->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required']
        ]);
        $user = User::create($formdata);
        auth()->login($user);
        // dd($formdata);
        return redirect('/')->with('success', "Welcome to Creative Laravel, {$user->name}");
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out');
    }

    public function postLogin()
    {
        $formdata = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required']
        ]);

        if (auth()->attempt($formdata)) {
            if (auth()->user()->isAdmin) {
                return redirect('/admin')->with('success', 'Welcome back, ' . auth()->user()->name);
            }
            return redirect('/')->with('success', 'Welcome back, ' . auth()->user()->name);
        }

        return back()->withErrors(['password' => 'Invalid credentials']);
    }
}
