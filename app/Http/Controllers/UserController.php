<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $user = User::with("state")->find($id);
        $states = State::all();

        return view('myaccount.user', compact('user', 'states'));
    }
}
