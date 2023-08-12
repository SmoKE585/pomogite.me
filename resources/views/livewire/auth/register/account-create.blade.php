@section('page-title')
    Начать работу с системой
@endsection

<div>
    <main class="bg-repeat w-full h-full text-primary-100 heropattern-texture-gray-200">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <x-layout.logo />

            <div class="relative w-full max-w-xl p-6 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800 animate-fade-up animate-once">
                <div class="text-xs text-gray-400">
                    Сначала, нужно
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                    Создать аккаунт
                </h2>

                <div wire:loading.delay.long.remove wire:target="save">
                    <form class="mt-6" wire:submit="save">
                        <div class="space-y-4 mb-6">
                            <x-forms.input title="Как вас зовут?" name="form.name" placeholder="Александр Иванов" />
                            <x-forms.input title="Ваш E-MAIL" name="form.email" placeholder="petya@yandex.ru" />

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                                <x-forms.input title="Пароль" type="input" name="form.password" placeholder="********" />
                                <x-forms.input title="Подтверждение пароля" type="input" name="form.password_confirmation" placeholder="********" />
                            </div>
                        </div>


                        <div class="flex justify-between items-center">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Уже есть аккаунт?
                                <a href="{{route('login')}}" wire:navigate class="text-primary-700 hover:underline dark:text-primary-500">Войти!</a>
                            </div>

                            <button type="submit" class="flex gap-1 items-center w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <div>
                                    Создать проект
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                                </svg>
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
