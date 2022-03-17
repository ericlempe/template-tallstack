@props([
    "header" => null,
    "body" => null,
    "footer" => null,
    "title" => null,
    "subtitle" => null,
    "actions" => null,
])

<div class="shadow-md sm:rounded-md sm:overflow-hidden">
    @if($header || (!is_null($title) || !is_null($subtitle) || !is_null($actions)))
        <div class="px-4 py-3 bg-gray-50 sm:px-6">
            @if($header)
                {{ $header }}
            @else
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                    <div class="ml-4 mt-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $title }}
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            {{ $subtitle }}
                        </p>
                    </div>
                    <div class="ml-4 mt-4 flex-shrink-0">
                        {{ $actions }}
                    </div>
                </div>
            @endif
        </div>
    @endif
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        {{ $body }}
    </div>
    @if($footer)
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            {{ $footer }}
        </div>
    @endif
</div>
