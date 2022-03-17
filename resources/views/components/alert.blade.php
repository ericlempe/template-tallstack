@props([
    'title' => null,
    'message' => null,
    'success' => null,
    'warning' => null,
    'danger' => null,
    'question' => null,
    'info' => null,
    'dismiss' => null
])

<div x-data="{ handleAlert: true }" x-cloak x-show="handleAlert"
    {{ $attributes->class([
      'rounded-md p-4',
      'bg-green-300' => $success,
      'bg-yellow-100' => $warning,
      'bg-red-400' => $danger,
      'bg-blue-400' => $info,
      'bg-indigo-200' => $question
  ]) }} >
    <div class="flex">
        <div class="flex-shrink-0">
            @if($success)
                <x-icon icon="check-circle" class="h-5 w-5 text-green-500"/>
            @elseif($warning)
                <x-icon icon="exclamation" outline class="h-5 w-5 text-yellow-400"/>
            @elseif($danger)
                <x-icon icon="x-circle" outline class="h-5 w-5 text-red-700"/>
            @elseif($question)
                <x-icon icon="question-mark-circle" outline class="h-5 w-5 text-indigo-700"/>
            @elseif($info)
                <x-icon icon="information-circle" outline class="h-5 w-5 text-blue-700"/>
            @endif
        </div>
        <div class="ml-3">
            <p
                {{ $attributes->class([
                   'text-sm font-medium',
                   'text-green-700' => $success,
                   'text-yellow-700' => $warning,
                   'text-red-700' => $danger,
                   'text-indigo-800' => $question,
                   'text-blue-800' => $info
                ]) }}>
                {{ $message }}
            </p>
        </div>
        @if($dismiss)
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" @click="handleAlert = false"
                        {{ $attributes->class([
                            'inline-flex rounded-md p-1.5',
                            'bg-green-300 text-green-700' => $success,
                            'bg-yellow-100 text-yellow-700' => $warning,
                            'bg-red-400 text-red-700' => $danger,
                            'bg-indigo-200 text-indigo-500' => $question,
                            'bg-blue-400 text-blue-500' => $info
                        ]) }}>
                        <span class="sr-only">Dismiss</span>
                        <x-icon icon="x" {{ $attributes->class([
                                'h-5 w-5',
                                'hover:text-green-900' => $success,
                                'hover:text-yellow-900' => $warning,
                                'hover:text-red-900' => $danger,
                                'hover:text-indigo-900' => $question,
                                'hover:text-blue-900' => $info
                            ]) }} />
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>

