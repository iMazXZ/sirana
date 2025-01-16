<?php

use App\Models\News;
use Illuminate\Contracts\View\View;
use function Laravel\Folio\render;

render(function (View $view) {
    return $view->with('news', News::orderBy('published_at', 'desc')->paginate(5));
});
?>

<x-layouts.app>
    <x-navbar />
    <div class="relative bg-white text-black py-20">
        <div class="container mx-auto flex">
            <div class="w-full text-center">
                <h1 class="text-center text-lg md:text-4xl font-bold mb-2">BERITA TERBARU DI SIRANA</h1>
            </div>
        </div>
    </div>
    <div style="background: linear-gradient(to bottom, white, #a3a4f4)">
        <div class="container mx-auto p-4">
            <main class="col-span-12 md:col-span-8">
                <div class="grid grid-cols-1 gap-4 mb-4">
                    @foreach ($news as $item)
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden md:flex">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" class="w-full h-48 md:w-1/3 md:h-48 object-cover">
                            <div class="p-4 md:w-2/3">
                                <h2 class="text-xl font-semibold">
                                    <a href="{{ route('news.show', ['news' => $item]) }}" class="text-blue-700 hover:underline">
                                        {{ $item->title }}
                                    </a>
                                </h2>
                                <p class="text-gray-500 text-sm mb-2">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{ $item->published_at->diffForHumans() }}
                                </p>
                                <p class="text-gray-700 mb-4">{!! Str::limit($item->content, 300) !!}</p>
                                <x-button class="block md:hidden w-full mt-4 hover:shadow-lg transition-shadow duration-300">Baca Selengkapnya</x-button>
                            </div>
                        </article>
                    @endforeach
                </div>
                {{ $news->links() }}
            </main>
        </div>
    </div>
    <x-footer />
</x-layouts.app>
