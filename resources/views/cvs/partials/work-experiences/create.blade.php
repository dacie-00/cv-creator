<input type="hidden" name="id" value="-4">
@php $redirectHere = old('id') == -4 @endphp

<x-input-label for="company" :value="__('Company')"/>
<x-text-input name="company"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('company') : ''" class="mt-2"/>

<x-input-label for="role" :value="__('Role')"/>
<x-text-input name="role"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('role') : ''" class="mt-2"/>

<x-input-label for="description" :value="__('Description')"/>
<x-text-input name="description"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('description') : ''" class="mt-2"/>

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
