<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Complaints') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="py-12">

                        @if (session()->has('status'))
                            <div class="mb-10  bg-green-500 text-green  py-2 px-4 rounded  text-center">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">

                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                                        <thead class="w-full text-sm text-left text-white-500 dark:text-white-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Title
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Description
                                                </th>

                                        </thead>
                                        <tbody>
                                            @foreach ($complaints as $complaint)
                                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <a href="post/{{ $complaint->id }}">
                                                            {{ $complaint->user->name }}
                                                        </a>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <a href="post/{{ $complaint->id }}">
                                                            {{ $complaint->title }}
                                                        </a>
                                                    </td>
                                                    <td class="px-6 py-04">
                                                        <a href="post/{{ $complaint->id }}">
                                                            {{ $complaint->description }}
                                                        </a>
                                                    </td>
                                                    @admin()
                                                        <td class="px-6 py-4">
                                                            <div class="flex">
                                                                <a href="{{ url('/complaints/edit', $complaint->id) }}"
                                                                    class="mr-2 font-medium text-green-600 dark:text-green-500 hover:underline">Edit</a>
                                                                <a href="{{ url('/complaints/delete', $complaint->id) }}"
                                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                                            </div>
                                                        </td>
                                                    @endadmin
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $complaints->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
