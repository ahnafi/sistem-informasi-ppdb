@extends("layouts.default")
@section("title", "Cek Status Pendaftaran - SMA Hogwarts")

@section("main")
    <div class="min-h-screen bg-gradient-to-b from-blue-600 via-blue-50 to-white pb-20 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-40 right-[5%] w-40 h-40 bg-blue-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-40 right-[15%] w-60 h-60 bg-indigo-400/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/4 left-[5%] w-32 h-32 bg-blue-300/10 rounded-full blur-2xl"></div>
        
        <!-- Main content container with adjusted layout -->
        <div class="container mx-auto px-6 lg:px-8 pt-10">
            <!-- Hero Section with Title - Moved to left -->
            <section class="max-w-5xl mx-auto mt-16 md:mt-24 lg:pl-10">
                <div class="flex flex-col items-start gap-4">
                    <div class="flex flex-col items-start gap-2 w-full">
                        <h1 class="font-medium text-3xl md:text-5xl text-white leading-tight">
                            Pengumuman <span class="text-white">Siswa Baru</span>
                        </h1>
                        <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-full"></div>
                    </div>
                    <p class="text-xl md:text-2xl font-medium text-gray-700">SMA Hogwarts</p>
                </div>
            </section>

            <!-- Two column layout -->
            <div class="max-w-6xl mx-auto mt-10 md:mt-16 lg:pl-10 flex flex-col md:flex-row">
                <!-- Form Section - Left aligned -->
                <section class="w-full md:w-[500px] flex flex-col items-start gap-6 z-10">
                    @if (session('error'))
                        <div class="w-full bg-red-100 text-red-800 p-4 rounded-lg mb-2 font-medium text-sm border border-red-200">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-blue-100/50 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Cek Status Pendaftaran</h2>
                        
                        <form action="{{route('registration.check.result')}}" method="get" class="w-full flex flex-col gap-5">
                            @csrf
                            
                            <!-- Name Field -->
                            <div class="flex flex-col gap-2 w-full">
                                <label for="name" class="font-semibold text-base tracking-wide text-gray-700">Nama</label>
                                <div class="box-border flex items-center p-3 w-full h-[53px] bg-white border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-300 focus-within:border-blue-500 transition-all">
                                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" 
                                        class="w-full h-6 font-medium text-base text-gray-700 bg-transparent focus:outline-none">
                                </div>
                            </div>

                            <!-- Date of Birth Field -->
                            <div class="flex flex-col gap-2 w-full">
                                <label for="dob" class="font-semibold text-base tracking-wide text-gray-700">Tanggal lahir<span class="text-red-500">*</span></label>
                                <div class="box-border flex items-center p-3 w-full h-[53px] bg-white border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-300 focus-within:border-blue-500 transition-all">
                                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <input type="date" id="dob" name="dob" placeholder="DD/MM/YYYY" 
                                        class="w-full h-6 font-medium text-base text-gray-700 bg-transparent focus:outline-none">
                                </div>
                            </div>

                            <!-- NISN Field -->
                            <div class="flex flex-col gap-2 w-full">
                                <label for="nisn" class="font-semibold text-base tracking-wide text-gray-700">NISN</label>
                                <div class="box-border flex items-center p-3 w-full h-[53px] bg-white border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-blue-300 focus-within:border-blue-500 transition-all">
                                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                    </svg>
                                    <input type="text" id="nisn" name="nisn" placeholder="1234567890" 
                                        class="w-full h-6 font-medium text-base text-gray-700 bg-transparent focus:outline-none">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="flex justify-center items-center py-3 mt-4 w-full h-[48px] bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 transition-all rounded-lg shadow-md">
                                <span class="font-bold text-base tracking-wide text-white">Cek Status</span>
                            </button>
                        </form>
                    </div>
                </section>
                
                <!-- Illustration/Info Section - Right side -->
                <section class="hidden md:flex flex-col items-center justify-center md:w-[40%] lg:w-[50%] ml-auto">
                    <div class="relative w-full max-w-md">
                        <!-- Illustration -->
                        <img src="{{ asset('images/logonobg.png') }}">
    
                        
                        <!-- Info cards -->
                        <div class="bg-white/90 backdrop-blur-sm rounded-lg shadow-lg p-5 border border-blue-100 max-w-xs mt-8 mx-auto">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Informasi Penting</h3>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Pastikan NISN dan tanggal lahir sesuai dengan data pendaftaran
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Hasil pengumuman hanya dapat diakses setelah tanggal 30 Mei
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Hubungi panitia jika mengalami kendala dengan pengecekan status
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
