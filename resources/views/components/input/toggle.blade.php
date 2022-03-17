@props([
    'label' => null,
    'iconOff' => null,
    'iconOn' => null,
])

<div class="flex items-center" x-data="{on: false}">
    <button type="button" @click="on = !on"
            class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            :class="on ? 'bg-indigo-600' : 'bg-gray-200'"
            role="switch" aria-checked="false">
        <span
            class="pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
            :class="on ? 'translate-x-5' : 'translate-x-0'">
            <span
                class="ease-in duration-200 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
                :class="on ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                aria-hidden="true">
                 @if($iconOff)
                    {{ $iconOff }}
                @endif
            </span>
            <span
                class="ease-out duration-100 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
                :class="on ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                aria-hidden="true">
                @if($iconOn)
                    {{ $iconOn }}
                @endif
            </span>
        </span>
    </button>

    @if($label)
        <span class="ml-3 text-sm font-medium text-gray-900" @click="on = !on">{{ $label }}</span>
    @endif
</div>
