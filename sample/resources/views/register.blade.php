<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('assets/images/home-background.jpg') }}');
            /* Change to your background image */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="bg-black bg-opacity-70 rounded-lg p-8 w-60%">
        <h1 class="text-white text-2xl font-bold mb-6 text-center">Sign Up</h1>
        <form action="/submitEmail" method="POST">
            @csrf <!-- Include CSRF token for security -->
            <input value="{{ old('email', $email) }}" type="email" name="email"
                class="w-full p-2 mb-4 text-white bg-gray-800 border border-gray-700 rounded" placeholder="Email"
                required>
            <input type="password" name="password"
                class="w-full p-2 mb-4 text-white bg-gray-800 border border-gray-700 rounded" placeholder="Password"
                required>
            <button type="submit"
                class="w-full bg-red-600 text-white font-bold py-2 rounded hover:bg-red-700 transition duration-300">Sign
                Up</button>
        </form>
        <p class="mt-4 text-white text-center">Already have an account? <a href="/signin" class="underline">Log in
                here.</a></p>
    </div>
</body>

</html>
