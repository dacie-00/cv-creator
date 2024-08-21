@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <div>
        <h2 class="text-2xl font-bold mb-2">Languages</h2>
        <ul>
            @foreach($cv->languages as $language)
                <x-cv.edit-container action="{{ route('cvs.languages.update', [$cv, $language]) }}" method="PUT">
                    <x-slot name="show">
                        <x-cv.languages.show :language="$language"></x-cv.languages.show>
                    </x-slot>
                    <x-slot name="edit">
                        <x-cv.languages.form :language="$language" type="edit"></x-cv.languages.form>
                    </x-slot>
                </x-cv.edit-container>
            @endforeach
        </ul>
        <x-cv.create-container action="{{ route('cvs.languages.store', $cv) }}" method="POST">
            <x-slot name="show">
                <p class="text-blue-500">Add language</p>
            </x-slot>
            <x-slot name="edit">
                <x-cv.languages.form type="create"></x-cv.languages.form>
            </x-slot>
        </x-cv.create-container>
    </div>
@else
    <div>
        <h2 class="text-2xl font-bold mb-2">Languages</h2>
        <ul>
            @foreach($cv->languages as $language)
                <x-cv.languages.show :language="$language"></x-cv.languages.show>
            @endforeach
        </ul>
    </div>
@endif
