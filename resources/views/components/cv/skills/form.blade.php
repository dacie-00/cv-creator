@props([
    'type' => 'edit',
    'skill' => null,
])

@if($type === 'edit')
    <input type="hidden" name="id" value="{{ $skill->id }}">
    @php $redirectHere = $skill->id == old('id'); @endphp
@else
    <input type="hidden" name="id" value="-4">
    @php $redirectHere = old('id') == -4; @endphp
@endif


<x-input-label for="skill">
    {{ __('Skill') }}<x-required-star/>
</x-input-label>
<x-text-input name="skill" required maxlength="255"
    value="{{ $type === 'create' ? '' : ($redirectHere ? old('skill') : $skill->skill) }}"
></x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('skill') : ''" class="mt-2"/>


@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
