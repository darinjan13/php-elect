<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function showBrowse()
    {
        $movies = [
            [
                "title" => "Deadpool & Wolverine",
            ],
            [
                "title" => "Joker: Folie à Deux",
            ],
            [
                "title" => "Wolfs",
            ],
            [
                "title" => "Hellboy: The Crooked Man",
            ],
            [
                "title" => "Bad Boys: Ride or Die",
            ],
        ];
        $animes = [
            [
                "title" => "JoJo's Bizarre Adventure",
            ],
            [
                "title" => "Dragon Ball DAIMA",
            ],
            [
                "title" => "The Seven Deadly Sins: Four Knights of the Apocalypse",
            ],
            [
                "title" => "Jujutsu Kaisen",
            ],
            [
                "title" => "Bleach",
            ],
        ];

        return view('browse', compact('movies', 'animes'));
    }
}
