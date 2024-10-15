<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('homepage');
    }
    public function showAboutUs()
    {
        return view('aboutus');
    }

    public function submitEmail(Request $request)
    {
        $email = $request->input('email');

        $validEmail = 'darinjan13@gmail.com';

        if ($email === $validEmail) {

            return redirect()->route('login', ['email' => $email]);
        } else {
            return redirect()->route('registration', ['email' => $email]);
        }
    }
}
