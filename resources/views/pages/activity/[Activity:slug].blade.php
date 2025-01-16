<?php
\Laravel\Folio\name('activity.show');
?>

<x-layouts.app>
    <x-navbar />
    <div class="relative bg-white text-black pt-20 pb-4 px-4">
        <div class="container mx-auto flex">
            <div class="w-full text-center">
                <h1 class="text-center text-2xl md:text-4xl font-bold mb-2 uppercase">{{ $activity->title }}</h1>
            </div>
        </div>
    </div>
    <main class="prose">
        {!! $activity->content !!}
    </main>
</x-layouts.app>
