@section('page-title')
    Создать HelpDesk
@endsection

<div>
    <main class="bg-repeat w-full h-full text-primary-100 heropattern-texture-gray-200">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <a href="/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <img src="/images/logo.svg" class="mr-4 w-full" alt="Logo">
            </a>
            <!-- Card -->
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

                            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Придумайте адрес
                            </label>
                            <div class="relative">
                                <input minlength="3" wire:model="form.domain" maxlength="20" type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pr-10 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" placeholder="company">
                                <div class="text-black absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none">
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
                    <div class="flex items-center text-black mt-4">
                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                        </svg>
                        <span>Создаем пользователя, настраиваем аккаунт...</span>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
