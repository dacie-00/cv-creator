@props(['cv'])

<div class="w-1/2">
    @if ($cv->image)
        <img alt="CV profile image" src="{{ asset('storage/' . $cv->id . '.png') }}"
             class="rounded-full aspect-square size-fit object-cover"
        >
    @else
        <p>No image set!</p>
    @endif
</div>
