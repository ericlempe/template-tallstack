@props([
    'md' => null,
    'xs' => null,
    'sm' => null,
    'lg' => null,
    'xl' => null,
    'success' => null,
    'warning' => null,
    'danger' => null,
    'primary' => null,
    'secondary' => null,
    'info' => null,
    'dark' => null,
    'default' => null,
    'outline' => null,
    'circle' => null
])

<button x-init="inGroup($root)"
    {{ $attributes->class([
        'items-center border border-transparent font-medium shadow-sm',
        // Sizes
        'px-2.5 py-1.5 text-xs' => $xs,
        'px-2 py-2 text-sm leading-4' => $sm,
        'px-4 py-2 text-sm' => $md || (!$xs && !$sm && !$lg && !$xl),
        'px-4 py-2 text-base' => $lg,
        'px-6 py-3 text-base' => $xl,

        // No Outline
        'bg-green-500 hover:bg-green-600 focus:border-2 focus:border-green-400 text-white' => !$outline && $success,
        'bg-yellow-500 hover:bg-yellow-600 focus:border-2 focus:border-yellow-500 text-white' => !$outline && $warning,
        'bg-red-500 hover:bg-red-600 focus:border-2 focus:border-red-400 text-white' => !$outline && $danger,
        'bg-gray-500 hover:bg-gray-600 focus:border-2 focus:border-gray-400 text-white' => !$outline && $secondary,
        'bg-blue-500 hover:bg-blue-600 focus:border-2 focus:border-blue-400 text-white' => !$outline && $primary,
        'bg-gray-800 hover:bg-black focus:border-2 focus:border-gray-300 text-white' => !$outline && $dark,
        'bg-white border border-gray-200 shadow-sm text-gray-700 hover:bg-gray-50' => !$outline && $default,
        'bg-violet-500 hover:bg-violet-600 focus:border-2 focus:border-violet-300 text-white' => !$outline && $info,

        // Outline
        'bg-transparent border-green-500 text-green-500 hover:bg-green-500 hover:text-gray-100 focus:border-2 focus:border-green-400' => $outline && $success,
        'bg-transparent border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-gray-100 focus:border-2 focus:border-yellow-500' => $outline && $warning,
        'bg-transparent border-red-500 text-red-500 hover:bg-red-500 hover:text-gray-100 focus:border-2 focus:border-red-400' => $outline && $danger,
        'bg-transparent border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-gray-100 focus:border-2 focus:border-blue-400' => $outline && $primary,
        'bg-transparent border-gray-500 text-gray-500 hover:bg-gray-500 hover:text-gray-100 focus:border-2 focus:border-gray-300' => $outline && $secondary,
        'bg-transparent border-gray-800 hover:bg-black hover:text-white focus:ring-gray-500 text-gray-700' => $outline && $dark,
        'bg-transparent border-violet-200 text-violet-200 hover:bg-violet-500 hover:text-gray-100 focus:border-2 focus:border-violet-300' => $outline && $info,
        // Rounded
        'rounded-full' => $circle
    ]) }}
    :class="inGroup($root) ? '' : 'rounded'"
    >
    {{ $slot }}
</button>

<script>
    function inGroup(root) {
        return root.dataset.group !== undefined;
    }
</script>
