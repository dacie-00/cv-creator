<div>
    <h2 class="text-2xl font-bold mb-2">Languages</h2>
    <ul>
        @foreach($cv->languages as $language)
            <li>
                <p><span class="font-bold">{{ $language->language }}</span> - {{ $language->level }}</p>
            </li>
        @endforeach
    </ul>
</div>
