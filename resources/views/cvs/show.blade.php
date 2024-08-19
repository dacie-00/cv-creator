<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Viewing \'' . $cv->title . '\' CV') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl rounded-md shadow-md">
            @include('cvs.partials.title.show')
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    @include('cvs.partials.general.show')
                    @include('cvs.partials.about.show')
                    @include('cvs.partials.skills.index-show')
                    @include('cvs.partials.languages.index-show')
                </div>
                <div class="flex flex-col space-y-8 w-1/2">
                    @include('cvs.partials.work-experiences.index-show')
                    @include('cvs.partials.education.index-show')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
