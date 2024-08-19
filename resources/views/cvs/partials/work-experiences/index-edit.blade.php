<div>
    <h2 class="text-2xl font-bold mb-2">Experience</h2>
    <ul>
        @foreach($cv->workExperiences as $experience)
            <x-cv.edit-container action="{{ route('cvs.work-experiences.update', [$cv, $experience]) }}">
                <x-slot name="show">
                    @include('cvs.partials.work-experiences.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.work-experiences.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
</div>
