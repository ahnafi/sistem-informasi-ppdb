@extends("layouts.default")

@section('title', 'SMA Hogwarts')

@section('head')
<style>

  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .animate-float {
    animation: float 6s ease-in-out infinite;
  }
  
  .animate-pulse-slow {
    animation: pulse 4s ease-in-out infinite;
  }


  .parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  

  .magic-hover {
    position: relative;
    overflow: hidden;
    transition: all 0.5s;
  }
  
  .magic-hover::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -60%;
    width: 20%;
    height: 200%;
    background: rgba(255, 255, 255, 0.2);
    transform: rotate(30deg);
    transition: all 0.85s;
  }
  
  .magic-hover:hover::after {
    left: 120%;
  }

  /* Scroll reveal animation classes */
  .reveal {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease;
  }
  
  .reveal.active {
    opacity: 1;
    transform: translateY(0);
  }
  
  .reveal-delay-200 {
    transition-delay: 200ms;
  }
  
  .reveal-delay-400 {
    transition-delay: 400ms;
  }
  
  .reveal-delay-600 {
    transition-delay: 600ms;
  }
  
  /* Constellation pattern */
  .constellation-pattern {
    background-image: radial-gradient(circle at center, rgba(255, 255, 255, 0.15) 1px, transparent 1px);
    background-size: 30px 30px;
  }
  
  /* Magical text effect */
  .magical-text {
    background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
  }
  
  /* Additional animations */
  @keyframes twinkle {
    0% { opacity: 0.2; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.3); }
    100% { opacity: 0.2; transform: scale(1); }
  }
  
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-medium { animation: float 6s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
</style>
@endsection

@section('main')
<!-- Hero Section-->
<div class="relative overflow-hidden">
  <!-- Magical atmosphere -->
  <div class="absolute inset-0 bg-gradient-to-br from-indigo-950/95 via-blue-900/85 to-purple-800/80 z-10"></div>
  
  <!-- Constellation pattern overlay -->
  <div class="absolute inset-0 z-10 opacity-20">
    <div class="absolute inset-0 constellation-pattern"></div>
  </div>
  
  <!-- Magical floating elements -->
  <div class="absolute inset-0 z-10 overflow-hidden">
    <div class="absolute top-20 left-[15%] w-20 h-20 bg-blue-400/30 rounded-full blur-xl animate-float-slow"></div>
    <div class="absolute top-36 right-[20%] w-28 h-28 bg-purple-500/20 rounded-full blur-xl animate-float-medium"></div>
    <div class="absolute bottom-24 left-[25%] w-24 h-24 bg-indigo-400/20 rounded-full blur-xl animate-float-fast"></div>
    
    <!-- Small animated stars -->
    <div class="stars-container">
      <div class="star" style="top: 15%; left: 10%; animation-delay: 0.5s;"></div>
      <div class="star" style="top: 25%; left: 85%; animation-delay: 1.2s;"></div>
      <div class="star" style="top: 60%; left: 75%; animation-delay: 0.8s;"></div>
      <div class="star" style="top: 70%; left: 20%; animation-delay: 1.5s;"></div>
      <div class="star" style="top: 40%; left: 50%; animation-delay: 2s;"></div>
      <div class="star" style="top: 80%; left: 35%; animation-delay: 0.3s;"></div>
      <div class="star" style="top: 10%; left: 65%; animation-delay: 1.7s;"></div>
    </div>
    
    <!-- Original floating candles for magical effect -->
    <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-16 h-auto left-[10%] top-[20%] floating-slow opacity-70 z-20">
    <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-12 h-auto left-[30%] top-[15%] floating opacity-60 z-20">
    <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-14 h-auto left-[80%] top-[25%] floating-fast opacity-75 z-20">
    <img src="{{ asset('images/floating-candle.png') }}" alt="" class="absolute w-10 h-auto left-[60%] top-[10%] floating-slow opacity-50 z-20">
  </div>

  <!-- Background Image -->
  <div class="w-full">
    <div class="w-full h-[500px] md:h-[600px] lg:h-[700px] bg-cover bg-center backdrop-blur-sm" 
         style="background-image: url('{{ asset('images/hogwarts-castle-night.jpg') }}');">
    </div>
  </div>
  
  <!-- Hero Content -->
  <div class="absolute inset-0 z-20 flex flex-col justify-center px-6 sm:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto">
      <!-- Magical divider -->
      <div class="w-24 h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400 mb-6 rounded-full animate-pulse"></div>
      
      <!-- Hero content with school logo -->
      <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
        <!-- Logo container -->
        <div class="w-40 h-40 md:w-60 md:h-60 relative mb-8 md:mb-0">
          <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-xl animate-pulse-slow"></div>
          <img src="{{ asset('images/logonobg.png') }}" alt="SMA Hogwarts Logo" class="w-full h-full object-contain relative z-10 drop-shadow-2xl animate-float">
        </div>
      
        <!-- Text content -->
        <div class="max-w-xl">
          <div class="inline-flex items-center bg-blue-900/50 backdrop-blur-sm border border-blue-500/20 rounded-full px-4 py-2 mb-6">
            <span class="inline-block w-2 h-2 rounded-full bg-blue-400 mr-2 animate-pulse"></span>
            <span class="text-blue-200 text-sm font-medium">PPDB 2025 Telah Dibuka</span>
          </div>
          
          <h1 class="magical-text text-4xl md:text-6xl font-bold tracking-wide mb-4">
            SMA HOGWARTS
          </h1>
          
          <p class="text-blue-100 text-lg mb-8">
            Menempa generasi unggul melalui pendidikan berkualitas dalam lingkungan sekolah yang magis dan inspiratif.
          </p>
          
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('registration') }}" class="magic-hover inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-medium rounded-full px-8 py-4 shadow-lg shadow-blue-600/20 transition">
              Pendaftaran PPDB
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
            </a>
            <a href="{{ route('home.profile') }}" class="inline-flex justify-center items-center gap-x-3 text-center border border-white/30 hover:border-white/60 backdrop-blur-sm text-white hover:bg-white/10 font-medium rounded-full px-8 py-4 transition">
              Tentang Kami
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== PROFILE SECTION ========== -->
<section id="about" class="py-20 bg-gradient-to-b from-white via-blue-50/60 to-blue-100/50 relative overflow-hidden">
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute top-16 left-[10%] w-64 h-64 bg-blue-200/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-32 right-[15%] w-72 h-72 bg-blue-300/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-[40%] transform -translate-y-1/2 w-80 h-80 bg-indigo-200/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- Section Title -->
    <div class="text-center mb-16 reveal">
      <div class="inline-block mb-3">
        <img src="{{ asset('images/decorative-line.png') }}" alt="" class="h-8 mx-auto">
      </div>
      <h2 class="text-4xl font-bold text-blue-950 mb-3">Profil Sekolah</h2>
      <p class="text-lg text-blue-800/70 max-w-2xl mx-auto">Mengenal lebih dekat SMA Hogwarts dan keunggulannya</p>
    </div>
    
    <div class="flex flex-col md:flex-row items-stretch gap-12 lg:gap-16">
      <!-- Left: Image carousel  -->
      <div class="md:w-1/2 reveal">
        <div class="relative group">
          <div class="overflow-hidden rounded-2xl shadow-xl">
            <img 
              src="{{ asset('images/home/building.jpg') }}" 
              alt="Hogwarts School Building" 
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            >
          </div>
          
          <!-- Floating badge -->
          <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
            <p class="font-bold text-blue-800">Didirikan Tahun 985 M</p>
          </div>
          
          <!-- Decorative elements -->
          <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-yellow-300/20 blur-xl rounded-full z-[-1] animate-pulse-slow"></div>
        </div>
        
        <!-- Image thumbnails -->
        <div class="grid grid-cols-3 gap-4 mt-6">
          <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
            <img src="{{ asset('images/home/library.jpg') }}" alt="Library" class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500">
          </div>
          <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
            <img src="{{ asset('images/home/classroom.jpg') }}" alt="Classroom" class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500">
          </div>
          <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
            <img src="{{ asset('images/home/garden.jpg') }}" alt="Garden" class="w-full h-24 object-cover hover:scale-110 transition-transform duration-500">
          </div>
        </div>
      </div>
      
      <!-- Right: School profile -->
      <div class="md:w-1/2 flex flex-col justify-center reveal reveal-delay-200">
        
        <h1 class="text-4xl font-bold text-blue-950 mb-6">SMA Hogwarts</h1>
        
        <div class="prose prose-lg prose-blue max-w-none mb-8">
          <p>
            Founded in 985 AD, SMA Hogwarts has stood as one of the world's premier magical educational institutions for over a millennium.
            Our school combines time-honored traditions with innovative teaching methods to provide students with an exceptional educational journey.
          </p>
          
          <p>
            Divided into four historic houses—Gryffindor, Hufflepuff, Ravenclaw, and Slytherin—our community fosters both 
            friendly competition and lasting camaraderie. Our experienced faculty members are committed to nurturing each student's 
            unique talents while instilling core values of integrity, courage, wisdom, and ambition.
          </p>
        </div>
        
        <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 flex items-center mb-8">
          <div class="mr-4 text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-blue-600 font-medium">MOTTO SEKOLAH</p>
            <p class="text-blue-950 italic">"Draco dormiens nunquam titillandus" — Never tickle a sleeping dragon</p>
          </div>
        </div>
        
        <div class="mt-4">
          <a href="{{ route('home.profile') }}" class="inline-flex items-center gap-x-2 text-blue-600 hover:text-blue-800 font-medium group">
            <span>Selengkapnya</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
          </a>
        </div>
      </div>
    </div>
    
    <!-- statistics -->
    <div class="mt-24 reveal reveal-delay-400">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Stat 1: Peserta Didik -->
        <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all border border-blue-100 transform hover:-translate-y-2 duration-300 relative overflow-hidden group">
          <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-gradient-to-br from-blue-100 to-white rounded-full opacity-70 group-hover:scale-150 transition-transform duration-500"></div>
          
          <div class="relative">
            <div class="bg-blue-100 rounded-2xl w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors">
              <svg class="size-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            
            <h3 class="text-5xl font-bold text-blue-950 mb-2 flex items-end">
              555<span class="text-2xl ml-1">+</span>
            </h3>
            <p class="text-blue-800 font-medium">Peserta Didik</p>
            <p class="mt-4 text-gray-600 text-sm">Dari berbagai latar belakang dengan beragam bakat dan minat</p>
          </div>
        </div>
        
        <!-- Stat 2: Guru Tendik -->
        <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all border border-green-100 transform hover:-translate-y-2 duration-300 relative overflow-hidden group">
          <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-gradient-to-br from-green-100 to-white rounded-full opacity-70 group-hover:scale-150 transition-transform duration-500"></div>
          
          <div class="relative">
            <div class="bg-green-100 rounded-2xl w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-green-200 transition-colors">
              <svg class="size-8 text-green-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            
            <h3 class="text-5xl font-bold text-green-950 mb-2 flex items-end">
              40<span class="text-2xl ml-1">+</span>
            </h3>
            <p class="text-green-800 font-medium">Guru Tendik</p>
            <p class="mt-4 text-gray-600 text-sm">Tenaga pendidik profesional dengan dedikasi tinggi</p>
          </div>
        </div>
        
        <!-- Stat 3: Kelas -->
        <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all border border-amber-100 transform hover:-translate-y-2 duration-300 relative overflow-hidden group">
          <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-gradient-to-br from-amber-100 to-white rounded-full opacity-70 group-hover:scale-150 transition-transform duration-500"></div>
          
          <div class="relative">
            <div class="bg-amber-100 rounded-2xl w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-amber-200 transition-colors">
              <svg class="size-8 text-amber-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
              </svg>
            </div>
            
            <h3 class="text-5xl font-bold text-amber-950 mb-2 flex items-end">
              25<span class="text-2xl ml-1">+</span>
            </h3>
            <p class="text-amber-800 font-medium">Kelas</p>
            <p class="mt-4 text-gray-600 text-sm">Ruang belajar nyaman dengan fasilitas modern</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- PPDB Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 relative z-10 reveal">
      <div class="rounded-3xl overflow-hidden shadow-2xl relative">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/ppdb-magic-bg.jpg') }}');"></div>
          
          <div class="absolute inset-0 bg-gradient-to-br from-blue-900/95 via-blue-800/90 to-indigo-900/80"></div>
          
          <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-white rounded-full animate-pulse-slow"></div>
            <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 bg-white rounded-full animate-pulse-slow" style="animation-delay: -1s;"></div>
            <div class="absolute bottom-1/4 left-2/3 w-1 h-1 bg-white rounded-full animate-pulse-slow" style="animation-delay: -2s;"></div>
            <div class="absolute top-2/3 right-1/5 w-2 h-2 bg-white rounded-full animate-pulse-slow" style="animation-delay: -1.5s;"></div>
          </div>
        </div>
        
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 p-8 lg:p-12">
          <!-- Left content -->
          <div class="flex flex-col justify-center">
            <div class="inline-flex items-center bg-blue-600/60 backdrop-blur-sm rounded-full px-4 py-1.5 w-fit mb-6">
              <div class="w-2 h-2 bg-blue-300 rounded-full animate-pulse mr-2"></div>
              <span class="text-blue-100 text-sm font-medium">PPDB 2025</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
              <span class="block">Pendaftaran</span>
              <span class="text-blue-300">Telah Dibuka!</span>
            </h2>
            
            <p class="text-blue-100 text-lg mb-8 max-w-md">
              Segera daftarkan diri Anda untuk menjadi bagian dari keluarga besar SMA Hogwarts. 
              Bergabunglah dengan institusi pendidikan magis dan raih masa depan cemerlang!
            </p>
            
            <div class="space-y-4 mb-8">
              <div class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-400/30 flex items-center justify-center mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div class="ml-3">
                  <h4 class="text-white font-medium">Proses Seleksi Modern</h4>
                  <p class="text-blue-200/90 text-sm">Menggunakan sistem 'Magical Sorting Hat' digital</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-400/30 flex items-center justify-center mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div class="ml-3">
                  <h4 class="text-white font-medium">Program Beasiswa</h4>
                  <p class="text-blue-200/90 text-sm">Tersedia untuk 100 siswa berprestasi</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-400/30 flex items-center justify-center mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div class="ml-3">
                  <h4 class="text-white font-medium">Fasilitas Unggulan</h4>
                  <p class="text-blue-200/90 text-sm">Akses ke pembelajaran dan asrama modern</p>
                </div>
              </div>
            </div>
            
            <div class="flex flex-wrap gap-4">
              <a href="{{ route('registration.form') }}" class="magic-hover inline-flex justify-center items-center gap-x-2 text-center bg-white hover:bg-blue-50 text-blue-800 font-semibold rounded-full px-6 py-3.5 shadow-lg shadow-blue-500/20 transition">
                Daftar Sekarang
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
              </a>
              <a href="{{ route('registration') }}" class="inline-flex justify-center items-center gap-x-2 text-center border border-white/30 hover:border-white/60 text-white hover:bg-white/10 font-medium rounded-full px-6 py-3.5 transition">
                Mekanisme Pendaftaran
              </a>
            </div>
          </div>
          
          <!-- Right image -->
          <div class="hidden lg:flex items-center justify-center">
            <div class="relative">
              <div class="absolute inset-0 bg-blue-400/10 backdrop-blur-md rounded-full animate-pulse-slow"></div>
              
              <img src="{{ asset('images/home/children.jpg') }}" alt="Magical Sorting Hat" class="relative z-10 w-96 drop-shadow-2xl animate-float">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== END PROFILE SECTION ========== -->

  <!-- ========== PRESTASI SECTION ========== -->
  <section class="py-24 bg-gradient-to-b from-blue-50 via-white to-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl opacity-70"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-indigo-100/30 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <!-- Section header -->
      <div class="text-center mb-16 reveal">
        <div class="inline-block mb-3">
          <img src="{{ asset('images/decorative-line-2.png') }}" alt="" class="h-8 mx-auto">
        </div>
        <h2 class="text-4xl font-bold text-blue-950 mb-3">Prestasi Spektakuler</h2>
        <p class="text-lg text-blue-800/70 max-w-2xl mx-auto">Pencapaian luar biasa dari para siswa dan siswi SMA Hogwarts</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Achievement Card 1 -->
        <div class="relative group reveal reveal-delay-200">
          <!-- Card background with hover effect -->
          <div class="h-full bg-gradient-to-br from-white to-blue-50 rounded-3xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:translate-y-[-8px]">
            <!-- Image with overlay -->
            <div class="relative h-64 overflow-hidden">
              <img 
                src="{{ asset('images/home/osn.jpg') }}" 
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" 
                alt="Academic Competition"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-blue-950/80 via-blue-900/40 to-transparent opacity-90"></div>
              
              <!-- Trophy icon -->
              <div class="absolute top-4 left-4 bg-amber-500/90 backdrop-blur-sm w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
              </div>
              
              <!-- Badge -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-md">
                <p class="text-xs font-semibold text-blue-800">Nasional</p>
              </div>
              
              <!-- Bottom content -->
              <div class="absolute bottom-0 left-0 w-full p-6">
                <h3 class="font-bold text-2xl text-white mb-1">Juara Olimpiade Sains</h3>
                <p class="text-blue-100">Medali Emas dalam OSN Fisika & Matematika</p>
              </div>
            </div>
            
            <!-- Content -->
            <div class="p-6">
              <div class="flex items-center gap-2 mb-4">
                <span class="text-amber-600 font-semibold">1 Medali Emas</span>
              </div>
              
              <p class="text-gray-600 mb-6">
                Para siswa berhasil memenangkan kompetisi sains nasional, mengungguli 234 sekolah dari seluruh Indonesia dengan prestasi cemerlang.
              </p>
              
              <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center group">
                <span>Lihat Detail</span>
                <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          
          <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-blue-200/30 rounded-full blur-xl -z-10"></div>
        </div>
        
        <!-- Achievement Card 2 -->
        <div class="relative group reveal reveal-delay-400">
          <div class="h-full bg-gradient-to-br from-white to-indigo-50 rounded-3xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:translate-y-[-8px]">
            <!-- Image with overlay -->
            <div class="relative h-64 overflow-hidden">
              <img 
                src="{{ asset('images/home/robotic.jpg') }}" 
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" 
                alt="Robotics Competition"
              >
              <!-- Gradient overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-indigo-950/80 via-indigo-900/40 to-transparent opacity-90"></div>
              
              <!-- Trophy icon -->
              <div class="absolute top-4 left-4 bg-indigo-500/90 backdrop-blur-sm w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>
              </div>
              
              <!-- Badge -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-md">
                <p class="text-xs font-semibold text-indigo-800">Internasional</p>
              </div>
              
              <!-- Bottom content -->
              <div class="absolute bottom-0 left-0 w-full p-6">
                <h3 class="font-bold text-2xl text-white mb-1">Kompetisi Robotik</h3>
                <p class="text-indigo-100">Juara 1 Kompetisi Robotik Internasional</p>
              </div>
            </div>
            
            <!-- Content -->
            <div class="p-6">
              <div class="flex items-center gap-2 mb-4">
                
                <span class="text-indigo-600 font-semibold">Best Innovation Award</span>
              </div>
              
              <p class="text-gray-600 mb-6">
                Tim robotik sekolah menciptakan robot otonom dengan kemampuan artifisial yang memenangkan kompetisi di Jepang.
              </p>
              
              <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center group">
                <span>Lihat Detail</span>
                <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          
          <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-indigo-200/30 rounded-full blur-xl -z-10"></div>
        </div>
        
        <!-- Achievement Card 3 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 group reveal reveal-delay-600">
          <div class="relative h-64">
            <img 
              src="{{ asset('images/home/field.jpg') }}" 
              alt="School Activity" 
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
              <div class="absolute inset-0 opacity-30">
                <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-yellow-300 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-1/3 right-1/3 w-1.5 h-1.5 bg-yellow-200 rounded-full animate-pulse-slow" style="animation-delay: -0.5s;"></div>
                <div class="absolute bottom-1/4 left-1/2 w-1 h-1 bg-yellow-400 rounded-full animate-pulse-slow" style="animation-delay: -1s;"></div>
              </div>
            </div>
            
            <div class="absolute bottom-0 left-0 p-6 w-full">
              <div class="inline-block px-3 py-1 bg-yellow-600 text-white text-xs font-medium rounded-lg shadow-md mb-2 backdrop-blur-sm">
                <span class="inline-flex items-center">
                  <span class="w-1.5 h-1.5 bg-yellow-300 rounded-full mr-1.5 animate-pulse"></span>
                  Kegiatan
                </span>
              </div>
              <h3 class="text-white text-xl font-bold mb-1">Studi Lapangan Biologi</h3>
              <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-yellow-100 text-sm">5 April 2025</p>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 line-clamp-3">
              Siswa kelas X melakukan studi lapangan biologi di Hutan Terlarang untuk mengobservasi spesies langka 
              dan mengumpulkan spesimen untuk penelitian laboratoirum herbologi.
            </p>
            <a href="{{ route('article') }}" class="inline-flex items-center text-yellow-600 hover:text-yellow-800 font-medium text-sm group">
              <span>Baca Selengkapnya</span>
              <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- View All button -->
      <div class="text-center mt-12 reveal">
        <a href="{{ route('article') }}" class="magic-hover group relative inline-flex justify-center items-center px-8 py-4 overflow-hidden rounded-full bg-gradient-to-br from-blue-500 to-blue-600 text-white font-medium shadow-lg transition-all duration-300 hover:shadow-blue-400/30 hover:scale-105">
          <div class="absolute inset-0 w-full h-full">
            <div class="absolute top-0 left-1/4 w-1 h-1 bg-white rounded-full animate-ping" style="animation-duration: 3s;"></div>
            <div class="absolute bottom-0 right-1/4 w-1 h-1 bg-white rounded-full animate-ping" style="animation-duration: 2.5s; animation-delay: -1s;"></div>
          </div>
          
          <span class="relative z-10 flex items-center">
            <span>Lihat Semua Artikel</span>
            <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </span>
          
          <span class="absolute inset-0 rounded-full overflow-hidden">
            <span class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-400/20 to-indigo-400/20 animate-pulse-slow"></span>
          </span>
        </a>
      </div>
    </div>
  </section>
  <!-- ========== END BERITA SECTION ========== -->

  <style>

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
    

    .floating {
      animation: float 6s ease-in-out infinite;
    }
    .floating-slow {
      animation: float 8s ease-in-out infinite;
    }
    .floating-fast {
      animation: float 4s ease-in-out infinite;
    }
  </style>
@endsection