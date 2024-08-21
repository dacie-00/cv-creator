@props([
    'type' => 'edit',
    'language' => null,
])

@if($type === 'edit')
    <input type="hidden" name="id" value="{{ $language->id }}">
    @php $redirectHere = $language->id == old('id'); @endphp
@else
    <input type="hidden" name="id" value="-3">
    @php $redirectHere = old('id') == -3; @endphp
@endif


<x-input-label for="language">
    {{ __('Language') }}<x-required-star/>
</x-input-label>
<x-text-input name="language" required maxlength="50"
    value="{{ $type === 'create' ? '' : ($redirectHere ? old('language') : $language->language) }}"
></x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('language') : ''" class="mt-2"/>

<x-input-label for="level">
    {{ __('Level') }}<x-required-star/>
</x-input-label>
@php $selected = $type === 'create' ? '' : ($redirectHere ? old('level') : $language->level) @endphp
<x-select-input name="level" required>
    <option value="A1" @selected($selected === "A1")>A1</option>
    <option value="A2" @selected($selected === "A2")>A2</option>
    <option value="B1" @selected($selected === "B1")>B1</option>
    <option value="B2" @selected($selected === "B2")>B2</option>
    <option value="C1" @selected($selected === "C1")>C1</option>
    <option value="C2" @selected($selected === "C2")>C2</option>
</x-select-input>
<x-input-error :messages="$redirectHere ? $errors->get('level') : ''" class="mt-2"/>


@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
