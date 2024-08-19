<div>
    <h2 class="text-2xl font-bold mb-2">Languages</h2>
    <ul>
        @foreach($cv->languages as $language)
            <x-cv.edit-container action="{{ route('cvs.languages.update', [$cv, $language]) }}">
                <x-slot name="show">
                    @include('cvs.partials.languages.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.languages.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
</div>
