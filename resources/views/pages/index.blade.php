<?php
    $berita = \App\Models\News::take(4)->get();
    $kegiatan = \App\Models\Activity::take(8)->get();
    ?>

<x-layouts.app>
    <x-navbar />
    <x-hero />

    <div style="background: linear-gradient(to bottom, white, #a3a4f4)">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
            <main class="col-span-12 md:col-span-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($berita->sortByDesc('published_at') as $item)
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold">
                                    <a href="{{ route('news.show', ['news' => $item]) }}" class="text-blue-700 hover:underline">
                                        {{ $item->title }}
                                    </a>
                                </h2>
                                <p class="text-gray-500 text-sm mb-2">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{ $item->published_at->diffForHumans() }}
                                </p>
                                <p class="text-gray-700 mb-4">{!! Str::limit($item->content, 150) !!}</p>
                                <a href="{{ route('news.show', ['news' => $item]) }}">
                                    <x-button class="w-full mt-4 hover:shadow-lg transition-shadow duration-300">Baca Selengkapnya</x-button>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <ul class="list-none">
                    <li class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 mt-4 shadow-lg hover:shadow-xl rounded w-full text-center">
                        <a href="/news" class="block">Lihat Semua Berita</a>
                    </li>
                </ul>
            </main>
            <aside class="col-span-12 md:col-span-4">
                <div class="bg-white p-4 rounded-lg shadow overflow-hidden">
                    <h2 class="text-2xl font-bold mb-4 text-center">Kegiatan Karang Taruna</h2>
                    <ul class="space-y-4">
                        @foreach ($kegiatan as $item)
                            <li class="flex items-center bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer" onclick="showModal('{{ $item->title }}', '{{ $item->start_date }}', '{{ ucfirst($item->status) }}', '{{ $item->description }}')">
                                <i class="fas fa-calendar-alt w-15 h-15 rounded mr-3 text-blue-500"></i>
                                <div class="flex-1">
                                    <p class="text-gray-900 font-semibold text-lg">
                                        {{ $item->title }}
                                    </p>
                                    <p class="text-gray-500 text-sm">{{ $item->start_date }}</p>
                                </div>
                                <span class="
                                    {{ $item->status == 'ongoing' ? 'bg-green-500' : '' }}
                                    {{ $item->status == 'planned' ? 'bg-yellow-500' : '' }}
                                    {{ $item->status == 'completed' ? 'bg-gray-500' : '' }}
                                    text-white text-xs font-bold px-3 py-1 rounded">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Modal Structure -->
                <div id="activityModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50">
                    <div class="bg-white p-5 border w-96 shadow-lg rounded-md">
                        <div class="text-center">
                            <h3 id="modalTitle" class="text-lg leading-6 font-medium text-gray-900 uppercase"></h3>
                            <div class="mt-2">
                                <p id="modalDate" class="text-sm text-gray-400"></p>
                                <p id="modalStatus" class="text-sm text-yellow-500"></p>
                                <p id="modalDescription" class="text-sm text-gray-500 mt-2"></p>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm" onclick="closeModal()">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function showModal(title, date, status, description) {
                        document.getElementById('modalTitle').innerText = title;
                        document.getElementById('modalDate').innerText = 'Tanggal Mulai: ' + date;
                        document.getElementById('modalStatus').innerText = status;

                        document.getElementById('modalDescription').innerText = description;
                        document.getElementById('activityModal').classList.remove('hidden');
                    }

                    function closeModal() {
                        document.getElementById('activityModal').classList.add('hidden');
                    }
                </script>
            </aside>
        </div>
    </div>
    <section id="hero-section" class="relative w-full overflow-x-hidden py-20 md:py-28" style="background: linear-gradient(to top, white 0%, #a3a4f4 100%)">
        {{-- Latar belakang animasi. Diposisikan absolut terhadap 'section' --}}
        <div class="absolute inset-0 z-0 opacity-50" aria-hidden="true">
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        {{-- Konten utama. Diposisikan di atas latar belakang (z-10) --}}
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-black">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4 break-words">
                    KARANG TARUNA RW 10
                </h1>
                <div class="max-w-4xl mx-auto">
                    {{-- 'break-words' memastikan teks akan pindah baris dan tidak memaksa container melebar --}}
                    <p class="text-base md:text-lg mt-6 break-words">
                        <strong class="font-semibold">Karang Taruna RW 10</strong> resmi terbentuk pada <strong class="font-semibold">01 Agustus 2022</strong> atas inisiatif para pemuda dan pemudi di wilayah tersebut untuk menciptakan organisasi yang menjadi wadah kebersamaan, kreativitas, dan kepedulian sosial. Organisasi ini lahir dari semangat generasi muda RW 10 yang ingin berkontribusi nyata bagi masyarakat melalui berbagai kegiatan positif, seperti aksi sosial, pendidikan, olahraga, seni budaya, dan program pemberdayaan masyarakat untuk meningkatkan kualitas hidup warga.
                    </p>
                    <p class="text-base md:text-lg mt-4 break-words">
                        Dengan terbentuknya Karang Taruna RW 10, diharapkan tercipta lingkungan yang harmonis, peduli, dan progresif, sekaligus menginspirasi generasi muda untuk aktif berkontribusi dalam pembangunan masyarakat.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="/struktur" class="bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-yellow-400 transition-colors duration-300 inline-block text-lg">
                        Struktur Organisasi
                    </a>
                </div>
            </div>
        </div>
    </section>
    <x-members-section />
    <x-footer />
</x-layouts.app>

<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
