<div>
    <h2 class="text-2xl font-bold mb-2">Skills</h2>
    <ul>
        @foreach($cv->skills as $skill)
            <li>- {{ $skill->skill }}</li>
        @endforeach
    </ul>
</div>
