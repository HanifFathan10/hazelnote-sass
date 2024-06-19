<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('page.auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                if (Auth::user()->role != "user") {
                    Auth::logout();
                    return redirect()->route('account.login')->with('error', 'You are not a user');
                }

                return redirect()->route('home');
            } else {
                return redirect()->route('account.login')->with('error', 'Invalid email or password');
            }
        } else {
            return redirect()->route('account.login')->withErrors($validator)->withInput();
        }
    }

    public function register()
    {
        return view('page.auth.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'password2' => 'required|string',
        ]);

        try {
            if ($request->password != $request->password2) {
                return redirect()->back()->with('error', 'Passwords do not match');
            }

            $user = new User([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $user->save();

            Auth::login($user);

            return redirect()->route('home')->with('success', 'User has been registered');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while registering user');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                Auth::guard('admin')->logout();
            } else {
                Auth::logout();
            }
        }

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('account.login');
    }
}
