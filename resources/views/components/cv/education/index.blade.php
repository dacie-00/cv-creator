@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <div>
        <h2 class="text-2xl font-bold mb-2">Education</h2>
        <ul>
            @foreach($cv->educations as $education)
                <x-cv.edit-container action="{{ route('cvs.educations.update', [$cv, $education]) }}" method="PUT">
                    <x-slot name="show">
                        <x-cv.education.show :education="$education"></x-cv.education.show>
                    </x-slot>
                    <x-slot name="edit">
                        <x-cv.education.form :education="$education" type="edit"></x-cv.education.form>
                    </x-slot>
                </x-cv.edit-container>
            @endforeach
        </ul>
        <x-cv.create-container action="{{ route('cvs.educations.store', $cv) }}" method="POST">
            <x-slot name="show">
                <p class="text-blue-500">Add education</p>
            </x-slot>
            <x-slot name="edit">
                <x-cv.education.form type="create"></x-cv.education.form>
            </x-slot>
        </x-cv.create-container>
    </div>
@else
    <div>
        <h2 class="text-2xl font-bold mb-2">Education</h2>
        <ul>
            @foreach($cv->educations as $education)
                <x-cv.education.show :education="$education"></x-cv.education.show>
            @endforeach
        </ul>
    </div>
@endif
