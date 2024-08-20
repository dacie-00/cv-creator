<div>
    <h2 class="text-2xl font-bold mb-2">Languages</h2>
    <ul>
        @foreach($cv->languages as $language)
            <x-cv.edit-container action="{{ route('cvs.languages.update', [$cv, $language]) }}" method="PUT">
                <x-slot name="show">
                    @include('cvs.partials.languages.show')
                </x-slot>
                <x-slot name="edit">
                    @include('cvs.partials.languages.edit')
                </x-slot>
            </x-cv.edit-container>
        @endforeach
    </ul>
    <x-cv.create-container action="{{ route('cvs.languages.store', $cv) }}" method="POST">
        <x-slot name="show">
            <p class="text-blue-500">Add new language</p>
        </x-slot>
        <x-slot name="edit">
            @include('cvs.partials.languages.create')
        </x-slot>
    </x-cv.create-container>
</div>
