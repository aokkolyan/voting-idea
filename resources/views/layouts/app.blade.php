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
    <livewire:styles />
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
                    <p class="text-xs mt-5">

                        @auth
                        Let us know what you would and We'll take a look over!
                        @else
                        
                        <div class="bg-red border border-red-400 text-white px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Please login!</strong>
                            <span class="block sm:inline"> first to create your ideas Thanks you!!</span>
                          </div>
                        @endauth
                        
                     </p>
                </div>
                @auth
                <livewire:create-idea />
                @else
                <div class="my-10 text-center">
                    <a href="{{ route('login') }}" class="bg-blue hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full mt-40">Sign In</a>
                    <a href="{{ route('register') }}" class="bg-blue hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full mt-40">Sign Up</a>
                </div>
                @endauth
                
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
    <livewire:scripts />
</body>

</html>
