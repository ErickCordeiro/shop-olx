<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        dd($request->all());
        return true;
    }

    public function forgot()
    {
        return view('auth.forgot-password');
    }
}
