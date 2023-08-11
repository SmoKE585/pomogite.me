<!DOCTYPE html>
<html lang="en" class="">
<script src="chrome-extension://jfkjbfhcfaoldhgbnkekkoheganchiea/scripts/injected.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.58.2">

    <title>@yield('page-title')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-800">
    {{ $slot }}


    @livewire('wire-elements-modal')
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <svg id="SvgjsSvg1344" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1345"></defs>
        <polyline id="SvgjsPolyline1346" points="0,0"></polyline>
        <path id="SvgjsPath1347" d="M-1 2647.699L-1 2647.699C-1 2647.699 148.89228947957358 2647.699 148.89228947957358 2647.699C148.89228947957358 2647.699 297.78457895914715 2647.699 297.78457895914715 2647.699C297.78457895914715 2647.699 446.6768684387207 2647.699 446.6768684387207 2647.699C446.6768684387207 2647.699 595.5691579182943 2647.699 595.5691579182943 2647.699C595.5691579182943 2647.699 744.4614473978678 2647.699 744.4614473978678 2647.699C744.4614473978678 2647.699 893.3537368774414 2647.699 893.3537368774414 2647.699C893.3537368774414 2647.699 893.3537368774414 2647.699 893.3537368774414 2647.699 "></path>
    </svg>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
</body>
</html>
