<?php
\Laravel\Folio\name('activity.show');
?>

<x-layouts.app>
{{--    <img src="{{ Storage::url($activity->image) }}" alt="">--}}
    <h1>{{ $activity->title }}</h1>
    <main class="prose">
        {!! $activity->content !!}
    </main>
</x-layouts.app>
