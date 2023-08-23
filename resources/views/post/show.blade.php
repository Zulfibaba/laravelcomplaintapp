<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
{{-- //post section --}}
<div class="p-6 text-gray-900 dark:text-gray-100">
    <a href="/AllComplaint" class="text-black flex">&#x2190; Back To All Complaints</a>
    <div class="bg-gray-200 p-4 text-gray-900 mb-4 rounded-lg h-60">
        <h2 class="text-lg font-bold text-center">{{ $show->title }}</h2>
        <p class="text-gray-600 text-center pt-8">{{ $show->description }}</p>
    </div>
</div>

<section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
    <div class="max-w-2xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comments</h2>
        </div>
        @auth
            <form class="mb-6" method="POST" action="/post/{{ $show->id }}/comment">
                @csrf
                <div
                    class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea name="body" rows="6"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                        placeholder="Write a comment..." required></textarea>
                </div>
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white text-black bg-gray-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Post comment
                </button>
            </form>

        @endauth
        @foreach ($show->comments as $shows)
            <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                <footer class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                class="mr-2 w-6 h-6 rounded-full" src="https://i.pravatar.cc/60?u={{ $shows->user_id }}"
                                alt="">
                            {{ $shows->user->name }}
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                title="February 8th, 2022">{{ $shows->created_at->format('d/m/Y') }}</time></p>
                    </div>
                    @admin
                        <form method="POST" action="/post/{{ $shows->id }}/delete">
                            @csrf
                            @method('DELETE')
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="submit">
                                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="w-5 h-5" viewBox="0 0 482.428 482.429"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M381.163,57.799h-75.094C302.323,25.316,274.686,0,241.214,0c-33.471,0-61.104,25.315-64.85,57.799h-75.098
                            c-30.39,0-55.111,24.728-55.111,55.117v2.828c0,23.223,14.46,43.1,34.83,51.199v260.369c0,30.39,24.724,55.117,55.112,55.117
                            h210.236c30.389,0,55.111-24.729,55.111-55.117V166.944c20.369-8.1,34.83-27.977,34.83-51.199v-2.828
                            C436.274,82.527,411.551,57.799,381.163,57.799z M241.214,26.139c19.037,0,34.927,13.645,38.443,31.66h-76.879
                            C206.293,39.783,222.184,26.139,241.214,26.139z M375.305,427.312c0,15.978-13,28.979-28.973,28.979H136.096
                            c-15.973,0-28.973-13.002-28.973-28.979V170.861h268.182V427.312z M410.135,115.744c0,15.978-13,28.979-28.973,28.979H101.266
                            c-15.973,0-28.973-13.001-28.973-28.979v-2.828c0-15.978,13-28.979,28.973-28.979h279.897c15.973,0,28.973,13.001,28.973,28.979
                            V115.744z" />
                                            <path
                                                d="M171.144,422.863c7.218,0,13.069-5.853,13.069-13.068V262.641c0-7.216-5.852-13.07-13.069-13.07
                            c-7.217,0-13.069,5.854-13.069,13.07v147.154C158.074,417.012,163.926,422.863,171.144,422.863z" />
                                            <path
                                                d="M241.214,422.863c7.218,0,13.07-5.853,13.07-13.068V262.641c0-7.216-5.854-13.07-13.07-13.07
                            c-7.217,0-13.069,5.854-13.069,13.07v147.154C228.145,417.012,233.996,422.863,241.214,422.863z" />
                                            <path
                                                d="M311.284,422.863c7.217,0,13.068-5.853,13.068-13.068V262.641c0-7.216-5.852-13.07-13.068-13.07
                            c-7.219,0-13.07,5.854-13.07,13.07v147.154C298.213,417.012,304.067,422.863,311.284,422.863z" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    @endadmin
                </footer>
                <p class="text-gray-500 dark:text-gray-400">
                    {{ $shows->body }}
                </p>

            </article>
        @endforeach
        @guest
        <p class="text-red-500">You must <a href="{{ route('login') }}" class="text-purple-700">Login </a> to Post a Comment</p>                
        @endguest
    
    
    </div>
</section>
