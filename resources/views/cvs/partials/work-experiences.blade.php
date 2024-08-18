<div>
    <h2 class="text-2xl font-bold mb-2">Experience</h2>
    <ul>
        @foreach($cv->workExperiences as $experience)
            <li class="mb-6">
                <p><span class="font-bold">{{ $experience->company }}</span> <span>{{ $experience->role }}</span></p>
                <p>
                    <span class="text-sm opacity-75">{{ $experience->description }}</span>
                </p>
                <p class="text-sm opacity-50 italic">{{ $experience->start_date }} - {{ $experience->end_date }}</p>
            </li>
        @endforeach
    </ul>
</div>
