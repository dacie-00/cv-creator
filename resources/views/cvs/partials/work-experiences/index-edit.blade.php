<div>
    <h2 class="text-2xl font-bold mb-2">Experience</h2>
    <ul>
        @foreach($cv->workExperiences as $experience)
            <x-cv.edit-container action="{{ route('cvs.work-experiences.update', [$cv, $experience]) }}" method="PUT">
                <x-slot name="show">
                    @include('cvs.partials.work-experiences.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.work-experiences.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
    <x-cv.create-container action="{{ route('cvs.work-experiences.store', $cv) }}" method="POST">
        <x-slot name="show">
            <p class="text-blue-500">Add new language</p>
        </x-slot>
        <x-slot name="edit">
            @include('cvs.partials.work-experiences.create')
        </x-slot>
    </x-cv.create-container>
</div>
