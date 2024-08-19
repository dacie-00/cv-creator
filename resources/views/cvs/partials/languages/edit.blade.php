@csrf
@method("PUT")

<input type="hidden" name="id" value="{{ $language->id }}">
@php $redirectHere = $language->id == old('id') @endphp


<x-input-label for="language" :value="__('Language')"/>
<x-text-input name="language"
              value="{{ $redirectHere && old('language') ? old('language') : $language->language }}">
</x-text-input>
<x-input-error :messages="$language->id == old('id') ? $errors->get('language') : ''" class="mt-2"/>

<x-input-label for="level" :value="__('Level')"/>
<x-text-input name="level"
              value="{{ $redirectHere && old('level') ? old('level') : $language->level }}">
</x-text-input>
<x-input-error :messages="$language->id == old('id') ? $errors->get('level') : ''" class="mt-2"/>


@if($language->id == old('id'))
    <span x-init="edit = true"></span>
@endif
