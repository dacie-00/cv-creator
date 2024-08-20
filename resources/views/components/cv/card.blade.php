<div
    x-data="{ expanded: false }"
    {{ $attributes->merge(['class' => 'px-12 pt-12 pb-6 m-4 space-y-6 bg-slate-100 max-w-5xl w-full rounded-md shadow-md']) }}
>
    {{ $slot }}
    <div class="flex justify-center">
        <span
            @click="expanded = !expanded"
            class="las la-angle-down text-center text-4xl opacity-50 hover:opacity-100 transition opacity"
        ></span>
    </div>
</div>
