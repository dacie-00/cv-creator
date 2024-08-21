@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false">
        <x-slot name="show">
            <x-cv.title.show :cv="$cv" :type="$type"></x-cv.title.show>
        </x-slot>
        <x-slot name="edit">
            <x-cv.title.form :cv="$cv"></x-cv.title.form>
        </x-slot>
    </x-cv.edit-container>
@else
    <x-cv.title.show :cv="$cv" :type="$type"></x-cv.title.show>
@endif
