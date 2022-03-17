@props([
    'icon' => null,
    'outline' => null
])

@if($icon == "check")
    <x-icons.check outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "check-circle")
    <x-icons.check-circle outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "chevron-down")
    <x-icons.chevron-down outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "dots-vertical")
    <x-icons.dots-vertical outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "exclamation")
    <x-icons.exclamation outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "exclamation-circle")
    <x-icons.exclamation-circle outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "eye")
    <x-icons.eye outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "home")
    <x-icons.home outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "information-circle")
    <x-icons.information-circle outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "menu-alt-2")
    <x-icons.menu-alt-2 outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "moon")
    <x-icons.moon outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "pencil-alt")
    <x-icons.pencil-alt outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "question-mark-circle")
    <x-icons.question-mark-circle outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "selector")
    <x-icons.selector outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "sun")
    <x-icons.sun outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "users")
    <x-icons.users outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "trash")
    <x-icons.trash outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "x")
    <x-icons.x outline="{{ $outline }}" {{ $attributes }} />
@endif

@if($icon == "x-circle")
    <x-icons.x-circle outline="{{ $outline }}" {{ $attributes }} />
@endif

