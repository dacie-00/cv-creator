<div>
    <h2 class="text-2xl font-bold mb-2">Skills</h2>
    <ul>
        @foreach($cv->skills as $skill)
            <x-cv.edit-container action="{{ route('cvs.skills.update', [$cv, $skill]) }}" method="PUT">
                <x-slot name="show">
                    @include('cvs.partials.skills.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.skills.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
    <x-cv.create-container action="{{ route('cvs.skills.store', $cv) }}" method="POST">
        <x-slot name="show">
            <p class="text-blue-500">Add skill</p>
        </x-slot>
        <x-slot name="edit">
            @include('cvs.partials.skills.create')
        </x-slot>
    </x-cv.create-container>
</div>
