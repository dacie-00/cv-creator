<div>
    <h2 class="text-2xl font-bold mb-2">Skills</h2>
    <ul>
        @foreach($cv->skills as $skill)
            @include('cvs.partials.skills.show')
        @endforeach
    </ul>
</div>
