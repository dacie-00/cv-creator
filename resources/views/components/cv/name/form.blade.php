@props(['cv'])

<x-input-label for="full_name">
    {{ __('Full name') }}<x-required-star/>
</x-input-label>
<x-text-input name="full_name" required maxlength="255" value="{{ old('full_name') ?? $cv->full_name }}"></x-text-input>
<x-input-error :messages="$errors->get('full_name')" class="mt-2"/>

@if($errors->get('full_name'))
    <span x-init="edit = true"></span>
@endif
