<section id="members-section" class="bg-white py-12">
    <div class="container mx-auto px-4">
        <div class="text-center text-black relative z-10">
            <h2 class="font-bold text-2xl md:text-4xl mb-4">Daftar Anggota</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach (App\Models\Member::all() as $member)
                        <div class="swiper-slide bg-gray-100 p-4 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold">
                                <i class="fas fa-user-circle mr-2 text-blue-500"></i> {{ $member->name }}
                            </h3>
                            <p class="text-gray-600"><strong>Telepon:</strong> {{ $member->phone }}</p>
                            <p class="text-gray-600"><strong>Tanggal Bergabung:</strong> {{ \Carbon\Carbon::parse($member->join_date)->format('d-m-Y') }}</p>
                            <p class="text-gray-600"><strong>Status:</strong> {{ $member->status }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });
    });
</script>
<style>
    .swiper-container {
        overflow: hidden;
    }
</style>
