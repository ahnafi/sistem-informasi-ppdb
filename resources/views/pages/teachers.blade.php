@extends("layouts.default")
@section("title","Tenaga Pendidik SMA Hogwarts")

@section("main")
<!-- Custom styles for animations and effects -->
<style>
  .hover-scale-image {
    overflow: hidden;
  }
  
  .hover-scale-image img {
    transition: transform 0.8s ease;
  }
  
  .hover-scale-image:hover img {
    transform: scale(1.05);
  }
  
  .teacher-card {
    transition: all 0.3s ease;
  }
  
  .teacher-card:hover {
    transform: translateY(-8px);
  }
  
  .department-tag {
    position: absolute;
    top: 1rem;
    right: 1rem;
    z-index: 10;
    padding: 0.25rem 0.75rem;
    border-radius: 0.5rem;
    font-size: 0.75rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  .filter-active {
    background-color: #1e40af;
    color: white;
  }
  
  .reveal-animation {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease-in-out;
  }
  
  .reveal-animation.active {
    opacity: 1;
    transform: translateY(0);
  }
  
  .stagger-item {
    opacity: 0;
    transform: translateY(20px);
  }
  
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
    100% { transform: translateY(0px); }
  }
  
  .float-animation {
    animation: float 6s ease-in-out infinite;
  }
</style>

<!--HERO SECTION-->
<div class="relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-800/80 to-blue-600/60 z-10"></div>
  
  <!-- Animated pattern overlay -->
  <div class="absolute inset-0 z-10 opacity-10">
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
  </div>
  
  <!-- Floating elements -->
  <div class="absolute inset-0 z-10 overflow-hidden">
    <div class="absolute top-24 left-[15%] w-16 h-16 bg-blue-400/20 rounded-full blur-xl float-animation"></div>
    <div class="absolute top-40 right-[25%] w-20 h-20 bg-indigo-300/20 rounded-full blur-xl" style="animation: float 8s ease-in-out infinite;"></div>
    <div class="absolute bottom-20 left-[30%] w-16 h-16 bg-blue-300/20 rounded-full blur-xl" style="animation: float 5s ease-in-out infinite;"></div>
  </div>
  
  <div class="w-full">
    <!-- Background image -->
    <div class="w-full h-[300px] md:h-[400px] bg-cover bg-center backdrop-blur-sm" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
  
  <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto">
      <div class="w-20 h-1.5 bg-white mb-6 rounded-full opacity-70"></div>
      
      <!-- Title with -->
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wider drop-shadow-lg mb-4">
        <span class="block">TENAGA PENDIDIK</span>
      </h1>
      
      <!-- Search bar -->
      <div class="max-w-lg mt-6">
        <div class="relative">
          <input type="text" id="teacherSearch" placeholder="Cari guru atau mata pelajaran..." 
                 class="w-full bg-white/20 backdrop-blur-md border border-white/30 rounded-full py-3 px-6 pl-12 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50">
          <div class="absolute left-4 top-3.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DEPARTMENT QUICK NAVIGATION -->
