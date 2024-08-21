<div x-data="{ edit: false }"
     {{ $attributes->merge(['class' => 'hover:bg-red-100 rounded-md']) }}
>
    <div class="text-xl p-4" x-show="edit">
        <form id="{{ $action }}" method="POST" action={{ $action }}>
            @method($method)
            @csrf
            <div class="mb-6">
                {{ $edit }}
            </div>

        </form>
        <div class="flex justify-between">
            <x-secondary-button type="button" @click="edit = false">Cancel</x-secondary-button>
            <x-primary-button form="{{ $action }}" type="submit">Add</x-primary-button>
        </div>
    </div>
    <div @click="edit = true" x-show="!edit">
        {{ $show }}
    </div>
</div>
