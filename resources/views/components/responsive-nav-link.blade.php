@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-gray-300 text-start text-base font-medium text-gray-200 bg-[#181818] focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-100 hover:text-gray-100 hover:bg-[#151515] hover:border-[#151515] focus:outline-none focus:text-gray-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
