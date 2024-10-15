<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-gray-800 rounded-lg shadow-md p-8 text-center">
        <h1 class="text-7xl font-extrabold text-red-500">404</h1>
        <h2 class="mt-4 text-2xl font-semibold text-white">Page Not Found</h2>
        <p class="mt-2 text-white">The {{ $title }} you are looking for does not exist.</p>
        <div class="mt-6">
            <a href="{{ route('browse') }}"
                class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Go
                Back to Browse</a>
        </div>
    </div>
</body>

</html>
