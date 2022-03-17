<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
    <button type="button" @click="handleSidebarMobile"
            class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <x-icon icon="menu-alt-2" outline class="h-6 w-6"/>
    </button>
    <div class="flex-1 px-4 flex justify-end">
        <div class="ml-4 flex items-center md:ml-6">
            <x-input.toggle>
                <x-slot name="iconOff">
                    <x-icon icon="sun" outline class="h-4 w-4 text-gray-400"/>
                </x-slot>
                <x-slot name="iconOn">
                    <x-icon icon="moon" outline class="h-4 w-4 text-indigo-600"/>
                </x-slot>
            </x-input.toggle>
            <!-- Profile dropdown -->
            <div class="ml-3 relative">
                <div>
                    <button type="button" @click="handleProfileMenu" @click.outside="closeProfileMenu"
                            class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only"></span>
                        <img class="h-8 w-8 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                    </button>
                </div>

                <div x-show="showProfileMenu" x-cloak
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                       tabindex="-1" id="user-menu-item-0">
                        Configurações
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                       tabindex="-1" id="user-menu-item-1">
                        Meu Perfil
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                       tabindex="-1" id="user-menu-item-2">
                        Notificações
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    <a href="#" @click="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                       role="menuitem"
                       tabindex="-1"
                       id="user-menu-item-3">
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
