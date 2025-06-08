@extends('layouts.default')
@section('title', 'Profile Sekolah')

@section('main')
<div class="bg-white relative w-full min-h-screen overflow-x-hidden">
    <!-- Banner Section -->
    <div class="absolute w-full h-[455px] left-0 top-0 flex flex-col items-start gap-2.5 isolate">
        <div class="absolute w-full h-full left-0 top-0">
            <!-- Background Image -->
            <div class="absolute w-full h-full left-0 top-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/building.jpg') }}')"></div>
            <!-- Blue Overlay with Gradient -->
            <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-r from-blue-600/80 via-blue-500/60 to-blue-400/30"></div>
            <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-b from-blue-600/60 via-blue-500/40 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full h-full flex items-center z-10">
            <div class="flex flex-col items-start gap-4">
                <div class="flex flex-col items-start gap-2">
                    <h1 class="font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Profile Sekolah</h1>
                    <div class="w-[501.5px] h-[2px] bg-white/70"></div>
                </div>
                <p class="font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="py-16 bg-gradient-to-b from-white to-blue-200 mt-[455px]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">SMA Hogwarts</h2>
                        <div class="w-32 h-1 bg-blue-600"></div>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        SMA Hogwarts adalah sekolah menengah unggulan yang terletak di kawasan pegunungan sejuk Jawa Barat, dengan sejarah panjang sejak abad ke-10. Sekolah ini berkomitmen mencetak generasi muda yang cerdas, mandiri, dan berkarakter. Dengan sistem asrama yang membentuk nilai kepemimpinan, tanggung jawab, dan disiplin, Hogwarts menawarkan kurikulum seimbang antara akademik dan pengembangan diri. Dilengkapi dengan fasilitas modern seperti laboratorium, perpustakaan digital, serta ruang seni dan olahraga, SMA Hogwarts menciptakan lingkungan belajar yang kondusif.
                    </p>
                    <button class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300 rounded-lg">
                        <span class="font-semibold">Baca Selengkapnya</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <div class="aspect-square bg-gray-300 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/home/building.jpg') }}" alt="SMA Hogwarts Building" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-16 bg-gradient-to-b from-blue-200 to-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Vision Card -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Visi</h3>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                        <p class="text-gray-700 leading-relaxed">
                            SMA Hogwarts memiliki visi untuk menjadi sekolah menengah atas yang unggul dalam ilmu pengetahuan, karakter, dan keterampilan, dengan menanamkan nilai-nilai kebijaksanaan, keberanian, dan kerja sama dalam setiap aspek pembelajaran. Visi ini mencerminkan komitmen sekolah dalam membentuk peserta didik yang berprestasi secara akademik dan memiliki kepribadian yang kuat agar mampu menghadapi tantangan masa depan.
                        </p>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Misi</h3>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                        <p class="text-gray-700 leading-relaxed">
                            Menyelenggarakan pembelajaran yang aktif, kreatif, dan inovatif untuk mengembangkan potensi siswa secara optimal. Membentuk karakter siswa yang berakhlak mulia, disiplin, dan bertanggung jawab. Menanamkan semangat cinta tanah air dan kepedulian terhadap lingkungan sosial dan alam. Memberikan fasilitas dan lingkungan belajar yang mendukung pengembangan potensi siswa secara optimal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Goals Section -->
    <section class="py-16 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="w-full h-full" style="background-image: url('{{ asset('images/bgpixi.png') }}'); background-repeat: repeat;"></div>
        </div>

        <!-- Blue blur element - top right -->
        <div class="absolute w-[400px] h-[400px] -right-48 -top-24 bg-[#2D66F5] rounded-full blur-[150px] opacity-80"></div>
        
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Tujuan Sekolah</h2>
                        <div class="w-32 h-1 bg-blue-600"></div>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        SMA Hogwarts bertujuan untuk mencetak lulusan yang tidak hanya unggul dalam bidang akademik, tetapi juga memiliki karakter yang kuat, mampu berpikir kritis, bekerja sama dalam tim, serta siap melanjutkan pendidikan ke jenjang yang lebih tinggi atau langsung berkontribusi di masyarakat. Sekolah ini juga ingin menjadi teladan dalam penerapan pendidikan yang berbasis nilai dan tradisi positif, serta mampu beradaptasi dengan perkembangan zaman.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="aspect-square bg-gray-300 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/home/building.jpg') }}" alt="School Activity 1" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-300 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/facility/lab.jpg') }}" alt="School Activity 2" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal's Message Section -->
    <section class="py-16 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="w-full h-full" style="background-image: url('{{ asset('images/bgpixi.png') }}'); background-repeat: repeat;"></div>
        </div>
        
        <!-- Blue blur element - bottom left -->
        <div class="absolute w-[400px] h-[400px] -left-48 -bottom-24 bg-[#2D66F5] rounded-full blur-[150px] opacity-80"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Prakata Kepala Sekolah</h2>
                <div class="w-32 h-1 bg-blue-600"></div>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-12 items-start">
                <div class="lg:col-span-1">
                    <div class="relative">
                        <div class="aspect-[3/4] bg-gray-300 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('images/home/Mourinho.png') }}" alt="Principal Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            Kepada Siswa, Orang Tua, dan Keluarga Besar SMA Hogwarts,
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Selama lebih dari tiga dekade, SMA Hogwarts telah berdiri sebagai institusi pendidikan yang berkomitmen pada keunggulan akademik dan pembentukan karakter. Sebagai Kepala Sekolah, saya sangat bangga dapat melanjutkan tradisi mulia ini dalam membimbing generasi muda Indonesia menuju masa depan yang gemilang.
                        </p>
                        <p class="text-gray-700 leading-relaxed mt-6">
                            Di SMA Hogwarts, kami percaya bahwa pendidikan tidak hanya terbatas pada pembelajaran di dalam kelas. Siswa-siswi kami belajar untuk menguasai ilmu pengetahuan, mengembangkan keterampilan, dan yang tidak kalah penting, membentuk karakter, integritas, dan kebijaksanaan yang akan mempersiapkan mereka menghadapi tantangan dunia modern.
                        </p>
                        <div class="mt-8">
                            <p class="font-semibold text-gray-900">Jose Mourinho, S.Pd., M.Ed</p>
                            <p class="text-gray-600">Kepala Sekolah SMA Hogwarts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Background decorative elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute w-96 h-96 -top-48 -right-48 bg-blue-500 opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute w-96 h-96 top-1/2 -left-48 bg-blue-500 opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute w-96 h-96 -bottom-48 right-1/4 bg-blue-500 opacity-10 rounded-full blur-3xl"></div>
    </div>
</div>
@endsection
