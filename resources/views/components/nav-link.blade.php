@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white hover:text-white rounded-lg hover:bg-blue-600 bg-blue-600 hover:cursor-default'
            : 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white hover:text-white rounded-lg hover:bg-blue-600 hover:cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
