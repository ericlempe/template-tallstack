@props([
    'prefix' => null
])

<x-input
    {{ $attributes }}
    x-data="{}"
    x-init="
        new Cleave($el, {
            numeral: true,
            numeralDecimalScale: 4,
            prefix: '{{ $prefix ? $prefix . ' ' : '' }}'
        });
    "/>
