@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <div>
        <h2 class="text-2xl font-bold mb-2">Skills</h2>
        <ul>
            @foreach($cv->skills as $skill)
                <x-cv.edit-container action="{{ route('cvs.skills.update', [$cv, $skill]) }}" method="PUT">
                    <x-slot name="show">
                        <x-cv.skills.show :skill="$skill"></x-cv.skills.show>
                    </x-slot>
                    <x-slot name="edit">
                        <x-cv.skills.form :skill="$skill" type="edit"></x-cv.skills.form>
                    </x-slot>
                </x-cv.edit-container>
            @endforeach
        </ul>
        <x-cv.create-container action="{{ route('cvs.skills.store', $cv) }}" method="POST">
            <x-slot name="show">
                <p class="text-blue-500">Add skill</p>
            </x-slot>
            <x-slot name="edit">
                <x-cv.skills.form type="create"></x-cv.skills.form>
            </x-slot>
        </x-cv.create-container>
    </div>
@else
    <div>
        <h2 class="text-2xl font-bold mb-2">Skills</h2>
        <ul>
            @foreach($cv->skills as $skill)
                <x-cv.skills.show :skill="$skill"></x-cv.skills.show>
            @endforeach
        </ul>
    </div>
@endif
