<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {
        return view("auth.register");
    }

    public function store(Request $request) {

        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json($user, 201);
    }
}

// 200-299 => les reponses de succès

