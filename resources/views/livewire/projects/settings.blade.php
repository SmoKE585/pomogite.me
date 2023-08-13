@section('page-title')
    {{$project->name}} | Настройки
@endsection

<div>
    <livewire:components.header />
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <livewire:components.menu />

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                    <div class="mb-4 col-span-full xl:mb-2">
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                            Настройки HelpDesk: {{$project->name}}
                        </h1>
                    </div>
                    <div class="col-span-full xl:col-auto">
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="http://test.pomogite.me/images/logo.svg" alt="Project Logo">
                                <div>
                                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">
                                        Логотип компании
                                    </h3>
                                    <div class="mb-2 text-xs text-gray-500 dark:text-gray-400">
                                        JPG, GIF или PNG. Максимально 800K
                                    </div>
                                    <form wire:submit="save">
                                        <div class="flex items-center space-x-4">
                                            <input type="file" id="logo-upload" wire:model="logo" hidden>
                                            <label for="logo-upload" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700">
                                                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                                </svg>
                                                Выбрать
                                            </label>
                                            <button type="button" class="py-2 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Удалить
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                Домен
                            </h3>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Использовать домен </label>
                                <select name="countries" class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option>{{$project->domain->domain}}</option>
                                </select>
                            </div>
                            <div>
                                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Сменить
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                Информация
                            </h3>
                            <form action="#">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Bonnie" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Green" required="">
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
                            <form action="#">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                            password</label>
                                        <input type="text" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="••••••••" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                            password</label>
                                        <input data-popover-target="popover-password" data-popover-placement="bottom" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                        <div data-popover="" id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(892.8px, -1412px, 0px);">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Must have at
                                                    least 6 characters
                                                </h3>
                                                <div class="grid grid-cols-4 gap-2">
                                                    <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                                                    <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                                                    <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                                                    <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                                                </div>
                                                <p>It’s better to have:</p>
                                                <ul>
                                                    <li class="flex items-center mb-1">
                                                        <svg class="w-4 h-4 mr-2 text-green-400 dark:text-green-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Upper &amp; lower case letters
                                                    </li>
                                                    <li class="flex items-center mb-1">
                                                        <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        A symbol (#$&amp;)
                                                    </li>
                                                    <li class="flex items-center">
                                                        <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        A longer password (min. 12 chars.)
                                                    </li>
                                                </ul>
                                            </div>
                                            <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(139.2px, 0px, 0px);"></div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                            password</label>
                                        <input type="text" name="confirm-password" id="confirm-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="••••••••" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-full">
                                        <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">
                                            Save all
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="flow-root">
                                <h3 class="text-xl font-semibold dark:text-white">Sessions</h3>
                                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                    California 123.123.123.123
                                                </p>
                                                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                    Chrome on macOS
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center">
                                                <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    Revoke
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-4 pb-6">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                    Rome 24.456.355.98
                                                </p>
                                                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                    Safari on iPhone
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center">
                                                <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    Revoke
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div>
                                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        See more
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 px-4 xl:grid-cols-2 xl:gap-4">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                        <div class="flow-root">
                            <h3 class="text-xl font-semibold dark:text-white">Alerts &amp; Notifications</h3>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">You can set up Themesberg to
                                get notifications
                            </p>
                            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Company News
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get
                                            Themesberg news, announcements, and product updates
                                        </div>
                                    </div>
                                    <label for="company-news" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="company-news" class="sr-only">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Account
                                            Activity
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get
                                            important notifications about you or activity you've missed
                                        </div>
                                    </div>
                                    <label for="account-activity" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="account-activity" class="sr-only" checked="">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Meetups Near
                                            You
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get an email
                                            when a Dribbble Meetup is posted close to my location
                                        </div>
                                    </div>
                                    <label for="meetups" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="meetups" class="sr-only" checked="">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-between pt-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">New Messages
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get
                                            Themsberg news, announcements, and product updates
                                        </div>
                                    </div>
                                    <label for="new-messages" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="new-messages" class="sr-only">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Save all
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                        <div class="flow-root">
                            <h3 class="text-xl font-semibold dark:text-white">Email Notifications</h3>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">You can set up Themesberg to
                                get email notifications
                            </p>
                            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Rating
                                            reminders
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send an
                                            email reminding me to rate an item a week after purchase
                                        </div>
                                    </div>
                                    <label for="rating-reminders" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="rating-reminders" class="sr-only">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item update
                                            notifications
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send user
                                            and product notifications for you
                                        </div>
                                    </div>
                                    <label for="item-update" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="item-update" class="sr-only" checked="">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-between py-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item comment
                                            notifications
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me an
                                            email when someone comments on one of my items
                                        </div>
                                    </div>
                                    <label for="item-comment" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="item-comment" class="sr-only" checked="">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-between pt-4">
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Buyer review
                                            notifications
                                        </div>
                                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me an
                                            email when someone leaves a review with their rating
                                        </div>
                                    </div>
                                    <label for="buyer-rev" class="relative flex items-center cursor-pointer">
                                        <input type="checkbox" id="buyer-rev" class="sr-only">
                                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Save all
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <p class="my-10 text-sm text-center text-gray-500">
                © 2023 Pomogite.me | All rights reserved.
            </p>

        </div>

    </div>
</div>
