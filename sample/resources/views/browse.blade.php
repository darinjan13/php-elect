<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white pb-20">
    @include('layouts.navbar')
    <div class="container mx-auto">
        <div class="pt-10">
            <div class="ml-10 text-lg font-bold mt-10">Popular Movies</div>
            <div class="flex space-x-4 mt-4 overflow-visible">
                @foreach ($movies as $index => $movie)
                    <div class="bg-gray-800 rounded-lg overflow-hidden w-full transform transition-transform duration-200 hover:shadow-lg hover:scale-125"
                        onmouseover="this.style.zIndex='10'" onmouseout="this.style.zIndex='0'">
                        <a href="{{ route('movie', ['title' => $movie['title']]) }}"
                            class="rounded-lg overflow-hidden w-full" target="_blank">
                            <img src="{{ asset('assets/images/movies/' . $index + 1 . '.jpg') }}"
                                alt="{{ $movie['title'] }}" class="w-full h-56 object-cover" loading="lazy">
                            <div class="p-2">
                                <p class="text-sm font-semibold text-center">{{ $movie['title'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="ml-10 text-lg font-bold mt-10">Popular Anime</div>
            <div class="flex space-x-4 mt-4">
                @foreach ($animes as $index => $anime)
                    <div class="bg-gray-800 rounded-lg overflow-hidden w-full transform transition-transform duration-200 hover:bg-gray-700 hover:shadow-lg hover:scale-125"
                        onmouseover="this.style.zIndex='10'" onmouseout="this.style.zIndex='0'">
                        <a href="{{ route('anime', ['title' => $anime['title']]) }}"
                            class="rounded-lg overflow-hidden w-full" target="_blank">
                            <img src="{{ asset('assets/images/anime/' . $index + 1 . '.jpg') }}"
                                alt="{{ $anime['title'] }}" class="w-full h-56 object-cover" loading="lazy">
                            <div class="p-2">
                                <p class="text-sm font-semibold text-center">{{ $anime['title'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
