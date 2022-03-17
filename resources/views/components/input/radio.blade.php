@props([ 'label' ])

<div x-id="['input']">
    <div class="flex items-center flex-nowrap">
        <input
            :id="$id('input')"
            type="radio"
            {{ $attributes->class('focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300') }}
        />
        <label :for="$id('input')" class="ml-3 block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    </div>
</div>
