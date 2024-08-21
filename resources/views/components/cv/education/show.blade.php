@props(['education' => null])

<li class="mb-6">
    <p>{{ $education->degree }}</p>
    <p>{{ $education->field }}</p>
    <p>
        {{ $education->school }}
        <span class="text-sm opacity-50 italic">{{ $education->level }} Education</span>
    </p>
    <p class="text-sm opacity-50 italic">{{ $education->start_date }} - {{ $education->end_date }}</p>
</li>
