<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased h-full bg-black text-white">
    <div class="container mx-auto grid grid-cols-4 h-full">
        {{-- MENU --}}
        <div class="col-span-1 text-zinc-50">
             <div class="pt-px space-y-1">
                 <x-twitter.icons.logo />

                 <x-twitter.menu.item route="/timeline" icon="home" title="Home" />
                 <x-twitter.menu.item route="/explore" icon="explore" title="Explore" />
                 <x-twitter.menu.item route="/notifications" icon="notifications" title="Notifications" />
                 <x-twitter.menu.item route="/messages" icon="messages" title="Messages" />
                 <x-twitter.menu.item route="/twitter-blue" icon="twitter-blue" title="Twitter Blue" />
                 <x-twitter.menu.item route="/verified-organization" icon="verified-org" title="Verified Organization" />
                 <x-twitter.menu.item route="/profile" icon="profile" title="Profile" />
                 <x-twitter.menu.options-button />

                 <x-twitter.menu.tweet-button />
             </div>
        </div>
        {{-- END MENU --}}

        <div class="col-span-2 border-[.625px] border-zinc-800">as</div>
        <div class="col-span-1">as</div>
    </div>

    @livewireScripts
</body>
</html>
