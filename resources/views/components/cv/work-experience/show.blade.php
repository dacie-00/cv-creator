@php use Carbon\Carbon; @endphp
@props(['experience' => null])

<li class="mb-6">
    <p><span class="font-bold">{{ $experience->company }}</span> <span>{{ $experience->role }}</span></p>
    <p>
        <span class="text-sm opacity-75">{{ $experience->description }}</span>
    </p>
    <p class="text-sm opacity-50 italic">
        @if($experience->start_date)
            {{Carbon::parse($experience->start_date)->format('d/m/Y') }}
        @endif
        @if($experience->end_date)
            - {{Carbon::parse($experience->end_date)->format('d/m/Y') }}
        @endif
    </p>
</li>
