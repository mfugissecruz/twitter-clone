@props(['route', 'icon', 'title'])
<div>
    <a href="{{ $route }}" class="inline-block space-x-2 p-2 pr-6 rounded-full bg-transparent hover:bg-zinc-800">
        <div class="flex items-center gap-4">
            <x-dynamic-component :component=" 'twitter.icons.' . $icon " />
            <span class="font-bold text-lg">{{ $title }}</span>
        </div>
    </a>
</div>
