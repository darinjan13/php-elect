<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles can be added here */
    </style>
</head>

<body class="bg-black text-white">

    <nav class="sticky z-50 top-0 bg-black md:px-10">
        <div class="grid grid-cols-2 md:justify-between items-center w-full p-2 xl:p-4">
            <div class="flex flex-row items-center space-x-2 md:space-x-10">
                <img class="h-3 md:h-5" src="../Assets/logo.svg" alt="Logo" />
                <div class="block lg:hidden text-white">
                    <button class="text-white">Browse</button>
                    <div class="absolute z-50">
                        <div class="grid">
                            <a href="/browse" class="text-white">Home</a>
                            <a href="/tv" class="text-white">TV Shows</a>
                            <a href="/movies" class="text-white">Movies</a>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <a class="rounded-md font-semibold hover:bg-red-600 p-1 xl:p-2" href="/browse">Home</a>
                    <a class="rounded-md font-semibold hover:bg-red-600 p-1 xl:p-2" href="/tv">TV Shows</a>
                    <a class="rounded-md font-semibold hover:bg-red-600 p-1 xl:p-2" href="/movies">Movies</a>
                </div>
            </div>

            <div class="flex flex-row md:justify-end items-center space-x-2 md:space-x-10">
                <input type="search"
                    class="bg-slate-700 border-white border focus:border-white focus:border-2 w-[60%] m-0 px-1 lg:px-3 py-1 lg:py-1.5"
                    placeholder="Search" name="search" required />
                <button class="rounded-md hover:bg-red-600 px-2 lg:px-5 py-1 lg:py-2">
                    <div class="text-white">Logout</div>
                </button>
            </div>
        </div>
    </nav>
</body>

</html>
