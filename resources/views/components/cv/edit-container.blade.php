<div x-data="{ edit: false }"
     {{ $attributes->merge(['class' => 'hover:bg-red-100 rounded-md']) }}
>
    <div x-show="edit">
        <form class="text-xl p-4" method="POST" action={{ $action }}>
            @csrf
            <div class="mb-6">
                {{ $edit }}
            </div>

            <div class="flex justify-between">
                <x-danger-button type="button" @click="edit = false">Cancel</x-danger-button>
                <x-primary-button type="submit">Update</x-primary-button>
            </div>
        </form>
    </div>
    <div @click="edit = true" x-show="!edit">
        {{ $show }}
    </div>
</div>
