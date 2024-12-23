@php
    $isCurrentLink = request()->routeIs($route);
@endphp

<a
    @class([
        'w-full',
        'lg:flex',
        'text-center',
        'lg:text-left',
        'py-2.5',
        'cursor-pointer',
        'transition',
        'bg-primary' => !$isCurrentLink,
        'hover:bg-zinc-800' => !$isCurrentLink,
        'bg-zinc-800' => $isCurrentLink,
        'rounded-xl',
        'font-bold',
    ])
    href="{{ route($route) }}"
    title="{{ $text }}"
>
    {{ $slot }}
    <div class="w-full lg:w-2/4 my-auto hidden lg:inline">
        {{ $text }}
    </div>
</a>
