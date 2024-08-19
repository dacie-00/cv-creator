<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing \'' . $cv->title . '\' CV') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl rounded-md shadow-md">
            <x-cv.edit-container action="{{ route('cvs.update', $cv) }}">
                {{--    <form action="{{ route('cvs.update', $cv) }}" method="POST">--}}
                <x-slot name="show">
                    @include('cvs.partials.title.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.title.edit')
                </x-slot>
            </x-cv.edit-container>
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}">
                        <x-slot name="show">
                            @include('cvs.partials.general.show')
                        </x-slot>
                        <x-slot name="edit">
                            @include('cvs.partials.general.edit')
                        </x-slot>
                    </x-cv.edit-container>
                    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}">
                        <x-slot name="show">
                            @include('cvs.partials.about.show')
                        </x-slot>
                        <x-slot name="edit">
                            @include('cvs.partials.about.edit')
                        </x-slot>
                    </x-cv.edit-container>
                    @include('cvs.partials.skills.index-edit')
                    @include('cvs.partials.languages.index-edit')
                </div>
                <div class="flex flex-col space-y-8 w-1/2">
                    @include('cvs.partials.work-experiences.index-edit')
                    @include('cvs.partials.education.index-edit')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
