@props(['cv'])

<div class="text-xl">
    <div>
        <span class="text-xl las la-at"></span>
        {{ $cv->email }}
    </div>
    <div>
        <span class="text-xl las la-phone"></span>
        {{ $cv->phone_number }}
    </div>
    <div>
        <span class="text-xl las la-home"></span>
        {{ $cv->address }}
    </div>
</div>
