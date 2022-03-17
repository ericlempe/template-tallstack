@props([
    'inline' => null
])

<div>
    <fieldset class="mt-4">
        <div class="space-y-4 {{ !is_null($inline) ? 'sm:flex sm:items-center sm:space-y-0 sm:space-x-10' : '' }}">
            {{ $slot }}
        </div>
    </fieldset>
</div>
