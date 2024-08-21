<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
                <x-slot name="show">
                    {{ __('Editing CV - \'' . $cv->title . '\'') }}
                </x-slot>
                <x-slot name="edit">
                    <x-cv.title.form :cv="$cv"></x-cv.title.form>
                </x-slot>
            </x-cv.edit-container>
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        <div class="p-12 m-4 space-y-8 bg-slate-100 max-w-5xl overflow-hidden rounded-md shadow-xl w-a4 h-a4 bg-gradient-to-r from-zinc-200 from-50% to-0%">
            <div class="space-x-16 flex">
                <div class="flex flex-col space-y-8 w-1/2">
                    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
                        <x-slot name="show">
                            <x-cv.name.show :cv="$cv"></x-cv.name.show>
                        </x-slot>
                        <x-slot name="edit">
                            <x-cv.name.form :cv="$cv"></x-cv.name.form>
                        </x-slot>
                    </x-cv.edit-container>
                    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
                        <x-slot name="show">
                            <x-cv.general.show :cv="$cv"></x-cv.general.show>
                        </x-slot>
                        <x-slot name="edit">
                            <x-cv.general.form :cv="$cv"></x-cv.general.form>
                        </x-slot>
                    </x-cv.edit-container>
                    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
                        <x-slot name="show">
                            <x-cv.about.show :cv="$cv"></x-cv.about.show>
                        </x-slot>
                        <x-slot name="edit">
                            <x-cv.about.form :cv="$cv"></x-cv.about.form>
                        </x-slot>
                    </x-cv.edit-container>
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
