@extends("layouts.default")
@section("title","Struktur Organisasi SMA Hogwarts")

@section("main")

<!--HERO SECTION WITH ENHANCED DESIGN-->
<div class="relative overflow-hidden">
  <!-- Enhanced gradient overlay with depth effect -->
  <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-800/70 to-blue-600/60 z-10"></div>
  
  <!-- Animated subtle pattern overlay -->
  <div class="absolute inset-0 z-10 opacity-10">
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E')"></div>
  </div>
  
  <!-- Animated floating elements -->
  <div class="absolute inset-0 z-10 overflow-hidden">
    <div class="absolute top-24 left-[15%] w-16 h-16 bg-blue-400/20 rounded-full blur-xl animate-float-slow"></div>
    <div class="absolute top-40 right-[25%] w-24 h-24 bg-indigo-300/20 rounded-full blur-xl animate-float-medium"></div>
    <div class="absolute bottom-20 left-[30%] w-20 h-20 bg-blue-300/20 rounded-full blur-xl animate-float-fast"></div>
  </div>

  <div class="w-full">
    <!-- Background image with blur -->
    <div class="w-full h-[300px] md:h-[350px] lg:h-[400px] bg-cover bg-center backdrop-blur-md" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
  
  <!-- Hero content with enhanced design -->
  <div class="absolute inset-0 z-20 flex flex-col justify-center px-6 sm:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto">
      <!-- Decorative element -->
      <div class="w-20 h-1.5 bg-white mb-6 rounded-full opacity-70"></div>
      
      <!-- Title with gradient effect -->
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wider drop-shadow-lg mb-4 bg-clip-text">
        <span class="block">STRUKTUR ORGANISASI</span>
      </h1>
      
      <p class="text-white/80 text-lg md:text-xl max-w-2xl mb-8">
        Mengenal jajaran kepemimpinan dan pembagian tugas di lingkungan SMA Hogwarts
      </p>
      
      <!-- Optional: Animated scroll indicator -->
      <div class="hidden md:flex items-center gap-2 text-white/70">
        <span class="text-sm font-medium">Lihat Detail</span>
        <div class="animate-bounce">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
          </svg>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Visual organization element indicators -->
  <div class="absolute bottom-0 left-0 right-0 z-20 h-10 bg-gradient-to-r from-blue-800 via-blue-600 to-blue-800 opacity-80">
    <div class="max-w-7xl mx-auto h-full flex items-center justify-between px-6">
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-blue-200 rounded-full"></div>
        <span class="text-white text-xs font-medium">PIMPINAN</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-blue-300 rounded-full"></div>
        <span class="text-white text-xs font-medium">MANAJEMEN</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-blue-400 rounded-full"></div>
        <span class="text-white text-xs font-medium">KOORDINATOR</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
        <span class="text-white text-xs font-medium">PELAKSANA</span>
      </div>
    </div>
  </div>
</div>

<!-- Add these styles to your header or in a style tag -->
<style>
.animate-float-slow {
  animation: float 8s ease-in-out infinite;
}
.animate-float-medium {
  animation: float 6s ease-in-out infinite;
}
.animate-float-fast {
  animation: float 4s ease-in-out infinite;
}

@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0px);
  }
}
</style>

<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900 text-center mb-8">Struktur Organisasi SMA Hogwarts</h1>
  
  <div class="bg-white rounded-lg shadow-lg p-6">
      <!-- Diagram struktur organisasi -->
      <div class="flex flex-col items-center">
      
          <!-- Pemilik Yayasan at the top -->
          <div class="bg-blue-800 text-white rounded-lg p-4 shadow-md w-64 text-center mb-6">
              <h3 class="font-bold">Pemilik Yayasan</h3>
              <p>Prof. Albus Dumbledore</p>
          </div>
          
          <!-- Garis penghubung -->
          <div class="bg-gray-400 h-8 w-0.5"></div>
          
          <!-- Container for CEO and Komite Sekolah -->
          <div class="flex items-center justify-center gap-16 mb-6 relative">
              <!-- CEO (previously Kepala Sekolah) -->
              <div class="bg-blue-700 text-white rounded-lg p-4 shadow-md w-64 text-center">
                  <h3 class="font-bold">CEO</h3>
                  <p>Dr. Budi Santoso, M.Pd.</p>
              </div>
              
              <!-- Dashed connector line to Komite -->
              <div class="absolute top-1/2 left-[calc(50%-2rem)] w-16 border-t-2 border-dashed border-gray-400"></div>
              
              <!-- Komite Sekolah as Penasehat -->
              <div class="bg-blue-600 text-white rounded-lg p-4 shadow-md w-64 text-center">
                  <h3 class="font-bold">Penasehat (Komite Sekolah)</h3>
                  <p>Dr. Minerva McGonagall</p>
              </div>
          </div>
          
          <!-- Garis penghubung from CEO -->
          <div class="bg-gray-400 h-8 w-0.5"></div>
          
          <!-- Wakil Kepala Sekolah Tier - now 4 columns including Tata Usaha -->
          <div class="grid grid-cols-4 gap-4 mb-6">
              <div class="bg-blue-500 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Wakasek Kurikulum</h3>
                  <p>Dra. Siti Aminah, M.Pd.</p>
              </div>
              <div class="bg-blue-500 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Wakasek Kesiswaan</h3>
                  <p>Ahmad Fauzi, S.Pd.</p>
              </div>
              <div class="bg-blue-500 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Wakasek Sarpras</h3>
                  <p>Ir. Hadi Wijaya</p>
              </div>
              <div class="bg-blue-500 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Kepala Tata Usaha</h3>
                  <p>Rina Wulandari, S.E.</p>
              </div>
          </div>
          
          <!-- Garis penghubung -->
          <div class="bg-gray-400 h-8 w-0.5"></div>
          
          <!-- Bidang-Bidang - removed Kepala TU since it's now at same level as Wakasek -->
          <div class="grid grid-cols-3 gap-4 mb-6">
              <div class="bg-blue-400 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Koordinator BK</h3>
                  <p>Drs. Joko Susilo</p>
              </div>
              <div class="bg-blue-400 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Kepala Perpustakaan</h3>
                  <p>Sri Wahyuni, S.Pd.</p>
              </div>
              <div class="bg-blue-400 text-white rounded-lg p-3 shadow-md w-48 text-center">
                  <h3 class="font-bold">Kepala Lab</h3>
                  <p>Dr. Anton Prabowo</p>
              </div>
          </div>
          
          <!-- Garis penghubung -->
          <div class="bg-gray-400 h-8 w-0.5"></div>
          
          <!-- Guru dan Staff -->
          <div class="bg-blue-300 text-gray-800 rounded-lg p-3 shadow-md w-72 text-center mb-6">
              <h3 class="font-bold">Dewan Guru & Staff</h3>
              <p>65 Guru dan 15 Staff</p>
          </div>
          
          <!-- Garis penghubung -->
          <div class="bg-gray-400 h-8 w-0.5"></div>
          
          <!-- Siswa -->
          <div class="bg-blue-200 text-gray-800 rounded-lg p-3 shadow-md w-72 text-center">
              <h3 class="font-bold">Siswa</h3>
              <p>950 Siswa</p>
          </div>
      </div>
  </div>  
</div>

@endsection
