<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="text-white text-lg font-semibold">Complaints Module</a>
            <div>
                <a href="{{ route('login') }}" class="text-white px-4 hover:underline dark:text-black-500">Login</a>
                <a href="{{ route('register') }}"
                    class="text-white px-4 hover:underline dark:text-black-500">Register</a>
            </div>
        </div>
    </nav>

    <div class=" mt-10 max-w-7xq mx-auto sm:px-8 lg:px-20">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="mt-8">
                    @foreach ($complaints as $complaint)
                        <div class="bg-gray-200 p-4 text-gray-900 mb-4 rounded-lg">
                            <h2 class="text-lg font-bold">{{ $complaint->title }}</h2>
                            <p class="text-gray-600">{{ $complaint->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
