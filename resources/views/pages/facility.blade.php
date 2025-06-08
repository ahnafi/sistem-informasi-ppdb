@extends('layouts.default')
@section('title', 'Fasilitas SMA Hogwarts')
@section('main')
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
                <h1 class="font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Fasilitas</h1>
                <div class="w-[501.5px] h-[2px] bg-white/70"></div>
            </div>
            <p class="font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
        </div>
    </div>
</div>

<!-- Add spacing to push content below the banner -->
<div class="h-[455px]"></div>

<!-- Coordinator's Introduction Section -->
<div class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
      <!-- Left: Coordinator Photo & Info -->
      <div class="lg:col-span-2">
        <div class="relative">
          <!-- Photo frame with decorative elements -->
          <div class="relative p-3 max-w-md mx-auto">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-xl transform rotate-2"></div>
            <img 
              src="{{ asset('images/teacher/teach5.jpg') }}" 
              alt="Koordinator Sarana dan Prasarana" 
              class="relative z-10 rounded-xl shadow-lg w-full h-auto transform transition duration-500 hover:scale-[1.01]"
            >
            
            <div class="absolute bottom-0 right-0 w-16 h-16 bg-blue-400/20 backdrop-blur rounded-full transform translate-x-1/4 translate-y-1/4 flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
              </div>
            </div>
          </div>
          
          <div class="mt-6 text-center">
            <h3 class="text-xl font-bold text-blue-950">Ir. Hadi Wijaya</h3>
            <p class="text-gray-600">Wakil Kepala Sekolah Bidang Sarana & Prasarana</p>
          </div>
        </div>
      </div>
      
      <!-- Right: Coordinator Message -->
      <div class="lg:col-span-3">
        <div class="inline-block mb-4 px-4 py-1 bg-blue-100 rounded-full">
          <span class="text-blue-800 font-medium">Prakata Koordinator Sarana dan Prasarana</span>
        </div>
        
        <h2 class="text-3xl font-bold text-gray-900 mb-6 relative">
          Fasilitas Berkualitas untuk Pendidikan Berkualitas
          <div class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 mt-2 rounded-full"></div>
        </h2>
        
        <div class="prose prose-lg max-w-none text-gray-600">
          <p>
            Selamat datang di halaman Fasilitas SMA Hogwarts. Sebagai koordinator bidang sarana dan prasarana, saya dengan bangga mempersembahkan berbagai fasilitas modern yang telah kami kembangkan untuk mendukung proses belajar mengajar yang optimal.
          </p>
          
          <p>
            SMA Hogwarts berkomitmen untuk terus meningkatkan kualitas dan kuantitas fasilitas sekolah. Kami percaya bahwa lingkungan belajar yang nyaman dan dilengkapi dengan sarana memadai akan mendorong siswa untuk mengembangkan potensi mereka secara maksimal.
          </p>
          
          <p>
            Dari ruang kelas yang dilengkapi teknologi terkini, laboratorium sains yang komprehensif, hingga fasilitas olahraga dan kesenian, semua dirancang untuk memberikan pengalaman pendidikan terbaik bagi seluruh siswa dan pengajar SMA Hogwarts.
          </p>
          
          <div class="mt-8">
            <a href="#gallery" class="inline-flex items-center px-8 py-4 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-full shadow-lg group transition-all duration-300">
              <span>Lihat Fasilitas Kami</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Facilities Overview (Categories) -->
