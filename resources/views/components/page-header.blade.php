@props(['title', 'buttons' => null])

@section('page-header')
    <div class="border-b border-gray-300 px-4 pt-2 pb-4 sm:flex sm:items-end sm:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="text-2xl font-bold leading-6 text-gray-900 sm:truncate">{{ $title }}</h1>
        </div>
        <div class="mt-4 grid grid-cols-1 items-center gap-2 md:flex">
            @if($buttons)
                {{ $buttons }}
            @endif
        </div>
    </div>
@endsection
