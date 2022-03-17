@props([
    "route" => "#",
    "title" => "",
    "icon" => "",
    "iconOutline" => "",
])
<a
    {{ $attributes }}
    href="{{ $route }}"
    class="group flex items-center px-2 py-2 text-base font-medium rounded-md"
    :class="setCurrentRoute($el) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'"
>
    <x-icon
        icon="{{ $icon }}"
        outline="{{ $iconOutline }}"
        class="mr-4 flex-shrink-0 h-6 w-6"
        x-bind:class="setCurrentRoute($el) ? 'text-gray-300' : 'text-gray-400 group-hover:text-gray-300' " />
    {{ $title }}
</a>

