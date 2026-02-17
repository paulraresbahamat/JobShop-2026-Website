<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimpleAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'company_id' => ['required','string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'company_id' => $credentials['company_id'],
            'password'   => $credentials['password']
        ])) {
            $request->session()->regenerate();
            return back();
        }

        return back()
            ->withErrors(['company_id' => 'Company ID or password is incorrect.'])
            ->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();
    }
}
