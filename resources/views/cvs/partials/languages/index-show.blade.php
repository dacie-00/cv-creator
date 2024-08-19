<div>
    <h2 class="text-2xl font-bold mb-2">Languages</h2>
    <ul>
        @foreach($cv->languages as $language)
            @include('cvs.partials.languages.show')
        @endforeach
    </ul>
</div>
