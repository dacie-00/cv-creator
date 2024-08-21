@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
        <x-slot name="show">
            <x-cv.about.show :cv="$cv"></x-cv.about.show>
        </x-slot>
        <x-slot name="edit">
            <x-cv.about.form :cv="$cv"></x-cv.about.form>
        </x-slot>
    </x-cv.edit-container>
@else
    <x-cv.about.show :cv="$cv"></x-cv.about.show>
@endif
