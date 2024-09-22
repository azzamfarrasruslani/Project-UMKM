@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-red-300 focus:ring-red-300 rounded-md shadow-sm']) !!}>
