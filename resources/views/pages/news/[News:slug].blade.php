<?php
    \Laravel\Folio\name('news.show');
    ?>

<x-layouts.app>
    <img src="{{ Storage::url($news->image) }}" alt="">
    <h1>{{ $news->title }}</h1>
    <span>{{ $news->published_at }}</span>
    <main class="prose">
        {!! $news->content !!}
    </main>
</x-layouts.app>
