<div>
    <label for="first-name" class="flex gap-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{$title}}
    </label>

    @if($name == 'form.password')
        <div class="relative">
            <input type="{{$type}}" wire:model="{{$name}}" class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$placeholder}}">
            <button type="button" wire:click="generatePassword()" class="text-white absolute right-1.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-0 focus:outline-none font-normal rounded-lg text-sm px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Сгенерировать
            </button>
        </div>
    @else
        <input type="{{$type}}" wire:model="{{$name}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{$placeholder}}">
    @endif

    @error($name)
    <div class="text-xs text-red-500 mt-1 flex gap-1 items-center animate-fade-up animate-once">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 256 256">
            <path d="M208,144h16a8,8,0,0,0,0-16H208V112h16a8,8,0,0,0,0-16H207.6a79.76,79.76,0,0,0-21.44-46.85l19.5-19.49a8,8,0,1,0-11.32-11.32l-20.29,20.3a79.74,79.74,0,0,0-92.1,0L61.66,18.34A8,8,0,0,0,50.34,29.66l19.5,19.49A79.76,79.76,0,0,0,48.4,96H32a8,8,0,0,0,0,16H48v16H32a8,8,0,0,0,0,16H48v8c0,2.7.14,5.37.4,8H32a8,8,0,0,0,0,16H51.68a80,80,0,0,0,152.64,0H224a8,8,0,0,0,0-16H207.6c.26-2.63.4-5.3.4-8ZM128,40a64.07,64.07,0,0,1,63.48,56h-127A64.07,64.07,0,0,1,128,40Zm8,175.48V136a8,8,0,0,0-16,0v79.48A64.07,64.07,0,0,1,64,152V112H192v40A64.07,64.07,0,0,1,136,215.48Z"></path>
        </svg>

        <div>{{$message}}</div>
    </div>
    @enderror
</div>
