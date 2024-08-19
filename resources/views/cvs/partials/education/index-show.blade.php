<div>
    <h2 class="text-2xl font-bold mb-2">Education</h2>
    <ul>
        @foreach($cv->educations as $education)
            @include('cvs.partials.education.show')
        @endforeach
    </ul>
</div>
