<div x-data="{ edit: false }"
     {{ $attributes->merge(['class' => 'hover:bg-red-100 rounded-md']) }}
>
    <div class="text-xl p-4" x-show="edit">
        <form id="{{ $action }}" method="POST" action={{ $action }}>
            @csrf
            <div class="mb-6">
                {{ $edit }}
            </div>

        </form>
        <div class="flex justify-between">
            <form method="POST" action={{ $action }}>
                @csrf
                @method('DELETE')
                <x-danger-button type="submit">Delete</x-danger-button>
            </form>
            <x-danger-button type="button" @click="edit = false">Cancel</x-danger-button>
            <x-primary-button form="{{ $action }}" type="submit">Update</x-primary-button>
        </div>
    </div>
    <div @click="edit = true" x-show="!edit">
        {{ $show }}
    </div>
</div>
