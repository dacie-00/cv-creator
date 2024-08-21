@props(['cv'])

<x-input-label for="email">
    {{ __('Email') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="email" required maxlength="255" value="{{ old('email') ?? $cv->email }}"></x-text-input>
<x-input-error :messages="$errors->get('email')" class="mt-2"/>

<x-input-label for="phone_number">
    {{ __('Phone Number') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="phone_number" required maxlength="30"
              value="{{ old('phone_number') ?? $cv->phone_number }}"></x-text-input>
<x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>

<x-input-label for="address">
    {{ __('Address') }}
    <x-required-star/>
</x-input-label>
<x-text-input name="address" required maxlength="255" value="{{ old('address') ?? $cv->address }}"></x-text-input>
<x-input-error :messages="$errors->get('address')" class="mt-2"/>


@if($errors->get('full_name') || $errors->get('email') || $errors->get('phone_number') || $errors->get('address'))
    <span x-init="edit = true"></span>
@endif
