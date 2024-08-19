@method("PATCH")

<x-input-label for="about" :value="__('About')"/>
<x-text-area class="w-full min-h-48" name="about">{{old('about') ?? $cv->about}}</x-text-area>
<x-input-error :messages="$errors->get('about')" class="mt-2"/>

@if($errors->get('about'))
    <span x-init="edit = true"></span>
@endif
