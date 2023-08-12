@section('page-title')
    Войти в систему
@endsection

<div>
    <main class="bg-repeat w-full h-full text-primary-100 heropattern-texture-gray-200">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <x-layout.logo />

            <div class="relative w-full max-w-xl p-6 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800 animate-fade-up animate-once">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                    Войти в систему
                </h2>

                @if($isError)
                    <div x-data="{ show: true }" x-show="show"  x-init="setTimeout(() => (show = false, $wire.set('isError', false)), 3000)" class="absolute w-full top-0 left-0 animate-fade-down animate-once flex items-center shadow-md p-4 mb-2 text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div class="ml-3 text-sm font-medium">
                            Неверный логин или пароль!
                        </div>123
                    </div>
                @endif


                <form class="mt-8 space-y-6" wire:submit="login">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Ваш
                            e-mail: </label>
                        <input type="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" required="">
                        @error('email')
                        <div class="text-xs text-red-500 mt-1 flex gap-1 items-center animate-fade-up animate-once">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M208,144h16a8,8,0,0,0,0-16H208V112h16a8,8,0,0,0,0-16H207.6a79.76,79.76,0,0,0-21.44-46.85l19.5-19.49a8,8,0,1,0-11.32-11.32l-20.29,20.3a79.74,79.74,0,0,0-92.1,0L61.66,18.34A8,8,0,0,0,50.34,29.66l19.5,19.49A79.76,79.76,0,0,0,48.4,96H32a8,8,0,0,0,0,16H48v16H32a8,8,0,0,0,0,16H48v8c0,2.7.14,5.37.4,8H32a8,8,0,0,0,0,16H51.68a80,80,0,0,0,152.64,0H224a8,8,0,0,0,0-16H207.6c.26-2.63.4-5.3.4-8ZM128,40a64.07,64.07,0,0,1,63.48,56h-127A64.07,64.07,0,0,1,128,40Zm8,175.48V136a8,8,0,0,0-16,0v79.48A64.07,64.07,0,0,1,64,152V112H192v40A64.07,64.07,0,0,1,136,215.48Z"></path>
                            </svg>

                            <div>{{$message}}</div>
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Ваш
                            пароль: </label>
                        <input type="password" wire:model="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        @error('password')
                        <div class="text-xs text-red-500 mt-1 flex gap-1 items-center animate-fade-up animate-once">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M208,144h16a8,8,0,0,0,0-16H208V112h16a8,8,0,0,0,0-16H207.6a79.76,79.76,0,0,0-21.44-46.85l19.5-19.49a8,8,0,1,0-11.32-11.32l-20.29,20.3a79.74,79.74,0,0,0-92.1,0L61.66,18.34A8,8,0,0,0,50.34,29.66l19.5,19.49A79.76,79.76,0,0,0,48.4,96H32a8,8,0,0,0,0,16H48v16H32a8,8,0,0,0,0,16H48v8c0,2.7.14,5.37.4,8H32a8,8,0,0,0,0,16H51.68a80,80,0,0,0,152.64,0H224a8,8,0,0,0,0-16H207.6c.26-2.63.4-5.3.4-8ZM128,40a64.07,64.07,0,0,1,63.48,56h-127A64.07,64.07,0,0,1,128,40Zm8,175.48V136a8,8,0,0,0-16,0v79.48A64.07,64.07,0,0,1,64,152V112H192v40A64.07,64.07,0,0,1,136,215.48Z"></path>
                            </svg>

                            <div>{{$message}}</div>
                        </div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <div>
                                <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">
                                    Забыли пароль?
                                </a>
                            </div>
                            <div>
                                <a href="{{route('start.accountcreate')}}" wire:navigate class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">
                                    Не зарегистрированы?
                                </a>
                            </div>
                        </div>
                        <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-[#f39200] rounded-lg hover:bg-[#b56d00] sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700">
                            Войти в аккаунт
                        </button>
                    </div>



                </form>
            </div>
        </div>

    </main>
</div>
