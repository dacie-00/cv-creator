@csrf
@method("PUT")

<input type="hidden" name="id" value="{{ $education->id }}">
@php $redirectHere = $education->id == old('id') @endphp

<x-input-label for="school" :value="__('School')"/>
<x-text-input name="school"
              value="{{ $redirectHere && old('school') ? old('school') : $education->school }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('school') : ''" class="mt-2"/>

<x-input-label for="level" :value="__('Level')"/>
<x-text-input name="level"
              value="{{ $redirectHere && old('level') ? old('level') : $education->level }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('level') : ''" class="mt-2"/>

<x-input-label for="degree" :value="__('Degree')"/>
<x-text-input name="degree"
              value="{{ $redirectHere && old('degree') ? old('degree') : $education->degree }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('degree') : ''" class="mt-2"/>

<x-input-label for="field" :value="__('Field')"/>
<x-text-input name="field"
              value="{{ $redirectHere && old('field') ? old('field') : $education->field }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('field') : ''" class="mt-2"/>

<x-input-label for="start_date" :value="__('Start date')"/>
<x-text-input name="start_date"
              value="{{ $redirectHere && old('start_date') ? old('start_date') : $education->start_date }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('start_date') : ''" class="mt-2"/>

<x-input-label for="end_date" :value="__('End date')"/>
<x-text-input name="end_date"
              value="{{ $redirectHere && old('end_date') ? old('end_date') : $education->end_date }}">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('end_date') : ''" class="mt-2"/>

@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
