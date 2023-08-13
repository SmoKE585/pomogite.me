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
                    <x-layout.loading-text text="Создаем пользователя, настраиваем аккаунт..." />
                </div>
            </div>
        </div>

    </main>
</div>
