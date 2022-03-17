@props([
    'success' => null,
    'warning' => null,
    'danger' => null,
    'primary' => null,
])

<span
    {{ $attributes->class([
        'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium',
        'bg-green-100 text-green-800' => $success,
        'bg-yellow-100 text-yellow-800' => $warning,
        'bg-red-100 text-red-800' => $danger,
        'bg-blue-100 text-blue-800' => $primary,
    ]) }}>
    {{ $slot }}
</span>
