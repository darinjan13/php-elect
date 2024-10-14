<!-- resources/views/layouts/layouts.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title', 'My Laravel App')</title> <!-- Default title -->
</head>

<body>
    <!-- Include your navbar here -->
    @include('layouts.navbar') <!-- Adjust the path as needed -->

    <!-- Main content area -->
    <div class="container mx-auto p-4">
        @yield('content') <!-- This is where your page content will be inserted -->
    </div>
</body>

</html>