<div class="bg-gray-100 py-6 border-b border-gray-200 sticky top-[88px] z-20">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between">
      <h2 class="text-lg font-bold text-gray-800">Departemen Guru</h2>
      <div class="overflow-x-auto pb-2">
        <div class="flex gap-2">
          <button data-filter="all" class="filter-btn filter-active whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Semua
          </button>
          <button data-filter="bahasa" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Bahasa
          </button>
          <button data-filter="agama" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Pendidikan Agama
          </button>
          <button data-filter="sosial" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Ilmu Sosial & Ekonomi
          </button>
          <button data-filter="matematika" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Matematika
          </button>
          <button data-filter="ipa" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            IPA
          </button>
          <button data-filter="seni" class="filter-btn whitespace-nowrap px-4 py-2 rounded-full bg-gray-200 text-sm font-medium transition-all">
            Seni & Olahraga
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAFTAR GURU CONTENT -->
<div class="container max-w-7xl mx-auto px-4 py-12">
  

  <!-- TEACHER GRID -->
  <div id="teacherGrid">
    <!-- BAHASA SECTION -->
    <div class="mb-16 reveal-animation" data-department="bahasa">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-blue-800">BAHASA</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Bahasa Indonesia -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="bahasa indonesia">
          <div class="department-tag bg-blue-500">Bahasa</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach8.jpg') }}" alt="Ahmad Suherman" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Ahmad Suherman</h3>
            <p class="text-blue-600 font-medium mb-3">Bahasa Indonesia</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>8 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Ahli dalam sastra Indonesia dan teknik menulis kreatif. Fokus pada pengembangan kemampuan literasi siswa.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Bahasa Inggris -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="bahasa inggris english">
          <div class="department-tag bg-blue-500">Bahasa</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach4.jpg') }}" alt="Sarah Johnson" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Sarah Johnson</h3>
            <p class="text-blue-600 font-medium mb-3">Bahasa Inggris</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>12 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Penutur asli dari Inggris dengan spesialisasi pengajaran untuk persiapan TOEFL dan IELTS. Cambridge certified teacher.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Bahasa Latin -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="bahasa latin klasik">
          <div class="department-tag bg-blue-500">Bahasa</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach3.jpg') }}" alt="Marcus Aurelius" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Marcus Aurelius</h3>
            <p class="text-blue-600 font-medium mb-3">Bahasa Latin</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>15 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor filsafat dan ahli bahasa klasik. Mengajar pendekatan linguistik dan filosofis bahasa Latin dan pengaruhnya.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- PENDIDIKAN AGAMA SECTION -->
    <div class="mb-16 reveal-animation" data-department="agama">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-green-800">PENDIDIKAN AGAMA</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- PAI -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="agama islam religious">
          <div class="department-tag bg-green-500">Agama</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach1.jpg') }}" alt="Haji Abdullah" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">H. Abdullah</h3>
            <p class="text-green-600 font-medium mb-3">Pendidikan Agama Islam</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>20 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Alumnus Al-Azhar University, Kairo dengan fokus pada pengembangan nilai moral dan karakter dalam pendidikan keagamaan.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- PAK -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="agama kristen christian religious">
          <div class="department-tag bg-green-500">Agama</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach8.jpg') }}" alt="Pendeta Samuel" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Pdt. Samuel Siahaan</h3>
            <p class="text-green-600 font-medium mb-3">Pendidikan Agama Kristen</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>18 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Sarjana Teologi dari STT Jakarta dengan pengalaman pastoral. Mengajarkan nilai-nilai Kristiani dan etika kehidupan.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- PAH -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="agama hindu religious">
          <div class="department-tag bg-green-500">Agama</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach8.jpg') }}" alt="Ida Bagus Putu" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Ida Bagus Putu Wirawan</h3>
            <p class="text-green-600 font-medium mb-3">Pendidikan Agama Hindu</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>15 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Magister Pendidikan Agama Hindu dari IHDN Denpasar. Mengajarkan filosofi Hindu, karma yoga, dan nilai-nilai dharma.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- PAB -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="agama buddha buddhist religious">
          <div class="department-tag bg-green-500">Agama</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach4.jpg') }}" alt="Bhante Dhammiko" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Bhante Dhammiko</h3>
            <p class="text-green-600 font-medium mb-3">Pendidikan Agama Buddha</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>12 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Sarjana Buddhis Studies dari Universitas Nalanda. Mengajarkan ajaran Buddha, meditasi, dan welas asih dalam kehidupan.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- PAK Katolik -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="agama katolik catholic religious">
          <div class="department-tag bg-green-500">Agama</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach2.jpg') }}" alt="Pastor Andreas" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Romo Andreas Hartono</h3>
            <p class="text-green-600 font-medium mb-3">Pendidikan Agama Katolik</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>16 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Magister Teologi Katolik dari Universitas Sanata Dharma. Mengajarkan doktrin Katolik, moral, dan pelayanan sosial.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-green-600 font-medium flex items-center text-sm hover:text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ILMU SOSIAL & KEWARGANEGARAAN SECTION -->
    <div class="mb-16 reveal-animation" data-department="sosial">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-purple-800">ILMU SOSIAL & KEWARGANEGARAAN</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- PPKN -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="ppkn kewarganegaraan">
          <div class="department-tag bg-purple-500">Ilmu Sosial</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach10.jpg') }}" alt="Kartini Wijaya" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Kartini Wijaya</h3>
            <p class="text-purple-600 font-medium mb-3">PPKN</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>14 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Magister Hukum Tata Negara dengan fokus pada isu-isu kewarganegaraan kontemporer dan pendidikan karakter.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Sejarah -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="sejarah history">
          <div class="department-tag bg-purple-500">Ilmu Sosial</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach9.jpg') }}" alt="Sutomo Hadiwibowo" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Sutomo Hadiwibowo</h3>
            <p class="text-purple-600 font-medium mb-3">Sejarah</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>18 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Ilmu Sejarah dengan keahlian khusus sejarah Indonesia dan Asia Tenggara. Penulis beberapa buku teks sejarah.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        <!-- Geografi -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="geografi geography lingkungan">
          <div class="department-tag bg-purple-500">Ilmu Sosial</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach5.jpg') }}" alt="Dr. Ratna Sari" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Ratna Sari</h3>
            <p class="text-purple-600 font-medium mb-3">Geografi</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>16 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Geografi Lingkungan dari UGM dengan keahlian sistem informasi geografis (SIG) dan klimatologi. Aktif dalam penelitian perubahan iklim dan konservasi lingkungan.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-purple-600 font-medium flex items-center text-sm hover:text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MATEMATIKA SECTION -->
    <div class="mb-16 reveal-animation" data-department="matematika">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-red-800">MATEMATIKA</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Aljabar -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="matematika aljabar">
          <div class="department-tag bg-red-500">Matematika</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach6.jpg') }}" alt="Dr. Siti Nurhaliza" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Siti Nurhaliza</h3>
            <p class="text-red-600 font-medium mb-3">Aljabar</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>12 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Matematika dari ITB dengan spesialisasi aljabar linear dan abstrak. Ahli dalam mengajarkan konsep matematika kompleks dengan metode yang mudah dipahami.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Calculus -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="matematika calculus kalkulus">
          <div class="department-tag bg-red-500">Matematika</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach7.jpg') }}" alt="Prof. Bambang Sutrisno" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Prof. Bambang Sutrisno</h3>
            <p class="text-red-600 font-medium mb-3">Calculus</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>20 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Profesor Matematika dengan keahlian khusus dalam kalkulus diferensial dan integral. Penulis buku ajar kalkulus untuk sekolah menengah atas.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        <!-- Probabilitas -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="matematika probabilitas statistika">
          <div class="department-tag bg-red-500">Matematika</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach6.jpg') }}" alt="Dr. Rini Kartika" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Rini Kartika</h3>
            <p class="text-red-600 font-medium mb-3">Probabilitas & Statistika</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>15 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Statistika dengan spesialisasi probabilitas dan analisis data. Berpengalaman dalam mengajar konsep statistika untuk persiapan ujian nasional.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-red-600 font-medium flex items-center text-sm hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- IPA SECTION -->
    <div class="mb-16 reveal-animation" data-department="ipa">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-cyan-800">Ilmu Pengetahuan Alam</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Fisika -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="fisika physics ipa sains">
          <div class="department-tag bg-cyan-500">Ilmu Pengetahuan Alam</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach9.jpg') }}" alt="Dr. Budi Santoso" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Budi Santoso</h3>
            <p class="text-cyan-600 font-medium mb-3">Fisika</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>16 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Fisika dari UI dengan spesialisasi fisika modern dan mekanika kuantum. Berpengalaman mengajar olimpiade fisika tingkat nasional.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Kimia -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="kimia chemistry ipa sains">
          <div class="department-tag bg-cyan-500">Ilmu Pengetahuan Alam</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach9.jpg') }}" alt="Prof. Dr. Maya Sari" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Prof. Dr. Maya Sari</h3>
            <p class="text-cyan-600 font-medium mb-3">Kimia</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>22 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Profesor Kimia Organik dari ITB dengan penelitian di bidang biokimia. Aktif dalam pembinaan siswa untuk kompetisi sains nasional dan internasional.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        <!-- Biologi -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="biologi biology ipa sains">
          <div class="department-tag bg-cyan-500">Ilmu Pengetahuan Alam</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach7.jpg') }}" alt="Dr. Andi Pratama" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Andi Pratama</h3>
            <p class="text-cyan-600 font-medium mb-3">Biologi</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>19 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Doktor Biologi Molekuler dari UGM dengan keahlian dalam genetika dan mikrobiologi. Peraih penghargaan guru berprestasi tingkat provinsi.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-cyan-600 font-medium flex items-center text-sm hover:text-cyan-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SENI SECTION -->
    <div class="mb-16 reveal-animation" data-department="seni">
      <div class="flex items-center mb-8 pb-3 border-b border-blue-200">
        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h2 class="text-3xl font-bold text-yellow-800">Seni & Olahraga</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Prakarya -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="prakarya seni kerajinan crafts">
          <div class="department-tag bg-yellow-500">Seni</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach10.jpg') }}" alt="Dewi Kusuma" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Dewi Kusuma</h3>
            <p class="text-yellow-600 font-medium mb-3">Prakarya</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>11 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Sarjana Seni Rupa dengan keahlian dalam kerajinan tangan, desain produk, dan wirausaha kreatif. Mengajar teknik pembuatan kerajinan dari berbagai bahan.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        
        <!-- Pertunjukan -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="seni pertunjukan teater musik drama">
          <div class="department-tag bg-yellow-500">Seni</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach2.jpg') }}" alt="Rizky Permana" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Rizky Permana</h3>
            <p class="text-yellow-600 font-medium mb-3">Seni Pertunjukan</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>13 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Magister Seni Pertunjukan dengan spesialisasi teater dan musik tradisional. Aktif sebagai sutradara dan pelatih paduan suara sekolah.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
        <!-- Olahraga -->
        <div class="teacher-card relative bg-white rounded-xl overflow-hidden shadow-lg stagger-item" data-tags="olahraga penjaskes sports">
          <div class="department-tag bg-yellow-500">Olahraga</div>
          <div class="hover-scale-image aspect-[4/5]">
            <img src="{{ asset('images/teacher/teach3.jpg') }}" alt="Coach Bayu Saputra" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-1">Coach Bayu Saputra</h3>
            <p class="text-yellow-600 font-medium mb-3">Pendidikan Jasmani</p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>17 tahun pengalaman</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Sarjana Pendidikan Olahraga dengan sertifikat pelatih nasional. Mantan atlet bola voli profesional dan pelatih tim sekolah berprestasi.</p>
            <div class="flex justify-between pt-2 border-t border-gray-100">
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </button>
              <button class="text-yellow-600 font-medium flex items-center text-sm hover:text-yellow-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Profil
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial section -->
  <section class="bg-gradient-to-r from-blue-900 to-blue-800 py-16">
    <div class="container max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white mb-2">Kata Kepala Sekolah</h2>
        <p class="text-blue-100">Tentang tim pengajar kita</p>
      </div>
      
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 md:p-10">
        <div class="flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/4">
            <div class="relative">
              <div class="absolute inset-0 border-4 border-blue-400/30 rounded-full transform rotate-6"></div>
              <img 
                src="{{ asset('images/home/Mourinho.png') }}" 
                alt="Kepala Sekolah" 
                class="relative z-10 rounded-full w-48 h-48 object-cover border-4 border-white/20"
              >
            </div>
          </div>
          <div class="md:w-3/4">
            <svg class="h-12 w-12 text-blue-300/50 mb-6" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
              <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
            </svg>
            <p class="text-xl font-light text-white mb-6">
              "Tim pengajar di SMA Hogwarts adalah para profesional yang berdedikasi tinggi pada pendidikan. Mereka tidak hanya mengajar, 
              tetapi juga menginspirasi siswa untuk mencapai potensi terbaik mereka. Dengan beragam keahlian dan pengalaman, mereka 
              menciptakan lingkungan belajar yang mendukung perkembangan akademis dan karakter siswa."
            </p>
            <div>
              <h4 class="text-lg font-bold text-white">Prof. Dr. Albus Dumbledore</h4>
              <p class="text-blue-200">Kepala Sekolah SMA Hogwarts</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JOIN OUR TEAM SECTION -->
  <section class="py-16 bg-gray-50">
    <div class="container max-w-6xl mx-auto px-4">
      <div class="flex flex-col md:flex-row gap-10 items-center">
        <div class="md:w-1/2">
          <h2 class="text-3xl font-bold text-blue-900 mb-4">Bergabung dengan Tim Pengajar Kami</h2>
          <p class="text-gray-600 mb-6">
            SMA Hogwarts selalu mencari pendidik berbakat dan berdedikasi untuk bergabung dengan komunitas kami. 
            Kami menawarkan lingkungan kerja yang mendukung, pengembangan profesional berkelanjutan, dan 
            kesempatan untuk membuat perbedaan nyata dalam kehidupan siswa.
          </p>
          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-3">
              <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-900">Pengembangan Profesional</h4>
                <p class="text-sm text-gray-600">Program pelatihan dan workshop berkelanjutan</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-900">Fasilitas Modern</h4>
                <p class="text-sm text-gray-600">Akses ke teknologi pendidikan terkini</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-900">Kolaborasi Tim</h4>
                <p class="text-sm text-gray-600">Komunitas guru yang saling mendukung</p>
              </div>
            </div>
          </div>
          <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg transition">
            Lihat Lowongan
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
        
        <div class="md:w-1/2">
          <div class="grid grid-cols-2 gap-4">
            <div class="aspect-square rounded-lg overflow-hidden">
              <img src="{{ asset('images/teacher/collab1.jpg') }}" alt="Collaboration" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square rounded-lg overflow-hidden translate-y-6">
              <img src="{{ asset('images/teacher/collab2.jpg') }}" alt="Teaching" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square rounded-lg overflow-hidden -translate-y-6">
              <img src="{{ asset('images/teacher/collab3.jpg') }}" alt="Workshop" class="w-full h-full object-cover">
            </div>
            <div class="aspect-square rounded-lg overflow-hidden">
              <img src="{{ asset('images/teacher/collab1.jpg') }}" alt="Research" class="w-full h-full object-cover">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
