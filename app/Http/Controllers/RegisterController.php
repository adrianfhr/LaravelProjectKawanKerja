<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'unix_id' => Str::uuid(),
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'USER',
        ]);

        return redirect('/login')->with('success', 'Registration successful.');
    }
}
