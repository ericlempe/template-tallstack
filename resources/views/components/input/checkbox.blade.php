@props([
    'label',
])

<div x-id="['input']">
    <div class="flex items-center flex-nowrap">
        <input
            :id="$id('input')"
            type="checkbox"
            aria-describedby="$id('input')-description"
            {{ $attributes->class('h-4 w-4 rounded focus:ring-indigo-500 text-indigo-600 border-gray-300') }}
        />
        <label :for="$id('input')" class="block ml-2 text-sm text-gray-900 leading-5">
            {{ $label }}
        </label>
    </div>
</div>
