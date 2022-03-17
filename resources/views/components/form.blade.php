@props([
    'action' => '',
    'method' => null,
])

<form action="{{ $action }}" method="{{ $method == 'POST' ? 'POST' : 'GET' }}" {{ $attributes }}>
    @csrf
    @if($method != 'POST')
        @method($method)
    @endif
    {{ $slot }}
</form>
