<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }

    public function home()
    {
        if (!Auth::user()) {
            return redirect('login')->with('alert', 'Please Login!!!');
        } else {
            $role = Auth::user()->role;
            if ($role == 'administrator') {
                return view('admin');
            } elseif ($role == 'user') {
                return view('user');
            } else {
                return redirect('login')->with('alert', 'Login Failed! Please try again later!');
            }
        }
    }
}