document.addEventListener('DOMContentLoaded', function() {
  // Reveal animations on scroll
  const revealElements = document.querySelectorAll('.reveal-animation');
  const staggerItems = document.querySelectorAll('.stagger-item');
  
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        
        // If this is a parent that contains stagger items
        if (entry.target.querySelectorAll('.stagger-item').length > 0) {
          const staggerItems = entry.target.querySelectorAll('.stagger-item');
          staggerItems.forEach((item, index) => {
            setTimeout(() => {
              item.style.transition = 'all 0.6s ease-out';
              item.style.opacity = '1';
              item.style.transform = 'translateY(0)';
            }, 100 * index);
          });
        }
        
        revealObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });
  
  revealElements.forEach(el => {
    revealObserver.observe(el);
  });
  
  // Department filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const teacherDepartments = document.querySelectorAll('[data-department]');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('filter-active'));
      
      // Add active class to clicked button
      button.classList.add('filter-active');
      
      const filter = button.getAttribute('data-filter');
      
      if (filter === 'all') {
        teacherDepartments.forEach(dept => {
          dept.style.display = 'block';
        });
      } else {
        teacherDepartments.forEach(dept => {
          if (dept.getAttribute('data-department') === filter) {
            dept.style.display = 'block';
          } else {
            dept.style.display = 'none';
          }
        });
      }
    });
  });
  
  // Search functionality
  const searchInput = document.getElementById('teacherSearch');
  const teacherCards = document.querySelectorAll('.teacher-card');
  
  searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase().trim();
    
    teacherCards.forEach(card => {
      const tags = card.getAttribute('data-tags').toLowerCase();
      const teacherName = card.querySelector('h3').textContent.toLowerCase();
      const subject = card.querySelector('p.text-blue-600, p.text-green-600, p.text-purple-600').textContent.toLowerCase();
      
      if (tags.includes(searchTerm) || teacherName.includes(searchTerm) || subject.includes(searchTerm)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
</script>
@endsection
