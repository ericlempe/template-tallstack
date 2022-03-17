@props([
    'name',
    'warning' => null,
    'success' => null,
    'danger' => null,
    'info' => null,
])
<div x-data="{ showModal: false, name: '{{ $name }}'}">
    <div
        x-show="showModal"
        x-on:modal.window=" showModal = ($event.detail === name);"
        x-cloak
        class="fixed z-10 inset-0 overflow-y-auto"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                x-show="showModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-shadow sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full sm:p-6">
                <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                    <button type="button"
                            class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Close</span>
                        <x-icon icon="x" outline/>
                    </button>
                </div>
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        @if($success)
                            <x-icon icon="check-circle" class="h-5 w-5 text-green-500"/>
                        @elseif($warning)
                            <x-icon icon="exclamation" outline class="h-5 w-5 text-yellow-400"/>
                        @elseif($danger)
                            <x-icon icon="x-circle" outline class="h-5 w-5 text-red-700"/>
                        @elseif($info)
                            <x-icon icon="information-circle" outline class="h-5 w-5 text-blue-700"/>
                        @endif
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ $title }}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                {{ $body }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</div>
