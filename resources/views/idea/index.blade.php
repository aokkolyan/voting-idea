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
        @foreach ($ideas as $idea )
        <livewire:idea-index :idea="$idea" :voteCount="$idea->vote_count"/>
       
        @endforeach
    </div>
    {{-- End Idea --}}
    <div class="my-8">
        {{$ideas->links()}}
    </div>
</x-app-layout>
