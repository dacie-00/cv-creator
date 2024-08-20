<x-input-label for="full_name" :value="__('Full name')"/>
<x-text-input name="full_name" value="{{ old('full_name') ?? $cv->full_name }}"></x-text-input>
<x-input-error :messages="$errors->get('full_name')" class="mt-2"/>

@if($errors->get('full_name'))
    <span x-init="edit = true"></span>
@endif
