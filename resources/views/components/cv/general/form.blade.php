@props(['cv'])

<x-input-label for="email" :value="__('Email')"/>
<x-text-input name="email" value="{{ old('email') ?? $cv->email }}"></x-text-input>
<x-input-error :messages="$errors->get('email')" class="mt-2"/>

<x-input-label for="phone_number" :value="__('Phone Number')"/>
<x-text-input name="phone_number" value="{{ old('phone_number') ?? $cv->phone_number }}"></x-text-input>
<x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>

<x-input-label for="address" :value="__('Address')"/>
<x-text-input name="address" value="{{ old('address') ?? $cv->address }}"></x-text-input>
<x-input-error :messages="$errors->get('address')" class="mt-2"/>


@if($errors->get('full_name') || $errors->get('email') || $errors->get('phone_number') || $errors->get('address'))
    <span x-init="edit = true"></span>
@endif
