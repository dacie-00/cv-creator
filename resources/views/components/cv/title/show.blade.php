@props(['cv', 'type'])

<h1 class="text-3xl font-bold">
    {{ $type === 'edit' ? 'Editing CV - ' . "'$cv->title'" : 'Viewing CV - ' . "'$cv->title'" }}
</h1>
