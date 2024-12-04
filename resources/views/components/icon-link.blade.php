@props(['active' => false])

@php
$classes = $active
            ? 'text-white font-bold' // Kelas untuk kondisi aktif
            : 'text-gray-500';       // Kelas untuk kondisi tidak aktif
@endphp

<i {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</i>
