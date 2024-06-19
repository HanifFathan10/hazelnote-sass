<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function login()
    {
        return view('page.auth.admin.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

                if (Auth::guard('admin')->user()->role != "admin") {

                    Auth::guard('admin')->logout();
                    return redirect()->route('account.login')->with('error', 'You are not an admin');
                }

                return redirect()->route('admin.dashboard')->with('success', 'Login Success');
            } else {
                return redirect()->route('admin.login')->with('error', 'Invalid email or password');
            }
        } else {
            return redirect()->route('admin.login')->withErrors($validator)->withInput();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
