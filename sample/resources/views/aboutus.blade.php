<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 ">
    @include('layouts.navbar')
    <div class="text-white flex flex-col items-center justify-center h-screen">
        <h1>About us!</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach ($details as $index => $detail)
                <div class="bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/images/profile/' . ($index + 1) . '.jpg') }}"
                            alt="{{ $detail['name'] }}" class="w-32 h-32 rounded-full border-4 border-white shadow-md"
                            loading="lazy">
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold mb-2">{{ $detail['name'] }}</h2>
                        <p class="text-white italic">"{{ $detail['qoute'] }}"</p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ $detail['facebook'] }}" target="_blank">
                            <button
                                class="px-4 py-2 bg-gray-900 text-white rounded-lg shadow hover:bg-red-600 transition">
                                Know more!
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
