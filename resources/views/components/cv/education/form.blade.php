@php use Carbon\Carbon; @endphp
@props([
    'type' => 'edit',
    'education' => null,
])

@if($type === 'edit')
    <input type="hidden" name="id" value="{{ $education->id }}">
    @php $redirectHere = $education->id == old('id'); @endphp
@else
    <input type="hidden" name="id" value="-1">
    @php $redirectHere = old('id') == -1; @endphp
@endif


<x-input-label for="school">
    {{ __('School') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="school" required maxlength="255"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('school') : $education->school) }}"
></x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('school') : ''" class="mt-2"/>

<x-input-label for="level">
    {{ __('Level') }}
    <x-required-star/>
</x-input-label>
@php $selected = $type === 'create' ? '' : ($redirectHere ? old('level') : $education->level) @endphp
<x-select-input name="level" required maxlength="30">
    <option value="Basic" @selected($selected === "Basic")>Basic</option>
    <option value="Secondary" @selected($selected === "Secondary")>Secondary</option>
    <option value="Higher" @selected($selected === "Higher")>Higher</option>
</x-select-input>
<x-input-error :messages="$redirectHere ? $errors->get('level') : ''" class="mt-2"/>

<x-input-label for="degree" :value="__('Degree')"/>
<x-text-input name="degree" maxlength="30"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('degree') : $education->degree) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('degree') : ''" class="mt-2"/>

<x-input-label for="field" :value="__('Field')"/>
<x-text-input name="field" maxlength="100"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('field') : $education->field) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('field') : ''" class="mt-2"/>

<x-input-label for="start_date" :value="__('Start date')"/>
<x-text-input type="date" name="start_date"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('start_date') : Carbon::parse($education->start_date)->format('Y-m-d')) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('start_date') : ''" class="mt-2"/>

<x-input-label for="end_date" :value="__('End date')"/>
<x-text-input type="date" name="end_date"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('end_date') : Carbon::parse($education->end_date)->format('Y-m-d')) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('end_date') : ''" class="mt-2"/>


@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
