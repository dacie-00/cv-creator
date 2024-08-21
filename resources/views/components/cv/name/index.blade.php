@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
        <x-slot name="show">
            <x-cv.name.show :cv="$cv"></x-cv.name.show>
        </x-slot>
        <x-slot name="edit">
            <x-cv.name.form :cv="$cv"></x-cv.name.form>
        </x-slot>
    </x-cv.edit-container>
@else
    <x-cv.name.show :cv="$cv"></x-cv.name.show>
@endif
