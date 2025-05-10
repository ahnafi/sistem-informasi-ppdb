<!-- ========== FOOTER ========== -->
<footer class="mt-auto relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-indigo-950 z-0"></div>
    <div class="absolute inset-0 opacity-10 z-0">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-300 rounded-full animate-pulse-slow"></div>
        <div class="absolute top-3/4 left-1/2 w-2.5 h-2.5 bg-purple-300 rounded-full animate-pulse-slow" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/3 left-3/4 w-2 h-2 bg-indigo-300 rounded-full animate-pulse-slow" style="animation-delay: -1s;"></div>
        <div class="absolute top-1/2 left-1/5 w-3 h-3 bg-blue-300 rounded-full animate-pulse-slow" style="animation-delay: -3s;"></div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent"></div>

    <div class="relative z-10 w-full max-w-7xl py-16 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
            <!-- School Brand Section -->
            <div class="col-span-full lg:col-span-2">
                <div class="flex items-center gap-3 mb-6 transform transition-transform hover:scale-105">
                    <div class="relative">
                        <div class="absolute inset-0 rounded-full bg-blue-400/30 blur-xl"></div>
                        <img src="{{asset("images/logonobg.png")}}" alt="Hogwarts" class="w-14 h-14 relative z-10">
                    </div>
                    <div>
                        <a class="font-serif text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-100 to-blue-100" href="{{ route('home') }}" aria-label="Brand">Hogwarts</a>
                        <p class="text-xs text-blue-200 italic">Draco Dormiens Nunquam Titillandus</p>
                    </div>
                </div>
                
                <p class="text-blue-100/80 text-base leading-relaxed mb-6">
                    SMA Hogwarts adalah sekolah kebanggaan yang mendidik penyihir muda berbakat sejak tahun 990 M. Menyediakan kurikulum pendidikan kelas dunia dengan fasilitas terbaik dan staf pengajar terpilih.
                </p>
                
                <!-- Newsletter -->
                <div class="mt-6">
                    <h5 class="text-white text-sm font-semibold mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        Dapatkan Info Terbaru
                    </h5>
                    <form class="flex gap-2">
                        <input type="email" class="py-2 px-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-full" placeholder="Alamat Email">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg px-4 py-2 text-sm transition-colors duration-300 flex-shrink-0">
                            Daftar
                        </button>
                    </form>
                </div>
            </div>
            <!-- End School Brand Section -->

            <!-- Quick Links -->
            <div class="col-span-1">
                <h4 class="font-semibold text-white mb-6 pb-2 border-b border-blue-500/30">Halaman Utama</h4>

                <div class="space-y-4">
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('home') }}">
                            <span class="size-1.5 rounded-full bg-blue-500/70 group-hover:bg-blue-400 transition-colors"></span>
                            <span>Beranda</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('article') }}">
                            <span class="size-1.5 rounded-full bg-blue-500/70 group-hover:bg-blue-400 transition-colors"></span>
                            <span>Berita</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('home.contact') }}">
                            <span class="size-1.5 rounded-full bg-blue-500/70 group-hover:bg-blue-400 transition-colors"></span>
                            <span>Kontak</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- End Quick Links -->

            <!-- School Info Links -->
            <div class="col-span-1">
                <h4 class="font-semibold text-white mb-6 pb-2 border-b border-blue-500/30">Tentang Sekolah</h4>

                <div class="space-y-4">
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('home.profile') }}">
                            <span class="size-1.5 rounded-full bg-indigo-500/70 group-hover:bg-indigo-400 transition-colors"></span>
                            <span>Profil Sekolah</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('home.teachers') }}">
                            <span class="size-1.5 rounded-full bg-indigo-500/70 group-hover:bg-indigo-400 transition-colors"></span>
                            <span>Daftar Guru</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('home.orgstructure') }}">
                            <span class="size-1.5 rounded-full bg-indigo-500/70 group-hover:bg-indigo-400 transition-colors"></span>
                            <span>Struktur Organisasi</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="#">
                            <span class="size-1.5 rounded-full bg-indigo-500/70 group-hover:bg-indigo-400 transition-colors"></span>
                            <span>Kalender Akademik</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="{{ route('registration') }}">
                            <span class="size-1.5 rounded-full bg-indigo-500/70 group-hover:bg-indigo-400 transition-colors"></span>
                            <span>Pendaftaran</span>
                        </a>
                        <span class="inline-flex items-center ml-2 px-2 py-0.5 rounded text-xs font-medium bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                            Dibuka
                        </span>
                    </p>
                </div>
            </div>
            <!-- End School Info Links -->

            <!-- Program Links -->
            <div class="col-span-1">
                <h4 class="font-semibold text-white mb-6 pb-2 border-b border-blue-500/30">Program Sekolah</h4>

                <div class="space-y-4">
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="#">
                            <span class="size-1.5 rounded-full bg-purple-500/70 group-hover:bg-purple-400 transition-colors"></span>
                            <span>Akademik</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="#">
                            <span class="size-1.5 rounded-full bg-purple-500/70 group-hover:bg-purple-400 transition-colors"></span>
                            <span>Kesiswaan</span>
                        </a>
                    </p>
                    <p>
                        <a class="group inline-flex gap-x-2 text-blue-100 hover:text-blue-300 transition-colors duration-300 items-center" href="#">
                            <span class="size-1.5 rounded-full bg-purple-500/70 group-hover:bg-purple-400 transition-colors"></span>
                            <span>Fasilitas</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- End Program Links -->
        </div>
        <!-- End Main Grid -->

        <!-- Footer Bottom -->
        <div class="mt-12 pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Copyright -->
                <div class="flex items-center">
                    <p class="text-sm text-blue-200/70">
                        &copy; {{now()->format("Y")}} SMA Hogwarts. All rights reserved.
                    </p>
                </div>
                <!-- End Copyright -->

                <!-- Social Media Links -->
                <div class="flex space-x-4">
                    <a class="size-10 inline-flex justify-center items-center rounded-full border border-white/20 text-white bg-white/5 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300" href="#" aria-label="Facebook">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127c-.82-.088-1.643-.13-2.467-.127-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                        </svg>
                    </a>
                    <a class="size-10 inline-flex justify-center items-center rounded-full border border-white/20 text-white bg-white/5 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300" href="#" aria-label="Twitter">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.599-.1-.899a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path>
                        </svg>
                    </a>
                    <a class="size-10 inline-flex justify-center items-center rounded-full border border-white/20 text-white bg-white/5 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300" href="#" aria-label="Instagram">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                            <circle cx="16.806" cy="7.207" r="1.078"></circle>
                            <path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>
                        </svg>
                    </a>
                    <a class="size-10 inline-flex justify-center items-center rounded-full border border-white/20 text-white bg-white/5 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300" href="#" aria-label="YouTube">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path>
                        </svg>
                    </a>
                </div>
                <!-- End Social Media Links -->
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
</footer>

<style>
    @keyframes pulse-slow {
        0% { transform: scale(1); opacity: 0.6; }
        50% { transform: scale(1.5); opacity: 1; }
        100% { transform: scale(1); opacity: 0.6; }
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
</style>
<!-- ========== END FOOTER ========== -->
