<?php
    $berita = \App\Models\News::take(5)->get();
    $kegiatan = \App\Models\Activity::take(5)->get();
    ?>

<x-layouts.app>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-12 gap-4">
            <main class="col-span-8">
                <div class="space-y-4">
                    @foreach ($berita as $item)
                        <article class="bg-white p-4 rounded shadow">
                            <h2 class="text-xl font-semibold">
                                <a href="{{ route('news.show', ['news' => $item]) }}" class="text-blue-700 hover:underline">
                                    {{ $item->title }}
                                </a>
                            </h2>
                            <p class="text-gray-500 text-sm mb-2">Dipublikasikan: {{ $item->published_at }}</p>
                            <p class="text-gray-700">{!! Str::limit($item->content, 150) !!}</p>
                        </article>
                    @endforeach
                </div>

            </main>
            <aside class="col-span-4">
                <div class="bg-gray-100 p-4 rounded shadow">
                    <h2 class="text-lg font-bold mb-4">Kegiatan Karang Taruna</h2>
                    <ul class="space-y-2">
                        @foreach ($kegiatan as $item)
                            <li class="text-sm">
                                <a href="{{ route('activity.show', ['activity' => $item]) }}" class="text-blue-600 hover:underline">
                                    {{ $item->title }}
                                </a>
                                <p class="text-gray-500 text-xs">{{ $item->start_date }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</x-layouts.app>
