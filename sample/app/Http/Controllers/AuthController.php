<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister($email = null)
    {
        return view('register', compact('email'));
    }
    public function showLogin($email = null)
    {
        return view('login', compact('email'));
    }

    public function register()
    {
        return redirect()->action([BrowseController::class, 'showBrowse']);
    }

    public function login()
    {
        return redirect()->action([BrowseController::class, 'showBrowse']);
    }
}
