@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-theme-dark text-sm font-medium leading-5 text-white focus:outline-none focus:border-theme-dark transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-theme-dark hover:border-theme-dark focus:outline-none focus:text-theme-dark focus:border-theme-dark transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
