<input type="hidden" name="id" value="-1">
@php $redirectHere = old('id') == -1 @endphp

<x-input-label for="school" :value="__('School')"/>
<x-text-input name="school"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('school') : ''" class="mt-2"/>

<x-input-label for="level" :value="__('Level')"/>
<x-text-input name="level"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('level') : ''" class="mt-2"/>

<x-input-label for="degree" :value="__('Degree')"/>
<x-text-input name="degree"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('degree') : ''" class="mt-2"/>

<x-input-label for="field" :value="__('Field')"/>
<x-text-input name="field"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('field') : ''" class="mt-2"/>

<x-input-label for="start_date" :value="__('Start date')"/>
<x-text-input name="start_date"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('start_date') : ''" class="mt-2"/>

<x-input-label for="end_date" :value="__('End date')"/>
<x-text-input name="end_date"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('end_date') : ''" class="mt-2"/>

@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
