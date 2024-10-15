<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
</head>

<body class="flex items-center justify-center h-screen bg-gray-900">
    <div class="text-center bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-6xl font-bold text-red-500">404</h1>
        <p class="mt-4 text-lg text-white">Oops! The page you are looking for cannot be found.</p>
        <p class="mt-2">
            <a href="{{ route('browse') }}" class="text-blue-500 hover:underline">Go back to Home</a>
        </p>
    </div>
</body>

</html>
