@csrf
@method("PATCH")

<x-input-label for="title" :value="__('Title')"/>
<x-text-input name="title" value="{{ old('title') ?? $cv->title }}"></x-text-input>
<x-input-error :messages="$errors->get('title')" class="mt-2"/>

@if($errors->get('title'))
    <span x-init="edit = true"></span>
@endif
