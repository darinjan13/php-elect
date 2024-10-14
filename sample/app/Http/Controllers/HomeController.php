<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage() {
        return view('homepage');
    }

    public function showRegister($email = null) {
        return view('register', compact('email'));
    }

    public function showDetails($title = null) {
        return view('register', compact('title'));
    }

    public function showBrowse() {
        $trending = ["One Piece", "Salem's Lot", "Beetlejuice", "Dan Da Dan", "Citadel: Diana"];
        $popular = ["Deadpool & Wolverine", "Joker: Folie à Deux", "Wolfs", "Hellboy: The Crooked Man", "Bad Boys: Ride or Die"];
        $anime = ["JoJo's Bizarre Adventure", "Dragon Ball DAIMA", "The Seven Deadly Sins: Four Knights of the Apocalypse", "Jujutsu Kaisen", "Bleach"];
        return view('browse', compact('trending', 'popular', 'anime'));
    }

    public function submitEmail(Request $request) {
        $email = $request->input('email');

        $validEmail = 'darinjan13@gmail.com';

        if ($email === $validEmail) {
        
            return redirect()->route('audit');
        } else {
            return redirect()->route('register', ['email' => $email]);
        }
    }

    public function register(Request $request){

    }
}
