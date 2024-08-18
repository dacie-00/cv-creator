<div
    x-data="{ expanded: false }"
    {{ $attributes->merge(['class' => 'p-12 m-4 space-y-8 bg-slate-100 max-w-5xl rounded-md shadow-md']) }}
>
    {{ $slot }}
    <div class="flex justify-center">
        <span
            @click="expanded = !expanded"
            class="las la-angle-down text-center text-4xl opacity-50 hover:opacity-100 transition opacity"
        ></span>
    </div>

</div>
