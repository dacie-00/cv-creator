@csrf
@method("PUT")

<input type="hidden" name="id" value="{{ $skill->id }}">
@php $redirectHere = $skill->id == old('id') @endphp

<x-input-label for="skill" :value="__('Skill')"/>
<x-text-input name="skill"
              value="{{ $redirectHere && old('skill') ? old('skill') : $skill->skill }}">
</x-text-input>
<x-input-error :messages="$skill->id == old('id') ? $errors->get('skill') : ''" class="mt-2"/>

@if($skill->id == old('id'))
    <span x-init="edit = true"></span>
@endif
