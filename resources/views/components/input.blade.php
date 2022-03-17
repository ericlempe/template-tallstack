@props([
    'label' => null,
    'type' => 'text',
    'required' => null,
    'error' => null,
])

<div x-id="['input']">
    @if($label)
        <label :for="$id('input')" class="block text-sm font-medium text-gray-700">
            {{ $label }}
            @if($required)
                <small class="text-red-600 italic">*</small>
            @endif
        </label>
    @endif
    <div class="mt-1">
        <input type="{{ $type }}"
               :id="$id('input')"
            {{ $attributes->class([
                'block w-full shadow-sm sm:text-sm rounded-md',
                'border-gray-300 focus:ring-indigo-500 focus:border-indigo-500' => !$error,
                'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500' => $error
            ]) }}>
    </div>
</div>
