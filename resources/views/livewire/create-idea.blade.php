<div>
    <form wire:submit.prevent="CreateIdea"  class="space-y-4 px-4 py-6">
        <div>
            <input wire:model.defer="title" type="text" 
                class="w-full text-sm  block  px-3 py-2 mt-1 text-gray-700 dark:text-gray-500 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="Your ideas">
                @error('title')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
        </div>
        <div>
            <select wire:model.defer="category" name="category_add" id="category" class="bg-gray-100 w-full rounded-xl border-none px-4 py-2">
                @foreach ($categories as $category)
                
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              
            </select>
        </div>
        <div>
            <textarea wire:model.defer="description" cols="30" rows="3"
                class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"
                placeholder="Descript your Ideas"></textarea>
                
                @error('description')
                <p class="text-red text-xs mt-1">{{ $message }}</p>
            @enderror
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
        <div>
            @if(session('sucess_message'))
                <div 
                    x-data = " { isVisable:true} "
                    x-init="
                    setTimeout(() => {
                     isVisable = false 
                     },3000) 

                     "
                     x-show.transition.duration.1000ms="isVisable"
                    class="text-green mt-4"
                    >
                    {{ session('sucess_message') }}
                </div>
            @endif
        </div>
        
    </form>
</div>

