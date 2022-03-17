@props([
    'label',
    'required' => null,
    'error' => null,
])
<div x-id="['input']">
    <label :for="$id('input')" class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if($required)
            <small class="text-red-600 italic">*</small>
        @endif
    </label>
    <div class="mt-1">
    <textarea
        :id="$id('input')"
        {{ $attributes->class([
            'shadow-sm block w-full sm:text-sm rounded-md',
            'focus:ring-indigo-500 focus:border-indigo-500 border-gray-300' => !$error,
            'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500' => $error
        ]) }}
    ></textarea>
    </div>
</div>
