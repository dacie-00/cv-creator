@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 text-gray-900 text-sm rounded-md shadow-sm w-full max-w-md']) !!}>
    {{ $slot }}
</select>
