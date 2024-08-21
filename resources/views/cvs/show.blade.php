<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Viewing CV - \'' . $cv->title . '\'') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl overflow-hidden rounded-md shadow-md w-a4 h-a4 bg-gradient-to-r from-zinc-200 from-50% to-0%">
            <x-cv.name.show :cv="$cv"></x-cv.name.show>
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.general.show :cv="$cv"></x-cv.general.show>
                    <x-cv.about.show :cv="$cv"></x-cv.about.show>
                    <x-cv.skills.index :cv="$cv" type="create"></x-cv.skills.index>
                    <x-cv.languages.index :cv="$cv" type="create"></x-cv.languages.index>
                </div>
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.work-experience.index :cv="$cv" type="create"></x-cv.work-experience.index>
                    <x-cv.education.index :cv="$cv" type="create"></x-cv.education.index>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
