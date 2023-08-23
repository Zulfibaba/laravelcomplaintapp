<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Complaint') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complaint Form</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-900 text-white">

        <div class="bg-gray-900 py-6">
            <div class="container mx-auto text-center">
                <h1 class="text-3xl font-semibold text-white">Complaint Form</h1>
            </div>
        </div>

        <div class="container mx-auto bg-gray-900 px-4">
            <div class="max-w-6xl mx-auto p-6 bg-gray-700 rounded-lg shadow-md">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block mb-2 text-white">Title</label>
                        <input type="text" value="{{ old('title') }}" id="title" name="title"
                            placeholder="Title of your complaint..."
                            class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded focus:outline-none focus:border-gray-400"
                            required>
                        @error('title')
                            <div class="mt-2 text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-white">Description</label>
                        <textarea id="description" name="description" placeholder="Write something..."
                            class="w-full px-4 py-2 bg-gray-800 border text-white border-gray-600 rounded focus:outline-none focus:border-gray-400"
                            style="height:200px" required></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit"
                            class="px-6 py-2 bg-green-500 text-white rounded cursor-pointer hover:bg-green-600">
                    </div>
                </form>
                <div class="mt-4">
                        {{-- @if (session()->has('status'))
                            <div class="bg-purple-500 text-green-200 font-bold py-2 px-4 rounded">
                                {{ session('status') }}
                            </div>
                        @endif --}}
                </div>
            </div>
        </div>

    </body>

    </html>

</x-app-layout>
