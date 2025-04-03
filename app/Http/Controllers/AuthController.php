<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function store(Request $request) {
        $user = new User();

        if(User::where('email', $request->email)->exists()){
            return response()->json([
                "message" => "Ja existe uma conta com esse email cadastrado!"
            ], 400);
        };

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json([
            "user" => $user
        ]);
    }
}
