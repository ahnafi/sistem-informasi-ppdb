@extends("layouts.default")
@section("title","Pendaftaran SMA Hogwarts")

@section("main")
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
                    <h1 class="font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Pendaftaran</h1>
                    <div class="w-[501.5px] h-[2px] bg-white/70"></div>
                </div>
                <p class="font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
            </div>
        </div>
    </div>

    <!-- Registration Steps Section -->
    <section class="py-16 relative mt-[455px]">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0" style="background-image: url('{{ asset('images/bgpixi.png') }}'); background-repeat: repeat;"></div>
        
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-white/90 z-0"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold tracking-tight text-blue-900 mb-4">Langkah Pendaftaran</h2>
                <p class="text-lg text-blue-700 max-w-2xl mx-auto">
                    Ikuti langkah-langkah berikut untuk mendaftar di SMA Hogwarts
                </p>
                <div class="mx-auto w-24 h-1 bg-gradient-to-r from-blue-400 to-indigo-400 mt-4 rounded-full"></div>
            </div>
            
            <!-- Updated grid layout: 2-2-1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- First Row: 2 Steps -->
                
                <!-- Step 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-lg p-8 relative shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-14 h-14 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">1</div>
                    <h3 class="font-bold text-xl text-center mt-6 mb-4 text-blue-900">Pengisian Formulir Pendaftaran</h3>
                    <p class="text-center text-blue-800">Calon peserta didik mengisi formulir pendaftaran secara online dengan data diri yang benar dan lengkap.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-lg p-8 relative shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-14 h-14 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">2</div>
                    <h3 class="font-bold text-xl text-center mt-6 mb-4 text-blue-900">Unggah Berkas Persyaratan</h3>
                    <p class="text-center text-blue-800">Unggah dokumen yang diperlukan, seperti kartu keluarga, akta kelahiran, dan rapor terakhir sesuai ketentuan sekolah.</p>
                </div>
                
                <!-- Second Row: 2 Steps -->
                
                <!-- Step 3 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-lg p-8 relative shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-14 h-14 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">3</div>
                    <h3 class="font-bold text-xl text-center mt-6 mb-4 text-blue-900">Verifikasi Dokumen</h3>
                    <p class="text-center text-blue-800">Tim administrasi sekolah akan melakukan pengecekan berkas yang telah diunggah. Jika ada kekurangan, calon peserta didik akan dihubungi untuk melengkapinya.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-lg p-8 relative shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-14 h-14 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">4</div>
                    <h3 class="font-bold text-xl text-center mt-6 mb-4 text-blue-900">Pengumuman Hasil Pendaftaran</h3>
                    <p class="text-center text-blue-800">Hasil seleksi administrasi akan diumumkan melalui website resmi atau email yang telah didaftarkan.</p>
                </div>
                
                <!-- Third Row: 1 Step (centered) -->
                
                <!-- Step 5 -->
                <div class="bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-lg p-8 relative shadow-lg border border-blue-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col h-full md:col-span-2 md:max-w-md md:mx-auto">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-14 h-14 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">5</div>
                    <h3 class="font-bold text-xl text-center mt-6 mb-4 text-blue-900">Daftar Ulang</h3>
                    <p class="text-center text-blue-800">Peserta didik yang diterima wajib melakukan daftar ulang dengan melengkapi administrasi dan mengikuti sesi orientasi awal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section - Soft Colors -->
    <section class="py-20 bg-gradient-to-b from-blue-100 to-indigo-200 flex justify-center items-center">
        <div class="bg-white/90 backdrop-blur-sm rounded-lg shadow-lg p-8 max-w-2xl w-full mx-4 border border-blue-100/50 transform hover:shadow-blue-100/50 transition-all duration-300">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Jadwal Pendaftaran</h2>
            
            <div class="h-1 w-24 bg-gradient-to-r from-blue-200 to-indigo-300 mx-auto mb-8 rounded-full"></div>
            
            <div class="space-y-8">
                <!-- Timeline Item 1 -->
                <div>
                    <p class="text-sm font-semibold text-gray-500 mb-1">1 - 15 Mei {{ date('Y') }}</p>
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-blue-300 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-600 mb-1">Pembukaan Pendaftaran Online</h3>
                            <p class="text-gray-600 text-sm">Calon peserta didik dapat mengisi formulir pendaftaran online dan mengunggah dokumen persyaratan. Pastikan semua data yang dimasukkan sudah benar!</p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div>
                    <p class="text-sm font-semibold text-gray-500 mb-1">16 - 20 Mei {{ date('Y') }}</p>
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-blue-300 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-600 mb-1">Verifikasi Berkas & Dokumen</h3>
                            <p class="text-gray-600 text-sm">Admin administrasi akan mengecek kelengkapan berkas. Jika ada kekurangan dokumen, akan diinformasikan melalui email atau WhatsApp.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div>
                    <p class="text-sm font-semibold text-gray-500 mb-1">30 Mei {{ date('Y') }}</p>
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-blue-300 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-600 mb-1">Pengumuman Hasil Pendaftaran</h3>
                            <p class="text-gray-600 text-sm">Cek hasil pendaftaran melalui website resmi atau email yang telah didaftarkan. Jika diterima, segera lakukan daftar ulang!</p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div>
                    <p class="text-sm font-semibold text-gray-500 mb-1">1 - 10 Juni {{ date('Y', strtotime('+1 year')) }}</p>
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-blue-300 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-600 mb-1">Daftar Ulang & Registrasi</h3>
                            <p class="text-gray-600 text-sm">Peserta didik yang diterima wajib melakukan daftar ulang dengan melengkapi administrasi dan mengikuti sesi orientasi awal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action Section -->
    <section class="py-16 bg-white flex flex-col items-center justify-center text-center px-4">
        <h2 class="text-4xl font-bold text-blue-900 mb-4">Tunggu Apa Lagi???</h2>
        
        <p class="text-lg text-blue-700 max-w-2xl mb-8">
            Segera daftarkan diri Anda untuk menjadi bagian dari keluarga besar SMA Hogwarts.
        </p>
        
        <a href="{{ route('registration.form') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-full shadow-lg hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300">
            <span class="mr-2">Daftar</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    </section>
    
    <!-- Animation and effect styles -->
    <style>
        /* Animation keyframes */
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        @keyframes twinkle {
            0% { opacity: 0.2; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.3); }
            100% { opacity: 0.2; transform: scale(1); }
        }
        
        .animate-float-slow { animation: float 8s ease-in-out infinite; }
        .animate-float-medium { animation: float 6s ease-in-out infinite; }
        .animate-float-fast { animation: float 4s ease-in-out infinite; }

        /* Magical text effect */
        .magical-text {
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
        }

        /* Star elements */
        .stars-container {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .star {
            position: absolute;
            width: 4px;
            height: 4px;
            background-color: white;
            border-radius: 50%;
            opacity: 0.7;
            animation: twinkle 3s ease-in-out infinite;
        }

        /* Constellation pattern */
        .constellation-pattern {
            background-image: radial-gradient(circle at center, rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>
@endsection
