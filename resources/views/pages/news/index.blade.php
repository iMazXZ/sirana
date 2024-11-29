<?php

use App\Models\News;
use Illuminate\Contracts\View\View;
use function Laravel\Folio\render;

render(function (View $view) {
    return $view->with('news', News::take(5)->get());
});
?>

<x-layouts.app>
    Berita
    @foreach($news as $berita)
        {{ $berita->title }}
    @endforeach
</x-layouts.app>
