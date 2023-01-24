<?php

namespace App\Http\Controllers;

use App\Services\Login\RememberMeExpiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use RememberMeExpiration;

    public function index()
    {
        return view('page.login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            if ($request->get('remember')) {
                $this->setRememberMeExpiration($user);
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
