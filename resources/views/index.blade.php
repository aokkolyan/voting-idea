<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category one">Category One</option>
                <option value="Category one">Category One</option>
                <option value="Category one">Category One</option>
                <option value="Category one">Category One</option>
                <option value="Category one">Category One</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category one">Filter</option>
                <option value="Category one">Filter one</option>
                <option value="Category one">Filter One</option>
                <option value="Category one">Filter One</option>
                <option value="Category one">Filter One</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full placeholder-gray-900 rounded-xl bg-white px-4 py-2 pl-8 border-none">
            <div class="absolute top-0 flex items-center h-full ml">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </div>
        </div>
    </div> <!-- End filters !-->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-500 ease-in box-shadow">
            <div class="hidden md:block  border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-2 border border-gray-200 hover:border-gray-400  transition duration-150 ease-in">
                        voted
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/boy_145846.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-4 flex flex-col justify-between ">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="" class="hover:underline"> What is function in Javascript? </a>
                    </h4>
                    <div class="text-gray-600 mt-2 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur esse, porro ipsa, harum
                        ipsam nesciunt beatae ad eaque recusandae commodi optio dolorem assumenda maxime quidem ullam
                        natus quos error! Eligendi.
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hour ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">

                            <div
                                class= "w-28 h-7 bg-gray-200 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                                Open
                            </div>
                            <button @click=" isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.widnow = "isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl
                                    md:ml-8 top-8 md:top-6 right-0 md:left-0
                                    ">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Delete Post
                                        </a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center md:hidden mt-4 md:mt-0 mx-4 ">
                            <div class="bg-gray-100 rounded-xl text-center h-10 py-2 px-4 pr-8 border border-gray-200">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-900">votes</div>
                            </div>
                            <button
                                class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                             hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5">
                                votes
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-500 ease-in box-shadow">
            <div class="hidden md:block  border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-2 border border-gray-200 hover:border-gray-400  transition duration-150 ease-in">
                        voted
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/user.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-4 flex flex-col justify-between ">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="" class="hover:underline"> What is function in Javascript? </a>
                    </h4>
                    <div class="text-gray-600 mt-2 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur esse, porro ipsa, harum
                        ipsam nesciunt beatae ad eaque recusandae commodi optio dolorem assumenda maxime quidem ullam
                        natus quos error! Eligendi.
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hour ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">

                            <div
                                class= "w-28 h-7 bg-gray-200 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                                Open
                            </div>
                            <button @click=" isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.widnow = "isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl
                                    md:ml-8 top-8 md:top-6 right-0 md:left-0
                                    ">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Delete Post
                                        </a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center md:hidden mt-4 md:mt-0 mx-4 ">
                            <div class="bg-gray-100 rounded-xl text-center h-10 py-2 px-4 pr-8 border border-gray-200">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-900">votes</div>
                            </div>
                            <button
                                class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                                  hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5">
                                votes
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-500 ease-in box-shadow">
            <div class="hidden md:block  border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-2 border border-gray-200 hover:border-gray-400  transition duration-150 ease-in">
                        voted
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/user_219977.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-4 flex flex-col justify-between ">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="" class="hover:underline"> What is function in Javascript? </a>
                    </h4>
                    <div class="text-gray-600 mt-2 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur esse, porro ipsa, harum
                        ipsam nesciunt beatae ad eaque recusandae commodi optio dolorem assumenda maxime quidem ullam
                        natus quos error! Eligendi.
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hour ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">

                            <div
                                class= "w-28 h-7 bg-gray-200 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                                Open
                            </div>
                            <button @click=" isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.widnow = "isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl
                                    md:ml-8 top-8 md:top-6 right-0 md:left-0
                                    ">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Delete Post
                                        </a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center md:hidden mt-4 md:mt-0 mx-4 ">
                            <div class="bg-gray-100 rounded-xl text-center h-10 py-2 px-4 pr-8 border border-gray-200">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-900">votes</div>
                            </div>
                            <button
                                class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                                 hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5">
                                votes
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-500 ease-in box-shadow">
            <div class="hidden md:block  border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-2 border border-gray-200 hover:border-gray-400  transition duration-150 ease-in">
                        voted
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/useridea.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-4 flex flex-col justify-between ">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="" class="hover:underline"> What is function in Javascript? </a>
                    </h4>
                    <div class="text-gray-600 mt-2 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur esse, porro ipsa, harum
                        ipsam nesciunt beatae ad eaque recusandae commodi optio dolorem assumenda maxime quidem ullam
                        natus quos error! Eligendi.
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hour ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">

                            <div
                                class= "w-28 h-7 bg-gray-200 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                                Open
                            </div>
                            <button @click=" isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.widnow = "isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl
                                        md:ml-8 top-8 md:top-6 right-0 md:left-0
                                        ">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam
                                        </a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Delete Post
                                        </a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center md:hidden mt-4 md:mt-0 mx-4 ">
                            <div class="bg-gray-100 rounded-xl text-center h-10 py-2 px-4 pr-8 border border-gray-200">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-900">votes</div>
                            </div>
                            <button
                                class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                                 hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5">
                                votes
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
