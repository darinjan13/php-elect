<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $animeDetails['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white pb-20">
    @include('layouts.navbar')

    <div class="container mx-auto flex items-center justify-center h-screen">
        <div class="w-screen h-1/2 mb-10">
            <iframe class="w-full h-full rounded-lg shadow-lg"
                src="https://www.youtube.com/embed/{{ $animeDetails['youtube_id'] }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="flex items-center">
            {{-- <img src="{{ asset('assets/images/movies/' . $animeDetails['image'] . '.jpg') }}"
                alt="{{ $animeDetails['title'] }}" class="w-1/2 h-auto rounded-lg shadow-lg"> --}}
            <div class="ml-10 mt-5">
                <h1 class="text-4xl font-bold">{{ $animeDetails['title'] }}</h1>
                <p class="mt-2 text-sm text-gray-400">{{ $animeDetails['description'] }}</p>
                <div class="mt-5">
                    <p class="text-lg font-semibold">Release Date: <span
                            class="text-gray-300">{{ $animeDetails['release_date'] ?? 'N/A' }}</span></p>
                    <p class="text-lg font-semibold">Cast: <span
                            class="text-gray-300">{{ $animeDetails['cast'] ?? 'N/A' }}</span></p>
                    <p class="text-lg font-semibold">Genre: <span
                            class="text-gray-300">{{ $animeDetails['genre'] ?? 'N/A' }}</span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
