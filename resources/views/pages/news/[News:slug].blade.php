<?php
    \Laravel\Folio\name('news.show');
    ?>

<x-layouts.app>
    <x-navbar />
    <div class="relative bg-white text-black pt-20 pb-10 px-4">
        <div class="container mx-auto flex">
            <div class="w-full text-center">
                <h1 class="text-center text-2xl md:text-4xl font-bold mb-2 uppercase">{{ $news->title }}</h1>
                <p class="text-center text-lg font-bold mt-10 uppercase">
                    {{ $news->newsCategory->name }}
                </p>
                <p class="text-center text-sm text-gray-500">
                    {{ $news->published_at->format('d F Y') }}
                </p>
            </div>
        </div>
    </div>
    <div style="background: linear-gradient(to bottom, white, #a3a4f4)" class="pb-6">
        <div class="bg-white prose p-6 max-w-4xl mx-auto mt-10 shadow-md rounded-lg">
            <img class="w-full h-auto rounded-lg" src="{{ Storage::url($news->image) }}" alt="">
            <div class="text-sm leading-relaxed max-w-full">
                {!! $news->content !!}
            </div>
        </div>
    </div>
    <x-footer />
</x-layouts.app>
