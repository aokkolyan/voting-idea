<div
x-data
@click = "
        const clicked = $event.target
        const target = clicked.tagName.toLowerCase()

        const ignores = ['button','svg','path','a']

        if(! ignores.includes(target)) {
            clicked.closest('.ideas-container').querySelector('.idea-link').click()
        }

        {{-- if(target !== 'button' && target !== 'svg' && target !== 'a' && target !=='path' ) {
            $event.target.closest('.ideas-container').querySelector('.idea-link').click()
        } --}}

 "
class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-500 ease-in box-shadow cursor-pointer"
>
<div class="hidden md:block  border-gray-100 px-5 py-8">
    <div class="text-center">
        <div class="font-semibold text-2xl">{{ $voteCount ?? "0" }}</div>
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
            <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                class="w-14 h-14 rounded-xl idea-link ">
        </a>
    </div>
    <div class="w-full mx-4 flex flex-col justify-between ">
    <h4 class="text-xl font-semibold mt-2 md:mt-0">
            <a href="{{route('idea.show', $idea)}}" class="hover:underline">{{ $idea->title}}</a>
        </h4>
        <div class="text-gray-600 mt-2 line-clamp-3"> {{$idea->description}} </div>
        <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                <div>{{ $idea->created_at->diffForHumans()}}</div>
                <div>&bull;</div>
                <div>{{$idea->category->name ?? 'no category'}}</div>
                <div>&bull;</div>
                <div class="text-gray-900">10 Comments</div>
            </div>
            <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">

                <div 
                    class= " {{$idea->getStatusClass() }}  w-28 h-7 text-xxs uppercase font-bold leading-none rounded-full text-center px-4 py-2">
                   {{$idea->status->name}}
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
                    <div class="text-sm font-bold leading-none">{{ $voteCount }}</div>
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