@section('page-title')
    Создать HelpDesk
@endsection

<div>
    <main class="bg-repeat w-full h-full text-primary-100 heropattern-texture-gray-200">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <x-layout.logo />

            <div class="relative w-full max-w-xl p-6 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800 animate-fade-up animate-once">
                <div class="text-xs text-gray-400">
                    {{ auth()->user()->name }}, теперь можно
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                    Создать HelpDesk
                </h2>

                <div wire:loading.delay.long.remove wire:target="save">
                    <form class="mt-6" wire:submit="save">
                        <div class="space-y-4 mb-6">
                            <x-forms.input title="Название для системы" name="form.name" placeholder="HelpDesk" />

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Придумайте адрес
                            </label>
                            <div class="relative">
                                <input minlength="3" wire:model="form.domain" maxlength="20" type="input" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="company">
                                <div class="text-black dark:text-white absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none">
                                    .pomogite.me
                                </div>
                            </div>
                            @error('form.domain')
                            <div class="text-xs text-red-500 mt-1 flex gap-1 items-center animate-fade-up animate-once">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M208,144h16a8,8,0,0,0,0-16H208V112h16a8,8,0,0,0,0-16H207.6a79.76,79.76,0,0,0-21.44-46.85l19.5-19.49a8,8,0,1,0-11.32-11.32l-20.29,20.3a79.74,79.74,0,0,0-92.1,0L61.66,18.34A8,8,0,0,0,50.34,29.66l19.5,19.49A79.76,79.76,0,0,0,48.4,96H32a8,8,0,0,0,0,16H48v16H32a8,8,0,0,0,0,16H48v8c0,2.7.14,5.37.4,8H32a8,8,0,0,0,0,16H51.68a80,80,0,0,0,152.64,0H224a8,8,0,0,0,0-16H207.6c.26-2.63.4-5.3.4-8ZM128,40a64.07,64.07,0,0,1,63.48,56h-127A64.07,64.07,0,0,1,128,40Zm8,175.48V136a8,8,0,0,0-16,0v79.48A64.07,64.07,0,0,1,64,152V112H192v40A64.07,64.07,0,0,1,136,215.48Z"></path>
                                </svg>

                                <div>{{$message}}</div>
                            </div>
                            @enderror

                        </div>


                        <div class="flex justify-end items-center">
                            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-[#f39200] rounded-lg hover:bg-[#b56d00] sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700">
                                <div>
                                    Начать работу 🦸
                                </div>
                            </button>
                        </div>
                    </form>
                </div>

                <div wire:loading.delay.long wire:target="save">
                    <x-layout.loading-text text="Создаем новый проект, скоро перенаправим в панель управления..." />
                </div>
            </div>
        </div>

    </main>
</div>
