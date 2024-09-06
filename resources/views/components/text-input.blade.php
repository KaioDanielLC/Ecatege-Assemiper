@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-900 bg-white text-gray-900 focus:border-gray-900 focus:ring-gray-100 rounded-md shadow-sm']) !!}>
