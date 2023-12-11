<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $data = $request->only(["name", "email", "password"]);
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);

        Auth::attempt(["email" => $user->email, "password" => $user->password]);
        return redirect()->route('select-state');
    }

    public function selectState()
    {
        $states = State::all();
        return view('auth.select-state', compact('states'));
    }

    public function setState(Request $request)
    {
        $data = $request->only(["state", "contact"]);
        $isState = State::find($data['state']);

        if (!$isState) {
            return redirect('/login');
        }

        $user = User::find(Auth::user()->id);
        $user->state_id = $data['state'];
        $user->contact = $data['contact'];
        $user->save();

        return redirect()->route('home');
    }

    public function forgot()
    {
        return view('auth.forgot-password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