<div class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
        KATEGORI FASILITAS
      </span>
      <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        Fasilitas Utama SMA Hogwarts
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
        Berbagai fasilitas modern untuk mendukung kegiatan akademik, pengembangan minat bakat, dan kenyamanan seluruh sivitas akademika.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- Academic Facilities -->
      <div class="facility-card bg-white rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105 border border-gray-100">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-semibold text-center mb-3">Fasilitas Akademik</h3>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Ruang kelas modern dengan smart boards
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Perpustakaan dengan 10,000+ buku
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Area belajar dan ruang diskusi
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Laboratorium komputer dengan internet cepat
          </li>
        </ul>
      </div>
      
      <!-- Sports Facilities -->
      <div class="facility-card bg-white rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105 border border-gray-100">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-indigo-100 rounded-full mx-auto flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-semibold text-center mb-3">Fasilitas Olahraga</h3>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Kolam renang berstandar olimpiade
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Gymnasium dan pusat kebugaran
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Lapangan sepak bola dan lintasan lari
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Lapangan basket dan voli
          </li>
        </ul>
      </div>
      
      <!-- Arts & Culture -->
      <div class="facility-card bg-white rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105 border border-gray-100">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-semibold text-center mb-3">Fasilitas Seni & Budaya</h3>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Auditorium dengan 300 kursi
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Studio musik dengan instrumen lengkap
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Studio seni dan ruang pameran
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Ruang tari dan drama
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Facilities Gallery -->
<div id="gallery" class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
        GALERI FASILITAS
      </span>
      <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        Menjelajahi Fasilitas SMA Hogwarts
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
        Nikmati tur visual melalui berbagai fasilitas modern yang kami miliki untuk mendukung pengembangan akademik dan non-akademik siswa.
      </p>
    </div>
    
    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
      <!-- Gallery Item 1: Library -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Perpustakaan" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Perpustakaan</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Koleksi 10,000+ buku dengan area belajar yang nyaman dan akses ke jurnal digital.</p>
          </div>
        </div>
      </div>
      
      <!-- Gallery Item 2: Computer Lab -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Laboratorium Komputer" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Lab Komputer</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Dilengkapi komputer modern dan software terkini untuk pemrograman dan desain.</p>
          </div>
        </div>
      </div>
      
      <!-- Gallery Item 3: Auditorium -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Auditorium" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Auditorium</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Kapasitas 300 orang dengan sistem audio visual canggih untuk berbagai acara.</p>
          </div>
        </div>
      </div>
      
      <!-- Gallery Item 4: Sports Field -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Lapangan Olahraga" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Lapangan Olahraga</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Lapangan sepak bola standar dengan lintasan lari dan tribun penonton.</p>
          </div>
        </div>
      </div>
      
      <!-- Gallery Item 5: Swimming Pool -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Kolam Renang" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Kolam Renang</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Kolam renang ukuran olimpiade dengan fasilitas lengkap dan instruktur berpengalaman.</p>
          </div>
        </div>
      </div>
      
      <!-- Gallery Item 6: Art Studio -->
      <div class="facility-gallery-item group">
        <div class="relative overflow-hidden rounded-xl shadow-md aspect-w-16 aspect-h-12">
          <img src="{{ asset('images/home/library.jpg') }}" alt="Studio Seni" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-xl font-bold mb-2">Studio Seni</h3>
            <p class="text-sm text-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">Area kreatif dengan berbagai peralatan seni dan ruang pameran untuk karya siswa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Section -->
<div class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-blue-600 to-indigo-700 relative overflow-hidden">
  <!-- Animated floating elements -->
  <div class="absolute inset-0 z-0">
    <div class="absolute top-20 left-[15%] w-20 h-20 bg-blue-400/20 rounded-full blur-xl animate-float-slow"></div>
    <div class="absolute top-40 right-[20%] w-28 h-28 bg-purple-500/20 rounded-full blur-xl animate-float-medium"></div>
    <div class="absolute bottom-20 left-[25%] w-24 h-24 bg-indigo-400/20 rounded-full blur-xl animate-float-fast"></div>
  </div>
  
  <div class="max-w-4xl mx-auto text-center relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ingin Melihat Fasilitas Kami Secara Langsung?</h2>
    <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
      Jadwalkan kunjungan ke kampus untuk melihat berbagai fasilitas modern yang kami miliki dan rasakan pengalaman belajar di SMA Hogwarts.
    </p>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ url('contact') }}" class="px-8 py-4 border-2 border-white/70 text-white font-medium rounded-full hover:bg-white/10 transform transition-all hover:scale-105">
        Hubungi Kami
      </a>
    </div>
  </div>
</div>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
  /* Animation keyframes */
  @keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0); }
  }
  
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-medium { animation: float 6s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  
  /* Aspect ratios */
  .aspect-w-16 {
    position: relative;
    padding-bottom: 56.25%;
  }

  .aspect-h-12 {
    position: relative;
  }
  
  .aspect-w-16 > *, .aspect-h-12 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    object-fit: cover;
  }
  
  .aspect-w-1, .aspect-h-1 {
    position: relative;
    padding-bottom: 100%;
  }
  
  .aspect-w-1 img, .aspect-h-1 img {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    object-fit: cover;
  }
</style>
@endpush

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
});
</script>
@endsection