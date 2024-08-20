<input type="hidden" name="id" value="-2">
@php $redirectHere = old('id') == -2 @endphp


<x-input-label for="language" :value="__('Language')"/>
<x-text-input name="language"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('language') : ''" class="mt-2"/>

<x-input-label for="level" :value="__('Level')"/>
<x-text-input name="level"
              value="">
</x-text-input>
<x-input-error :messages="$redirectHere ? $errors->get('level') : ''" class="mt-2"/>


@if($redirectHere)
    <span x-init="edit = true"></span>
@endif
