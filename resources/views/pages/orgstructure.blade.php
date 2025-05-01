@extends("layouts.default")
@section("title","Selamat datang")

@section("main")

 <!--HERO SECTION-->
<div class="relative overflow-hidden">
  <!-- Enhanced gradient overlay with more pronounced blue tones -->
  <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-800/80 to-blue-600/60 z-10"></div>
  
  <div class="w-full">
    <!-- Added more blur for enhanced effect -->
    <div class="w-full h-[400px] md:h-[500px] lg:h-[600px] bg-cover bg-center backdrop-blur-md" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
  
  <!-- Profile Sekolah Title -->
  <div class="absolute inset-0 z-20 flex items-center">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wider drop-shadow-lg ml-8 md:ml-16 lg:ml-24">STRUKTUR ORGANISASI</h1>
  </div>
</div>


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
