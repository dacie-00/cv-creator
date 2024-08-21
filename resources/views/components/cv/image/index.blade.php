@props([
    'cv' => null,
    'type' => 'edit',
])

@if ($type === 'edit')
    <x-cv.edit-container action="{{ route('cvs.update', $cv) }}" method="PATCH" :canDelete="false"
                         enctype="multipart/form-data">
        <x-slot name="show">
            <x-cv.image.show :cv="$cv" :type="$type"></x-cv.image.show>
        </x-slot>
        <x-slot name="edit">
            <x-cv.image.form :cv="$cv"></x-cv.image.form>
        </x-slot>
    </x-cv.edit-container>
@else
    <x-cv.image.show :cv="$cv" :type="$type"></x-cv.image.show>
@endif
