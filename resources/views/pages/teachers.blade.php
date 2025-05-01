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
  
  <!-- DAFTAR GURU Title -->
  <div class="absolute inset-0 z-20 flex items-center">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wider drop-shadow-lg ml-8 md:ml-16 lg:ml-24">DAFTAR GURU</h1>
  </div>
</div>

<!-- DAFTAR GURU CONTENT -->
<div class="container max-w-7xl mx-auto px-4 py-10">
  
  <!-- BAHASA SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">BAHASA</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Bahasa Indonesia -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/bahasa-indonesia.jpg') }}" alt="Guru Bahasa Indonesia" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Ahmad Suherman</h3>
                  <p class="text-sm text-gray-600">Bahasa Indonesia</p>
              </div>
          </div>
          
          <!-- Bahasa Inggris -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/bahasa-inggris.jpg') }}" alt="Guru Bahasa Inggris" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Sarah Johnson</h3>
                  <p class="text-sm text-gray-600">Bahasa Inggris</p>
              </div>
          </div>
          
          <!-- Bahasa Latin -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/bahasa-latin.jpg') }}" alt="Guru Bahasa Latin" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Marcus Aurelius</h3>
                  <p class="text-sm text-gray-600">Bahasa Latin</p>
              </div>
          </div>
      </div>
  </div>
  
  <!-- PENDIDIKAN AGAMA SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">PENDIDIKAN AGAMA</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/agama.jpg') }}" alt="Guru Pendidikan Agama" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Haji Abdullah</h3>
                  <p class="text-sm text-gray-600">Pendidikan Agama</p>
              </div>
          </div>
      </div>
  </div>
  
  <!-- ILMU SOSIAL SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">ILMU SOSIAL & KEWARGANEGARAAN</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- PPKN -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/ppkn.jpg') }}" alt="Guru PPKN" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Kartini Wijaya</h3>
                  <p class="text-sm text-gray-600">PPKN</p>
              </div>
          </div>
          
          <!-- Sejarah -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/sejarah.jpg') }}" alt="Guru Sejarah" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Sutomo Hadiwibowo</h3>
                  <p class="text-sm text-gray-600">Sejarah</p>
              </div>
          </div>
          
          <!-- Penjasorkes -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/penjasorkes.jpg') }}" alt="Guru Penjasorkes" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Budi Santoso</h3>
                  <p class="text-sm text-gray-600">Penjasorkes</p>
              </div>
          </div>
          
          <!-- Prakarya dan Kewirausahaan -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/prakarya.jpg') }}" alt="Guru Prakarya" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Dewi Pratama</h3>
                  <p class="text-sm text-gray-600">Prakarya dan Kewirausahaan</p>
              </div>
          </div>
          
          <!-- Seni Budaya dan Keterampilan -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/seni.jpg') }}" alt="Guru Seni" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Ratna Sari</h3>
                  <p class="text-sm text-gray-600">Seni Budaya dan Keterampilan</p>
              </div>
          </div>
      </div>
  </div>
  
  <!-- MATEMATIKA SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">MATEMATIKA</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/matematika.jpg') }}" alt="Guru Matematika" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Dr. Adi Nugroho</h3>
                  <p class="text-sm text-gray-600">Matematika</p>
              </div>
          </div>
      </div>
  </div>
  
  <!-- ILMU PENGETAHUAN ALAM SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">ILMU PENGETAHUAN ALAM</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Biologi -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/biologi.jpg') }}" alt="Guru Biologi" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Dr. Siti Nurhayati</h3>
                  <p class="text-sm text-gray-600">Biologi</p>
              </div>
          </div>
          
          <!-- Fisika -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/fisika.jpg') }}" alt="Guru Fisika" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Prof. Hendra Wijaya</h3>
                  <p class="text-sm text-gray-600">Fisika</p>
              </div>
          </div>
          
          <!-- Kimia -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/kimia.jpg') }}" alt="Guru Kimia" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Dr. Lina Susanti</h3>
                  <p class="text-sm text-gray-600">Kimia</p>
              </div>
          </div>
      </div>
  </div>
  
  <!-- ILMU SOSIAL DAN EKONOMI SECTION -->
  <div class="mb-12">
      <h2 class="text-2xl font-bold text-blue-800 mb-6 pb-2 border-b-2 border-blue-200">ILMU SOSIAL DAN EKONOMI</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Ekonomi -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/ekonomi.jpg') }}" alt="Guru Ekonomi" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Eko Prabowo</h3>
                  <p class="text-sm text-gray-600">Ekonomi</p>
              </div>
          </div>
          
          <!-- Sosiologi -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/sosiologi.jpg') }}" alt="Guru Sosiologi" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Ibu Maya Indrawati</h3>
                  <p class="text-sm text-gray-600">Sosiologi</p>
              </div>
          </div>
          
          <!-- Geografi -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
              <div class="aspect-square overflow-hidden">
                  <img src="{{ asset('images/teachers/geografi.jpg') }}" alt="Guru Geografi" class="w-full h-full object-cover">
              </div>
              <div class="p-4 text-center">
                  <h3 class="font-semibold">Bapak Gunawan Setiadi</h3>
                  <p class="text-sm text-gray-600">Geografi</p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
