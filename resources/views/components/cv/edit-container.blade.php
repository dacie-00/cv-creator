@php use Faker\Provider\Uuid;
$id = Uuid::uuid();
@endphp
@props([
    'action' => '',
    'method' => 'POST',
    'canDelete' => true
])
<div x-data="{ edit: false }"
    {{ $attributes->merge(['class' => 'hover:bg-red-100 rounded-md']) }}
>
    <div class="text-xl p-4" x-show="edit">
        <form id="{{ $id }}" method="POST" action={{ $action }}>
            @method($method)
            @csrf
            <div class="mb-6">
                {{ $edit }}
            </div>

        </form>
        <div class="flex justify-between">
            <x-secondary-button type="button" @click="edit = false">Cancel</x-secondary-button>
            @if($canDelete)
                <form method="POST" action={{ $action }}>
                    @csrf
                    @method('DELETE')
                    <x-danger-button type="submit">Delete</x-danger-button>
                </form>
            @endif
            <x-primary-button form="{{ $id }}" type="submit">Update</x-primary-button>
        </div>
    </div>
    <div @click="edit = true" x-show="!edit">
        {{ $show }}
    </div>
</div>
