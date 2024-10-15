<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    protected $movies = [
        [
            "image" => 1,
            "title" => "Deadpool & Wolverine",
            "description" => "A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.",
            "release_date" => "2024",
            "cast" => "Ryan Reynolds, Hugh Jackman, Morena Baccarin",
            "genre" => "Action, Comedy",
            "youtube_id" => "73_1biulkYk"
        ],
        [
            "image" => 2,
            "title" => "Joker: Folie à Deux",
            "description" => "While struggling with his dual identity, Arthur Fleck not only stumbles upon true love, but also finds the music that's always been inside him.",
            "release_date" => "2024",
            "cast" => "Joaquin Phoenix, Lady Gaga, Zazie Beetz",
            "genre" => "Drama, Musical",
            "youtube_id" => "_OKAwz2MsJs"
        ],
        [
            "image" => 3,
            "title" => "Wolfs",
            "description" => "Hired to cover up a high-profile crime, a fixer soon finds his night spiraling out of control when he's forced to work with an unexpected counterpart.",
            "release_date" => "2024",
            "cast" => "John David Washington, Margot Robbie, Anthony Mackie",
            "genre" => "Thriller, Crime",
            "youtube_id" => "wLJUPjiRbAM"
        ],
        [
            "image" => 4,
            "title" => "Hellboy: The Crooked Man",
            "description" => "Hellboy and a rookie BPRD agent get stranded in 1950s rural Appalachia. There, they discover a small community haunted by witches, led by a local devil with a troubling connection to Hellboy's past: the Crooked Man.",
            "release_date" => "2024",
            "cast" => "Jack Kesy, Adeline Rudolph, Jefferson White",
            "genre" => "Fantasy, Horror, Action",
            "youtube_id" => "NMT1q1BOs6Q"
        ],
        [
            "image" => 5,
            "title" => "Bad Boys: Ride or Die",
            "description" => "After their late former Captain is framed, Lowrey and Burnett try to clear his name, only to end up on the run themselves.",
            "release_date" => "2024",
            "cast" => "Will Smith, Martin Lawrence, Vanessa Hudgens",
            "genre" => "Action, Comedy",
            "youtube_id" => "ZTQyMmz-cQE"
        ],
    ];

    protected $anime = [
        [
            "image" => 1,
            "title" => "JoJo's Bizarre Adventure",
            "description" => "An epic tale of the Joestar family across generations, battling supernatural foes using their unique powers.",
            "release_date" => "2023",
            "cast" => "Matthew Mercer, Richard Epcar, Daisuke Ono",
            "genre" => "Action, Adventure, Supernatural",
            "youtube_id" => "EeCX8Y0a278"
        ],
        [
            "image" => 2,
            "title" => "Dragon Ball DAIMA",
            "description" => "Goku and friends face new challenges and villains as they navigate a world transformed into children.",
            "release_date" => "2024",
            "cast" => "Masako Nozawa, Sean Schemmel, Christopher Sabat",
            "genre" => "Action, Adventure, Fantasy",
            "youtube_id" => "0wMBz2xdI_s"
        ],
        [
            "image" => 3,
            "title" => "The Seven Deadly Sins: Four Knights of the Apocalypse",
            "description" => "A continuation of the Seven Deadly Sins saga, following new heroes who rise to protect the kingdom.",
            "release_date" => "2024",
            "cast" => "Yuki Kaji, Sora Amamiya, Takahiro Sakurai",
            "genre" => "Action, Fantasy, Adventure",
            "youtube_id" => "Zic1mn23B_I"
        ],
        [
            "image" => 4,
            "title" => "Jujutsu Kaisen",
            "description" => "A high school student becomes embroiled in the world of curses after ingesting a cursed object, a finger belonging to a powerful curse.",
            "release_date" => "2023",
            "cast" => "Junya Enoki, Yuichi Nakamura, Asami Seto",
            "genre" => "Action, Supernatural, Dark Fantasy",
            "youtube_id" => "Pm-wNmS9RGI"
        ],
        [
            "image" => 5,
            "title" => "Bleach",
            "description" => "A young man gains soul reaper powers and must protect the living world from evil spirits known as Hollows.",
            "release_date" => "2023",
            "cast" => "Masakazu Morita, Johnny Yong Bosch, Monica Rial",
            "genre" => "Action, Supernatural, Adventure",
            "youtube_id" => "KPL8K8Rfyxc"
        ],
    ];

    public function showMovieDetails($title = null)
    {

        $movieDetails = collect($this->movies)->firstWhere('title', $title);

        if (!$movieDetails) {
            return view('errors.movieNotFound', compact('title'));
        }

        return view('details.movie', compact('movieDetails'));
    }
    public function showAnimeDetails($title = null)
    {
        $animeDetails = collect($this->anime)->firstWhere('title', $title);

        if (!$animeDetails) {
            return view('errors.movieNotFound', compact('title'));
        }

        return view('details.anime', compact('animeDetails'));
    }
}
