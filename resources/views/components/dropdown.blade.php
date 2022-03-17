<div class="relative inline-block text-left" x-data="{ open: false }" @click.outside="open = false"
     @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="origin-top-right z-50 absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
