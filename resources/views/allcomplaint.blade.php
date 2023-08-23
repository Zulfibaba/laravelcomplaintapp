<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaints Module</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-lg font-semibold">Complaints Module</a>

            <div>
                <a href="{{ route('login') }}" class="text-white px-4 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-white px-4 hover:underline">Register</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 text-center">
        <h1 class="text-4xl font-semibold text-gray-800">Welcome to the Complaints Module</h1>
        <p class="mt-4 text-gray-600">Easily manage and track user complaints with our intuitive platform.<br>
            Register Your Self By One Click .
        </p>
        <div class="mt-6">
            {{-- <a href="{{ route('home') }}"
                class="bg-blue-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-600">View Complaints</a>
        </div> --}}
        </div>

</body>

</html>
