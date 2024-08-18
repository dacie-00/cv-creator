<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Viewing \'' . $cv->title . '\' CV') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl rounded-md shadow-md">
            <h1 class="text-3xl font-bold">
                {{ $cv->title }}
            </h1>
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    @include('cvs.partials.general')
                    @include('cvs.partials.about')
                    @include('cvs.partials.skills')
                    @include('cvs.partials.languages')
                </div>
                <div class="flex flex-col space-y-8 w-1/2">
                    @include('cvs.partials.work-experiences')
                    @include('cvs.partials.education')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
