@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
        <x-slot name="show">
            <x-cv.general.show :cv="$cv"></x-cv.general.show>
        </x-slot>
        <x-slot name="edit">
            <x-cv.general.form :cv="$cv"></x-cv.general.form>
        </x-slot>
    </x-cv.edit-container>
@else
    <x-cv.general.show :cv="$cv"></x-cv.general.show>
@endif
