@props(['cv'])

<x-input-label for="title">
    {{ __('Title') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="title" required maxlength="100" value="{{ old('title') ?? $cv->title }}"></x-text-input>
<x-input-error :messages="$errors->get('title')" class="mt-2"/>

@if($errors->get('title'))
    <span x-init="edit = true"></span>
@endif
