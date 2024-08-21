@props(['cv', 'type' => 'edit'])

<div class="w-1/2">
    @if ($cv->image)
        <img alt="CV profile image" src="{{ asset('storage/' . $cv->id . '.png') }}"
             class="rounded-full aspect-square size-fit object-cover"
        >
    @else
        @if($type === 'edit')
            <p>No image set!</p>
        @endif
    @endif
</div>
