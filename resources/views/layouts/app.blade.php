<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting system</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-background font-sans text-gray-900 text-sm">
    <header class="flex items-center justify-between px-10 py-4 flex-col md:flex-row">
        <a href="#">System Logo</a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="{{ asset('assets/avatar/user.png') }}" class="w-12 h-8 rounded-full">
            </a>
        </div>
    </header>
    <main class="container max-w-custom mx-auto flex flex-col md:flex-row ">
        <div class="w-70  mx-auto md:mx-0 md:mr-3">
            <div class="bg-white rounded-xl mt-16 border-4 border-solid border-indigo-100 md:sticky md:top-8">
                <div class="text-center px-6 py-6 pt-6 ">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-5">Let us know what you would and We'll take a look over!</p>
                </div>
                <form action="#" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text" name="idea" id="idea"
                            class="w-full text-sm  block  px-3 py-2 mt-1 text-gray-700 dark:text-gray-500 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Your ideas">
                    </div>
                    <div>
                        <select name="category_add" id="category"
                            class="bg-gray-100 w-full rounded-xl border-none px-4 py-2">
                            <option value="Category one">Category</option>
                            <option value="Category one">Filter one</option>
                            <option value="Category one">Filter One</option>
                            <option value="Category one">Filter One</option>
                            <option value="Category one">Filter One</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="3"
                            class="w-full bg-gray-100 rounded-xl placeholder-gray-900  text-sm px-4 py-2 border-none"
                            placeholder="Descript your Ideas"></textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                            class="flex items-center justify-center w-1/2 h-10 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold rounded-xl px-4 py2">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            <span class="ml-2">Attach</span>
                        </button>
                        {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-xl">Add Idea</button> --}}
                        <button type="submit"
                            class="bg-blue border border-blue transition duration-150 ease-in font-semibold hover:bg-blue-hover  text-white py-2 w-1/2 h-10 px-4 rounded-xl">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full px-2 md:px-0 md:w-175">
            
            <nav class="hidden md:flex items-center justify-between text-xs">
                <ul class="flex uppercase border-b-4 font-semibold pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue ">All Ideas (86)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Consiering(6)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue"> In
                            progress(6)</a></li>
                </ul>

                <ul class="flex uppercase border-b-4 font-semibold pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue ">Implemented (16)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Closed(22)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
