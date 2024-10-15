<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function showAboutUs()
    {
        $details = [
            [
                "name" => "Jholmer Damayo",
                "qoute" => "I'm a change man. I also change my girls.",
                "facebook" => "https://www.facebook.com/jholmerrrr"
            ],
            [
                "name" => "Honeyzenth Flores",
                "qoute" => "50% dying, 50% surviving.",
                "facebook" => "https://www.facebook.com/honey.zenthjill7"
            ],
            [
                "name" => "Christian Lloyd Rivera",
                "qoute" => "The only impossible journey is the one you never begin.",
                "facebook" => "https://www.facebook.com/meoweho"
            ],
            [
                "name" => "Kian Pagobo",
                "qoute" => "Worried but still chillin.",
                "facebook" => "https://www.facebook.com/Fratz.kian"
            ],
            [
                "name" => "Franz Aluba",
                "qoute" => "Lost but still continue.",
                "facebook" => "https://www.facebook.com/franzmerrick.aluba"
            ],
            [
                "name" => "Darin Jan Soriano",
                "qoute" => "Keep it simple and stupid.",
                "facebook" => "https://www.facebook.com/dairnjan43"
            ],
        ];
        return view('aboutus', compact('details'));
    }
}
