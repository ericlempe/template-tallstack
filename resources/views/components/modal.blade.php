@props(['name', 'maxWidth'])

@php
    $maxWidth = [
        'sm' => 'max-w-lg',
        'md' => 'max-w-2xl',
        'lg' => 'max-w-4xl',
        'xl' => 'max-w-7xl',
    ][$maxWidth ?? 'md'];
@endphp

<div x-data="{ on: false, name: '{{ $name }}'}">
    <div
        x-show="on"
        x-cloak
        x-on:modal.window=" on = ($event.detail === name);"
        id=""
        aria-hidden="true"
        class="fixed z-10 inset-0 overflow-y-auto bg-gray-500 bg-opacity-75 transition-opacity">
        <div
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="relative px-4 w-full mx-auto {{ $maxWidth }} h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg top-10 shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        {{ $title }}
                    </h3>
                    <x-icon icon="x" outline @click="on = false" class="w-5 h-5 cursor-pointer"/>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    {{ $body }}
                </div>
                <!-- Modal footer -->
                <div {{ $footer->attributes->class(['flex p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600']) }}>
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</div>
