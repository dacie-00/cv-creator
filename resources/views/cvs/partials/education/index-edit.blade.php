<div>
    <h2 class="text-2xl font-bold mb-2">Education</h2>
    <ul>
        @foreach($cv->educations as $education)
            <x-cv.edit-container action="{{ route('cvs.educations.update', [$cv, $education]) }}">
                <x-slot name="show">
                    @include('cvs.partials.education.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.education.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
</div>
