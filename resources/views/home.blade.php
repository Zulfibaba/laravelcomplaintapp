<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaints Module</title>
    <link href="app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="text-white text-lg font-semibold">Complaints Module</a>
            @auth
                <a href="/dashboard" class="pl-8 text-white font-semibold hover:text-red-500">Dashboard</a>
            @else
                <div>
                    <a href="{{ route('login') }}" class="text-white px-4 hover:underline dark:text-black-500">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-white px-4 hover:underline dark:text-black-500">Register</a>
                </div>
            @endauth


        </div>
    </nav>

    <div class=" mt-10 max-w-7xq mx-auto sm:px-8 lg:px-20">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="mt-8">
                    @foreach ($complaints as $complaint)
                        <a href="{{ route('complaints.show', $complaint->id)}}"
                            <div class="bg-gray-200 p-4 text-gray-900 mb-4 rounded-lg h-60">
                                <h2 class="text-lg font-bold text-center">{{ $complaint->title }}</h2>
                                <p class="text-gray-600 text-center pt-8">{{ $complaint->description }}</p>
                            </div>
                        </a>
                    @endforeach
                    {{ $complaints->links() }}
                </div>
            </div>
        </div>
    </div>



</body>

</html>
