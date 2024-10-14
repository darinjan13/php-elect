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
            <div class="ml-10 text-lg font-bold">Trending Now</div>
            <div class="flex space-x-4 mt-4">
                @for ($i = 0; $i < count($trending); $i++)
                    <div class="bg-gray-800 rounded-lg overflow-hidden w-full transform transition-transform duration-200 hover:bg-gray-700 hover:shadow-lg hover:scale-125"
                        onmouseover="this.style.zIndex='10'" onmouseout="this.style.zIndex='0'">
                        <a class="bg-gray-800 rounded-lg overflow-hidden w-full">
                            <img src="{{ asset('assets/images/trending/' . $i + 1 . '.jpg') }}"
                                alt="{{ $trending[$i] }}" class="w-full h-56 object-cover">
                            <div class="p-2">
                                <p class="text-sm font-semibold text-center">{{ $trending[$i] }}</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>

            <div class="ml-10 text-lg font-bold mt-10">Popular Movies</div>
            <div class="flex space-x-4 mt-4 overflow-visible">
                @for ($i = 0; $i < count($popular); $i++)
                    <div class="bg-gray-800 rounded-lg overflow-hidden w-full transform transition-transform duration-200 hover:shadow-lg hover:scale-125"
                        onmouseover="this.style.zIndex='10'" onmouseout="this.style.zIndex='0'">
                        <a href="/" class="rounded-lg overflow-hidden w-full">
                            <img src="{{ asset('assets/images/popular/' . $i + 1 . '.jpg') }}" alt="{{ $popular[$i] }}"
                                class="w-full h-56 object-cover">
                            <div class="p-2">
                                <p class="text-sm font-semibold text-center">{{ $popular[$i] }}</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>

            <div class="ml-10 text-lg font-bold mt-10">Anime</div>
            <div class="flex space-x-4 mt-4">
                @for ($i = 0; $i < count($anime); $i++)
                    <div class="bg-gray-800 rounded-lg overflow-hidden w-full transform transition-transform duration-200 hover:bg-gray-700 hover:shadow-lg hover:scale-125"
                        onmouseover="this.style.zIndex='10'" onmouseout="this.style.zIndex='0'">
                        <a class="bg-gray-800 rounded-lg overflow-hidden w-full">
                            <img src="{{ asset('assets/images/anime/' . $i + 1 . '.jpg') }}" alt="{{ $anime[$i] }}"
                                class="w-full h-56 object-cover">
                            <div class="p-2">
                                <p class="text-sm font-semibold text-center">{{ $anime[$i] }}</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</body>

</html>
