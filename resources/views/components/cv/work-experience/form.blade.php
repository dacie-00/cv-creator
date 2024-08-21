@php use Carbon\Carbon; @endphp
@props([
    'type' => 'edit',
    'experience' => null,
])

@if($type === 'edit')
    <input type="hidden" name="id" value="{{ $experience->id }}">
    @php $redirectHere = $experience->id == old('id'); @endphp
@else
    <input type="hidden" name="id" value="-2">
    @php $redirectHere = old('id') == -2; @endphp
@endif


<x-input-label for="company">
    {{ __('Company') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="company" required maxlength="255"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('company') : $experience->company) }}"
></x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('company') : ''" class="mt-2"/>


<x-input-label for="role">
    {{ __('Role') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="role" required maxlength="255"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('role') : $experience->role) }}"
></x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('role') : ''" class="mt-2"/>


<x-input-label for="description" :value="__('Description')"/>
<x-text-area class="w-full min-h-48" name="description" required maxlength="1000">
    {{ $type === 'create' ? '' : ($redirectHere ? old('description') : $experience->description) }}
</x-text-area>
<x-input-error :messages="$redirectHere ? $errors->get('description') : ''" class="mt-2"/>

<x-input-label for="start_date" :value="__('Start date')"/>
<x-text-input type="date" name="start_date"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('start_date') : Carbon::parse($experience->start_date)->format('Y-m-d')) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('start_date') : ''" class="mt-2"/>

<x-input-label for="end_date" :value="__('End date')"/>
<x-text-input type="date" name="end_date"
              value="{{ $type === 'create' ? '' : ($redirectHere ? old('end_date') : Carbon::parse($experience->end_date)->format('Y-m-d')) }}"
/>
<x-input-error :messages="$redirectHere ? $errors->get('end_date') : ''" class="mt-2"/>


@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
