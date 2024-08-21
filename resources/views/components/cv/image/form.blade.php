@props(['cv'])

<x-input-label for="image" :value="__('Image')"/>
<input type="file" required accept="image/png,image/jpeg" name="image" value="{{ old('image') ?? $cv->image }}">
<x-input-error :messages="$errors->get('image')" class="mt-2"/>

@if($errors->get('image'))
    <span x-init="edit = true"></span>
@endif
