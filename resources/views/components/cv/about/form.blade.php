@props(['cv'])

<x-input-label for="about">
    {{ __('About') }}<x-required-star/>
</x-input-label>
<x-text-area maxlength="1000" required class="w-full min-h-48" name="about">{{ old('about') ?? $cv->about }}</x-text-area>
<x-input-error :messages="$errors->get('about')" class="mt-2"/>

@if($errors->get('about'))
    <span x-init="edit = true"></span>
@endif
