<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('broker.login');
    }

    public function verifyLogin(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->user)->first();

        $confirmPassword = Hash::check($request->password, $user->password_hash);

        if (!$confirmPassword) {
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }

        Auth::login($user);
        return view('broker.broker-area');
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Logout realizado']);
    }
}
