<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request): RedirectResponse
    {
        // Log::info('Logout initiated by user: ', ['user_id' => Auth::id()]); // Tambahkan log

        Auth::logout(); // Hapus session
        $request->session()->invalidate(); // Hapus data session
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('/login'); // Redirect ke halaman login
    }
}

?>
