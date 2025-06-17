<x-layouts.app>
    <x-navbar />
    <!DOCTYPE html>
    <html lang="id" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Struktur Organisasi Karang Taruna RW 10</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
            .fade-in {
                animation: fadeIn 0.8s ease-in-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .role-card {
                background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
                border: 1px solid rgba(226, 232, 240, 0.8);
            }
            .role-card:hover {
                background: linear-gradient(145deg, #f8fafc 0%, #ffffff 100%);
            }
            .section-divider {
                height: 4px;
                background: linear-gradient(90deg, #667eea, #764ba2);
                border-radius: 2px;
            }
        </style>
    </head>
    <body class="bg-gray-50 font-sans">
        <!-- Hero Section -->
        <section class="gradient-bg text-white py-20 mt-4">
            <div class="container mx-auto px-6 text-center">
                <div class="fade-in">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 tracking-wide">
                        STRUKTUR ORGANISASI
                    </h1>
                    <div class="w-24 h-1 bg-white mx-auto mb-8 rounded-full"></div>
                    <p class="text-xl md:text-2xl mb-4 font-light leading-relaxed max-w-4xl mx-auto">
                        Karang Taruna RW 10 Kelurahan Yosodadi
                    </p>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 max-w-3xl mx-auto mt-8">
                        <p class="text-lg font-medium">
                            Periode 2023-2024 | Dipimpin oleh <span class="font-bold text-yellow-300">Hannan Kuswara</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organization Chart Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Bagan Organisasi</h2>
                    <div class="section-divider w-20 mx-auto mb-8"></div>
                </div>
                
                <div class="flex justify-center">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-5xl w-full">
                        <img src="https://i.ibb.co.com/WcbFWqJ/Struktur-Organisasi-RW-10-1.jpg" 
                            alt="Struktur Organisasi Karang Taruna RW 10" 
                            class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Roles and Responsibilities Section -->
        <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Tugas & Wewenang</h2>
                    <div class="section-divider w-20 mx-auto mb-8"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Setiap posisi memiliki peran strategis dalam membangun organisasi yang solid dan berdampak positif bagi masyarakat
                    </p>
                </div>

                <!-- Penasihat -->
                <div class="mb-12">
                    <div class="role-card rounded-2xl shadow-lg p-8 card-hover">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-tie text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">PENASIHAT</h3>
                                <p class="text-purple-600 font-semibold text-lg">Y. Bambang Irawan, S.Pd., M.Pd.</p>
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="flex items-center text-lg font-semibold text-gray-700 mb-4">
                                    <i class="fas fa-tasks mr-2 text-blue-500"></i>
                                    Tugas Utama
                                </h4>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Memberikan arahan, bimbingan, dan nasihat kepada pengurus Karang Taruna
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Mengawasi dan mengevaluasi kegiatan organisasi agar sesuai dengan visi dan misi
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Menjadi penengah dalam menyelesaikan permasalahan yang muncul di organisasi
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="flex items-center text-lg font-semibold text-gray-700 mb-4">
                                    <i class="fas fa-crown mr-2 text-yellow-500"></i>
                                    Wewenang
                                </h4>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                                        Memberikan persetujuan terhadap kebijakan strategis yang dibuat oleh pengurus
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengurus Inti -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">PENGURUS INTI</h2>
                    
                    <!-- Ketua -->
                    <div class="role-card rounded-2xl shadow-lg p-8 mb-8 card-hover">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-crown text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">KETUA</h3>
                                <p class="text-red-600 font-semibold text-lg">Hannan Kuswara</p>
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="flex items-center text-lg font-semibold text-gray-700 mb-4">
                                    <i class="fas fa-tasks mr-2 text-blue-500"></i>
                                    Tugas Utama
                                </h4>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Memimpin organisasi dan bertanggung jawab atas jalannya seluruh program kerja
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Menjadi representasi Karang Taruna dalam hubungan eksternal
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        Mengkoordinasikan seluruh pengurus dan anggota dalam melaksanakan tugasnya
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="flex items-center text-lg font-semibold text-gray-700 mb-4">
                                    <i class="fas fa-crown mr-2 text-yellow-500"></i>
                                    Wewenang
                                </h4>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                                        Mengambil keputusan strategis untuk organisasi bersama pengurus inti
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Sekretaris -->
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-edit text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">SEKRETARIS I</h3>
                                    <p class="text-blue-600 font-semibold">Gert Meralte</p>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                        <i class="fas fa-tasks mr-2 text-blue-500"></i>Tugas
                                    </h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li>• Menyusun agenda rapat dan mencatat hasilnya</li>
                                        <li>• Mengelola administrasi dan surat menyurat</li>
                                        <li>• Mendampingi Ketua dalam menyusun rencana kerja</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                        <i class="fas fa-crown mr-2 text-yellow-500"></i>Wewenang
                                    </h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li>• Mengakses data dan dokumen penting organisasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-edit text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">SEKRETARIS II</h3>
                                    <p class="text-cyan-600 font-semibold">Sumalensia Anaramadhani</p>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                        <i class="fas fa-tasks mr-2 text-blue-500"></i>Tugas
                                    </h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li>• Membantu Sekretaris I dalam administrasi</li>
                                        <li>• Menggantikan tugas Sekretaris I jika berhalangan</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                        <i class="fas fa-crown mr-2 text-yellow-500"></i>Wewenang
                                    </h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li>• Mendukung pelaksanaan tugas sekretariat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bendahara -->
                    <div class="role-card rounded-2xl shadow-lg p-6 card-hover mb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-wallet text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">BENDAHARA</h3>
                                <p class="text-green-600 font-semibold">Nabilah Putri Sakinah</p>
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                    <i class="fas fa-tasks mr-2 text-blue-500"></i>Tugas
                                </h4>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• Mengelola keuangan organisasi</li>
                                    <li>• Menyusun laporan keuangan berkala</li>
                                    <li>• Memastikan dana digunakan sesuai program kerja</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                    <i class="fas fa-crown mr-2 text-yellow-500"></i>Wewenang
                                </h4>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• Mengelola dan mengawasi anggaran organisasi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ketua Bidang -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">KETUA BIDANG</h2>
                    
                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                        <!-- Bidang Kemasyarakatan -->
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="text-center mb-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-users text-white text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">KEMASYARAKATAN</h3>
                                <p class="text-orange-600 font-semibold">Sabella Cahya Utami</p>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Tugas:</h4>
                                    <p class="text-xs text-gray-600">Merancang program sosial dan menjalin hubungan baik antarwarga</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Wewenang:</h4>
                                    <p class="text-xs text-gray-600">Mengkoordinasikan kegiatan kemasyarakatan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bidang Keanggotaan -->
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="text-center mb-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-user-friends text-white text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">KEANGGOTAAN</h3>
                                <p class="text-purple-600 font-semibold">Avika Rahmadani</p>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Tugas:</h4>
                                    <p class="text-xs text-gray-600">Mengelola data anggota dan melakukan rekrutmen</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Wewenang:</h4>
                                    <p class="text-xs text-gray-600">Menyusun aturan terkait keanggotaan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bidang Lingkungan Hidup -->
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="text-center mb-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-leaf text-white text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">LINGKUNGAN HIDUP</h3>
                                <p class="text-green-600 font-semibold">Eka Yuliana Pratiwi</p>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Tugas:</h4>
                                    <p class="text-xs text-gray-600">Melaksanakan program penghijauan dan pelestarian lingkungan</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Wewenang:</h4>
                                    <p class="text-xs text-gray-600">Mengkoordinasikan program lingkungan hidup</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bidang Seni, Budaya, dan Olahraga -->
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="text-center mb-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-palette text-white text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">SENI, BUDAYA & OLAHRAGA</h3>
                                <p class="text-indigo-600 font-semibold">Arya Dwi Firmansyah</p>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Tugas:</h4>
                                    <p class="text-xs text-gray-600">Mengembangkan kegiatan seni, budaya, dan olahraga</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Wewenang:</h4>
                                    <p class="text-xs text-gray-600">Merencanakan kegiatan yang melibatkan warga</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bidang Tabligh dan Taklim -->
                        <div class="role-card rounded-2xl shadow-lg p-6 card-hover">
                            <div class="text-center mb-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-mosque text-white text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">TABLIGH & TAKLIM</h3>
                                <p class="text-emerald-600 font-semibold">Hasan Ramadhan</p>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Tugas:</h4>
                                    <p class="text-xs text-gray-600">Mengelola kegiatan keagamaan dan meningkatkan spiritualitas</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Wewenang:</h4>
                                    <p class="text-xs text-gray-600">Berkoordinasi dengan tokoh agama dan masyarakat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="gradient-bg text-white py-16">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Mari Bergabung Bersama Kami</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Karang Taruna RW 10 selalu terbuka untuk pemuda-pemudi yang ingin berkontribusi dalam membangun masyarakat yang lebih baik
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Kelurahan Yosodadi</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 flex items-center">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>Periode 2023-2024</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        <span>RW 10</span>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Smooth scrolling and fade-in animation
            document.addEventListener('DOMContentLoaded', function() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, observerOptions);

                // Apply animation to cards
                document.querySelectorAll('.role-card').forEach(card => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'all 0.6s ease-out';
                    observer.observe(card);
                });

                // Add hover effects
                document.querySelectorAll('.card-hover').forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-8px) scale(1.02)';
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0) scale(1)';
                    });
                });
            });
        </script>
    </body>
    </html>
<x-footer />
</x-layouts.app>