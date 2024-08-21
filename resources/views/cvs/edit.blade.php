<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-cv.title.index :cv="$cv" type="edit"></x-cv.title.index>
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div
            class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl overflow-hidden rounded-md shadow-xl w-a4 h-a4 bg-gradient-to-r from-zinc-200 from-50% to-0%">
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.name.index :cv="$cv" type="edit"></x-cv.name.index>
                    <x-cv.image.index :cv="$cv" type="edit"></x-cv.image.index>
                    <x-cv.general.index :cv="$cv" type="edit"></x-cv.general.index>
                    <x-cv.about.index :cv="$cv" type="edit"></x-cv.about.index>
                    <x-cv.skills.index :cv="$cv" type="edit"></x-cv.skills.index>
                    <x-cv.languages.index :cv="$cv" type="edit"></x-cv.languages.index>
                </div>
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.work-experience.index :cv="$cv" type="edit"></x-cv.work-experience.index>
                    <x-cv.education.index :cv="$cv" type="edit"></x-cv.education.index>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
