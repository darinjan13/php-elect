<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black text-white">
    <nav class="sticky z-50 top-0 bg-black md:px-10">
        <div class="grid grid-cols-2 md:justify-between items-center w-full p-2 xl:p-4">
            <div class="flex flex-row items-center space-x-2 md:space-x-10">
                <div class="block lg:hidden text-white">
                    <button class="text-white">Browse</button>
                    <div class="absolute z-50">
                        <div class="grid">
                            <a href="/browse" class="text-white">Home</a>
                            <a href="/aboutus" class="text-white">About us</a>
                            <a href="/contactus" class="text-white">Movies</a>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block text-white">
                    <a class="rounded-md font-semibold p-1 xl:p-2 {{ request()->routeIs('browse') ? 'bg-blue-500' : 'hover:bg-blue-500' }}"
                        href="{{ route('browse') }}">Home</a>
                    <a class="rounded-md font-semibold p-1 xl:p-2 {{ request()->routeIs('about') ? 'bg-blue-500' : 'hover:bg-blue-500' }}"
                        href="{{ route('about') }}">About us</a>
                    <a class="rounded-md font-semibold p-1 xl:p-2 {{ request()->routeIs('contact') ? 'bg-blue-500' : 'hover:bg-blue-500' }}"
                        href="{{ route('contact') }}">Contact us</a>
                </div>
            </div>

            <div class="flex flex-row md:justify-end items-center space-x-2 md:space-x-10">
                <a class="rounded-md font-semibold hover:bg-blue-500 p-1 xl:p-2 text-white" href="/">Logout</a>
            </div>
        </div>
    </nav>
</body>

</html>
