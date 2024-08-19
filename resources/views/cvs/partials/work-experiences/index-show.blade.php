<div>
    <h2 class="text-2xl font-bold mb-2">Experience</h2>
    <ul>
        @foreach($cv->workExperiences as $experience)
            @include('cvs.partials.work-experiences.show')
        @endforeach
    </ul>
</div>
