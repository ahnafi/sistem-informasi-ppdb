@extends('layouts.default')
@section('title', 'Akademik - SMA Hogwarts')

@section('main')
    <div class="bg-white relative w-full min-h-screen overflow-x-hidden">
        <!-- Background Ellipses -->
        <div class="absolute w-[573px] h-[551px] left-[1154px] top-[119px] bg-blue-600 opacity-100 blur-[250px]"></div>
        <div class="absolute w-[573px] h-[551px] left-[-138.18px] top-[1048px] bg-blue-600 opacity-100 blur-[250px] rotate-[45.92deg]"></div>
        <div class="absolute w-[573px] h-[551px] left-[1195px] top-[1843px] bg-blue-600 opacity-100 blur-[250px]"></div>

        <!-- Banner Section -->
        <div class="absolute w-full h-[455px] left-0 top-[88px] flex flex-col items-start p-[108px_104px] gap-2.5 isolate">
            <div class="absolute w-full h-full left-0 top-0">
                <!-- Background Image -->
                <div class="absolute w-full h-full left-0 top-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/building.jpg') }}')"></div>
                <!-- Blue Overlay with Gradient -->
                <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-r from-blue-600/40 via-blue-500/30 to-blue-400/20"></div>
                <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-b from-blue-600/50 via-blue-500/30 to-transparent"></div>
            </div>
            
            <div class="flex flex-col items-start gap-4 w-[1232px] h-[112px] z-10">
                <div class="flex flex-col items-start gap-2 w-full h-[67px]">
                    <h1 class="w-[651px] h-[59px] font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Akademik</h1>
                    <div class="w-[501.5px] h-[2px] bg-white/70"></div>
                </div>
                <p class="w-full h-[28px] font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative w-full max-w-7xl mx-auto px-4 pt-[600px] pb-20">
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
                    <!-- Image Section -->
                    <div class="flex justify-center">
                        <div class="w-full max-w-md h-96 bg-gray-300 rounded-lg flex items-center justify-center">
                            <span class="text-gray-600">Foto Bidang Kurikulum</span>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold leading-tight tracking-wider text-black font-inter">
                                Sambutan Bidang Kurikulum
                            </h2>
                            <hr class="border border-gray-400 w-full">
                        </div>
                        
                        <div class="text-xl leading-relaxed text-black font-roboto space-y-4">
                            <p>
                                SMA Hogwarts adalah sekolah menengah unggulan yang terletak di kawasan pegunungan sejuk Jawa Barat, dengan sejarah panjang sejak abad ke-10. Sekolah ini berkomitmen mencetak generasi muda yang cerdas, mandiri, dan berkarakter.
                            </p>
                            <p>
                                Dengan sistem asrama yang membentuk nilai kepemimpinan, tanggung jawab, dan disiplin, Hogwarts menawarkan kurikulum seimbang antara akademik dan pengembangan diri. Dilengkapi dengan fasilitas modern seperti laboratorium, perpustakaan digital, serta ruang seni dan olahraga, SMA Hogwarts menciptakan lingkungan belajar yang kondusif.
                            </p>
                            <p>
                                Kegiatan tahunan seperti Festival Budaya dan Lomba Antarasrama memberikan kesempatan bagi siswa untuk mengasah kreativitas dan sportivitas. Dengan bimbingan tenaga pendidik profesional, SMA Hogwarts siap menghasilkan lulusan yang siap berkontribusi bagi masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Additional Content Sections -->
                <div class="mt-16 space-y-12">
                    <!-- Kurikulum Section -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h3 class="text-3xl font-bold text-black font-inter">Struktur Kurikulum</h3>
                            <hr class="border border-gray-400 w-full">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <h4 class="text-xl font-semibold text-blue-700 mb-3">Mata Pelajaran Wajib</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Matematika</li>
                                    <li>• Bahasa Indonesia</li>
                                    <li>• Bahasa Inggris</li>
                                    <li>• Fisika</li>
                                    <li>• Kimia</li>
                                    <li>• Biologi</li>
                                </ul>
                            </div>
                            <div class="bg-green-50 p-6 rounded-lg">
                                <h4 class="text-xl font-semibold text-green-700 mb-3">Mata Pelajaran Pilihan</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Ekonomi</li>
                                    <li>• Geografi</li>
                                    <li>• Sosiologi</li>
                                    <li>• Sejarah</li>
                                    <li>• Seni Budaya</li>
                                    <li>• Prakarya</li>
                                </ul>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-lg">
                                <h4 class="text-xl font-semibold text-purple-700 mb-3">Ekstrakurikuler</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Robotika</li>
                                    <li>• Debat Bahasa Inggris</li>
                                    <li>• Olimpiade Sains</li>
                                    <li>• Paduan Suara</li>
                                    <li>• Basket</li>
                                    <li>• Futsal</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Prestasi Section -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h3 class="text-3xl font-bold text-black font-inter">Prestasi Akademik</h3>
                            <hr class="border border-gray-400 w-full">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                                <h4 class="text-xl font-semibold text-yellow-700 mb-3">Tingkat Nasional</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>🏆 Juara 1 Olimpiade Matematika Nasional 2023</li>
                                    <li>🏆 Juara 2 Olimpiade Fisika Nasional 2023</li>
                                    <li>🏆 Juara 3 Lomba Debat Bahasa Indonesia 2023</li>
                                </ul>
                            </div>
                            <div class="bg-red-50 p-6 rounded-lg border-l-4 border-red-400">
                                <h4 class="text-xl font-semibold text-red-700 mb-3">Tingkat Internasional</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>🌟 Peserta IMO (International Mathematical Olympiad) 2023</li>
                                    <li>🌟 Silver Medal Asian Physics Olympiad 2023</li>
                                    <li>🌟 Bronze Medal International Biology Olympiad 2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection