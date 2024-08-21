@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <div>
        <h2 class="text-2xl font-bold mb-2">Experience</h2>
        <ul>
            @foreach($cv->workExperiences as $experience)
                <x-cv.edit-container action="{{ route('cvs.work-experiences.update', [$cv, $experience]) }}"
                                     method="PUT">
                    <x-slot name="show">
                        <x-cv.work-experience.show :experience="$experience"></x-cv.work-experience.show>
                    </x-slot>
                    <x-slot name="edit">
                        <x-cv.work-experience.form :experience="$experience" type="edit"></x-cv.work-experience.form>
                    </x-slot>
                </x-cv.edit-container>
            @endforeach
        </ul>
        <x-cv.create-container action="{{ route('cvs.work-experiences.store', $cv) }}" method="POST">
            <x-slot name="show">
                <p class="text-blue-500">Add experience</p>
            </x-slot>
            <x-slot name="edit">
                <x-cv.work-experience.form type="create"></x-cv.work-experience.form>
            </x-slot>
        </x-cv.create-container>
    </div>
@else
    <div>
        <h2 class="text-2xl font-bold mb-2">Experience</h2>
        <ul>
            @foreach($cv->workExperiences as $experience)
                <x-cv.work-experience.show :experience="$experience"></x-cv.work-experience.show>
            @endforeach
        </ul>
    </div>
@endif
