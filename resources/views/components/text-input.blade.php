@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-[#181818] text-white focus:border-gray-100 focus:ring-gray-100 rounded-md shadow-sm']) !!}>
