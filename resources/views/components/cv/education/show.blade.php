@props(['education' => null])

<li class="mb-6">
    <p>{{ $education->degree }}</p>
    <p>{{ $education->field }}</p>
    <p>
        {{ $education->school }}
        <span class="text-sm opacity-50 italic">{{ $education->level }} Education</span>
    </p>
    <p class="text-sm opacity-50 italic">
        @if($education->start_date)
            {{Carbon::parse($education->start_date)->format('d/m/Y') }}
        @endif
        @if($education->end_date)
            - {{Carbon::parse($education->end_date)->format('d/m/Y') }}
        @endif
    </p>
</li>
