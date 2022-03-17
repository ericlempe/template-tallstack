@props([
    'label' => null,
    'error' => null,
    'required' => null,
])

<div>
    @if($label)
        <label :for="$id('select')" class="block text-sm font-medium text-gray-700">
            {{ $label }}
            @if($required)
                <small class="text-red-600 italic">*</small>
            @endif
        </label>
    @endif
    <select
        :id="$id('select')"
        {{
            $attributes->class([
                'mt-1 block w-full pl-3 pr-10 py-2 text-base sm:text-sm rounded-md focus:outline-none',
                'border-gray-300 focus:ring-indigo-500 focus:border-indigo-500' => !$error,
                'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500' => $error
            ])
        }}>
        {{ $slot }}
    </select>
</div>
