@section('page-title')
    {{$project->name}} | Категории
@endsection

<div>
    <livewire:components.header />
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <livewire:components.menu />

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main class="px-4 pt-6">
                <livewire:widgets.open-tickets />
            </main>
            <p class="my-10 text-sm text-center text-gray-500">
                © 2023 Pomogite.me | All rights reserved.
            </p>

        </div>

    </div>
</div>
