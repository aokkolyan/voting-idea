<div class="idea-and-button-container">
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container flex-col md:flex-row bg-white rounded-xl flex  box-shadow mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="#">
                        <img src="{{$idea->user->getAvatar()}}" alt="avatar"
                            class="w-14 h-14 rounded-xl ">
                    </a>
                </div>
                <div class="w-full mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> {{ $idea->title }} </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                      {{ $idea->description}}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900 ">{{ $idea->user->name}}</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans()}}</div>
                            <div>&bull;</div>
                            <div>{{$idea->category->name ?? 'No category'}}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div
                                class= "{{$idea->getStatusClass()}} w-28 h-7 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2 cursor-pointer">
                                {{$idea->status->name}}
                            </div>
                            <button @click=" isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dailog rounded-xl py-2 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0"
                                    x-cloak x-show.transition.origin.top.left.duration.700ms="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.widnow = "isOpen = false">
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

                        <div class="md:hidden flex items-center  mt-4 md:mt-0 mx-4 ">
                            <div class="bg-gray-100 rounded-xl text-center h-10 py-2 px-4 pr-8 border border-gray-200">
                                <div class="text-sm font-bold leading-none @if($hasVoted) text-blue @endif">{{ $voteCount }}</div>
                                <div class="text-xxs font-semibold leading-none text-gray-900">votes</div>
                            </div>
                             @if ($hasVoted)
                             <button
                             wire:click.prevent="vote"
                             class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                            hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5"> voted
                            </button>
                            @else
                            <button
                                wire:click.prevent="vote"
                                class="w-20 h-10 bg-gray-300 font-bold text-xxs  uppercase rounded-xl border border-gray-200
                                hover:border-gray-400 transition duration-150 ease-in px-4 py-2 -mx-5"> vote
                            </button>
                             @endif
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Idea Container --}}
</div> <!-- end idea and End button container -->