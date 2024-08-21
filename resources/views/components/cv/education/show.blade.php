@php use Carbon\Carbon; @endphp
@props(['education' => null])

<li class="mb-6">
    @if($education->degree)
        <p><span class="text-sm opacity-50 italic">Degree - </span>{{ $education->degree }}</p>
    @endif
    @if($education->field)
        <p><span class="text-sm opacity-50 italic">Field - </span>{{ $education->field }}</p>
    @endif
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
