@if($errors->any())
    <div class="bg-red-100 rounded-md bg-red-50 p-4">
        <div class="flex flex-col divide-y-2 divide-red-300">
            <div class="flex flex-nowrap pb-2">
                <x-icon icon="exclamation-circle" outline class="h-5 w-5 text-red-700"/>
                <h3 class="text-sm ml-3 font-medium text-red-800">
                    Encontramos {{ $errors->count() }} erros de validação
                </h3>
            </div>
            <div class="mt-2 text-sm text-red-700">
                <ul role="list" class="list-disc pl-5 space-y-1 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
