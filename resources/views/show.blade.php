<x-app-layout>
    <div>
        <a href="#" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container flex-col md:flex-row bg-white rounded-xl flex  box-shadow mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/user_219976.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> A randome text idea here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet voluptate at maiores vel
                        aliquid nisi, nam harum dicta beatae numquam, impedit nemo quidem voluptatibus cumque molestiae
                        modi soluta, reprehenderit quas!
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900 ">John Sina</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>10 hour ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div 
                            x-data="{isOpen: false}"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                            >
                            <div
                                class= "w-28 h-7 bg-gray-200 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                                Open
                            </div>
                            <button
                                    @click=" isOpen = !isOpen"
                                    class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 "
                                    >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl py-2 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0"
                                    x-cloak
                                    x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.widnow = "isOpen = false"

                                    >
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Mark as Spam
                                        </a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                            Delete Post
                                        </a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Idea Container --}}
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div 
                x-data="{isOpen : false}" 
                class="relative"
                >
                <button type="button"
                    @click = " isOpen = !isOpen"
                    class="flex items-center bg-blue border border-blue justify-center w-32 h-11  hover:bg-blue-hover text-white font-bold rounded-xl px-4 py2"
                    >
                    <span class="ml-1">Reply</span>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.700ms="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.widnow = "isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dailog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share your thoughts......"></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center bg-blue border border-blue justify-center w-1/2 h-11  hover:bg-blue-hover text-white font-bold rounded-xl px-4 py2">
                                Post comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 h-10 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold rounded-xl px-4 py2">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>

                        </div>


                    </form>
                </div>
            </div>
            <div   x-data = "{isOpen:false}" class="relative">
                <button type="button"
                    @click=" isOpen = !isOpen "
                    class="flex items-center justify-center w-32 h-11 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold rounded-xl px-4 py2"
                    >
                    <span 
                    class="mr-1"
                    >
                    Set status</span>
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.ease-in.500ms = "isOpen"
                    @click.away="isOpen = false"
                    class=" absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dailog rounded-xl mt-2"
                    >
                    <form action="#" class=" space-y-4 px-4 py-6 cursor-pointer">

                        <div class="  flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Open</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Considering</label>
                        </div>
                        <div class=" flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">In Progress</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Implemeneted</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Close</label>
                        </div>

                        <textarea name="update_comment" id="update_comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
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
                                class="bg-blue border border-blue transition duration-150 ease-in font-semibold hover:bg-blue-hover  text-white py-2 w-1/2 h-10 px-4 rounded-xl">Update</button>
                        </div>
                        <div class="flex items-center mb-4">
                            <input name="notify_voters" id="notify_voters" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Notify all voters</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2  ">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">vote</div>
            </div>
            <button type="button"
                class="flex items-center justify-center w-32 h-11 bg-gray-200 uppercase hover:bg-gray-300 text-gray-700 font-bold rounded-xl px-4 py2">
                <span class="mr-1">Vote</span>
            </button>
        </div>

    </div>
    <div class="comments-container relative space-y-6 ml-22 my-8 pt-6 mt-1">
        <div class="comment-container  space-y-6 my-6 mt-4 flex rounded-xl">
            <div class="idea-container relative bg-white rounded-xl flex  box-shadow mt-3">
                <div class="flex flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <img src="{{ asset('assets/avatar/boy_145846.png') }}" alt="avatar"
                                class="w-14 h-14 rounded-xl ">
                        </a>
                    </div>
                    <div class="w-full mx-4">
                        {{-- <h4 class="text-xl font-semibold">
                            <a href="" class="hover:underline"> A randome text idea here</a>
                        </h4> --}}
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet voluptate at maiores vel
                            aliquid nisi, nam harum dicta beatae numquam, impedit nemo quidem voluptatibus cumque
                            molestiae
                            modi soluta, reprehenderit quas!
                        </div>
                        <div  x-data="{isOpen: false}" class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-gray-900 ">John Sina</div>
                                <div>&bull;</div>
                                <div>10 hour ago</div>
                            </div>
                            <div   class=" flex items-center space-x-2">
                                <button
                                  @click=" isOpen = !isOpen"
                                    class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>
                                    <ul
                                        x-cloak
                                        x-show.transition.origin.top.left.duration.700ms="isOpen"
                                        @click.away="isOpen = false"
                                        @keydown.escape.widnow = "isOpen = false"
                                        class=" absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl py-3 px-2">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="is-Admin comment-container bg-white rounded-xl flex  mt-6">
            <div class="flex flex-1 px-4 py-6 relative">
                <div class="flex-none">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/useridea.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                    <div class="text-center mt-2 text-blue text-xxs uppercase font-bold">Admin</div>
                </div>
                <div class="w-full mx-4  ">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> Status Change Becuase it's wrong</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet voluptate at maiores vel
                        aliquid nisi, nam harum dicta beatae numquam, impedit nemo quidem voluptatibus cumque
                        molestiae
                        modi soluta, reprehenderit quas!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue ">Alex sandra</div>
                            <div>&bull;</div>
                            <div>10 hour ago</div>
                        </div>
                        <div class=" flex items-center space-x-2">
                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul
                                    class=" hidden absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl py-3 px-2">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative bg-white  rounded-xl flex mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="{{ asset('assets/avatar/avatar_147144.png') }}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-4  ">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> Status Change Becuase it's wrong</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet voluptate at maiores vel
                        aliquid nisi, nam harum dicta beatae numquam, impedit nemo quidem voluptatibus cumque
                        molestiae
                        modi soluta, reprehenderit quas!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue ">Alex sandra</div>
                            <div>&bull;</div>
                            <div>10 hour ago</div>
                        </div>
                        <div class=" flex items-center space-x-2">
                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul
                                    class=" hidden absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl py-3 px-2 block">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End comment --}}
</x-app-layout>
