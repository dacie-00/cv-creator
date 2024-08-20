<input type="hidden" name="id" value="-3">
@php $redirectHere = old('id') == -3 @endphp

<x-input-label for="skill" :value="__('Skill')"/>
<x-text-input name="skill"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('skill') : ''" class="mt-2"/>

@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
