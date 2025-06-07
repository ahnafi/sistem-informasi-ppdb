@extends('layouts.default')
@section('title', 'Program Akademik SMA Hogwarts')

@section('main')
<!-- Hero Section -->
<div class="relative overflow-hidden">
  <!-- Magical atmosphere gradient overlay -->
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
  </div>

  <!-- Background Image  -->
  <div class="w-full">
    <div class="w-full h-[350px] md:h-[400px] lg:h-[450px] bg-cover bg-center backdrop-blur-sm" 
         style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
  
  <!-- Hero Content -->
  <div class="absolute inset-0 z-20 flex flex-col justify-center px-6 sm:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto">
      <!-- Magical divider -->
      <div class="w-24 h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400 mb-6 rounded-full animate-pulse"></div>
      
      <!-- Title with magical effect -->
      <h1 class="magical-text text-4xl md:text-5xl lg:text-6xl font-bold tracking-wide mb-4">
        PROGRAM AKADEMIK
      </h1>
    </div>
  </div>
  
  <!-- Bottom bar -->
  {{-- <div class="absolute bottom-0 left-0 right-0 z-20 py-3 bg-gradient-to-r from-indigo-900/80 via-blue-800/90 to-indigo-900/80 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto h-full flex flex-wrap items-center justify-center px-6 gap-4">
    </div>
  </div> --}}
</div>

<!-- School Introduction Section -->
<div class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Content -->
      <div>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
          PRAKATA KOORDINATOR BIDANG AKADEMIK
        </span>
        <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Selamat Datang di Program Akademik SMA Hogwarts
        </h2>
        <div class="mt-6 prose prose-lg text-gray-600">
          <p class="mb-4">
            Dengan bangga kami menyambut Anda untuk mengenal lebih dalam program akademik SMA Hogwarts. Sebagai koordinator bidang akademik, saya ingin memastikan bahwa setiap siswa mendapatkan pendidikan berkualitas tinggi yang sesuai dengan minat dan bakat mereka.
          </p>
          
          <p class="mb-4">
            Program akademik kami dirancang dengan pendekatan holistik yang mengintegrasikan kurikulum nasional dengan standar internasional. Kami menawarkan tiga jurusan unggulan: Ilmu Alam, Ilmu Sosial, dan Bahasa & Budaya, yang masing-masing dilengkapi dengan fasilitas modern dan metode pembelajaran inovatif.
          </p>
          
          <p class="mb-6">
            Tim pengajar kami terdiri dari para profesional berpengalaman yang berkomitmen untuk mengembangkan potensi setiap siswa. Dengan rasio guru-siswa yang ideal, kami memastikan setiap siswa mendapat perhatian individual yang memadai untuk mencapai prestasi terbaiknya.
          </p>
          
          <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
            <p class="text-blue-900 font-medium italic">
              "Pendidikan berkualitas adalah fondasi untuk menciptakan generasi yang siap menghadapi tantangan global dan berkontribusi positif bagi masyarakat."
            </p>
            <div class="mt-4 flex items-center">
              <img src="{{ asset('images/headmaster.jpg') }}" alt="Koordinator Akademik" class="w-12 h-12 rounded-full object-cover mr-3">
              <div>
                <p class="font-semibold text-blue-900">Dr. Minerva McGonagall</p>
                <p class="text-sm text-blue-700">Koordinator Bidang Akademik SMA Hogwarts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Images -->
      <div class="relative">
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <img src="{{ asset('images/home/children.jpg') }}" alt="Suasana Belajar" class="rounded-lg shadow-lg">
            <img src="{{ asset('images/home/classroom.jpg') }}" alt="Laboratorium" class="rounded-lg shadow-lg">
          </div>
          <div class="space-y-4 pt-8">
            <img src="{{ asset('images/home/library.jpg') }}" alt="Perpustakaan" class="rounded-lg shadow-lg">
            <img src="{{ asset('images/home/field.jpg') }}" alt="Kegiatan Siswa" class="rounded-lg shadow-lg">
          </div>
        </div>
        
        <!-- Floating stats -->
        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border">
          <div class="text-center">
            <div class="text-3xl font-bold text-blue-600">3</div>
            <p class="text-sm text-gray-600">Jurusan Unggulan</p>
          </div>
        </div>
        
        <div class="absolute -top-6 -right-6 bg-white p-6 rounded-xl shadow-xl border">
          <div class="text-center">
            <div class="text-3xl font-bold text-green-600">1:25</div>
            <p class="text-sm text-gray-600">Rasio Guru-Siswa</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Academic Programs Section -->
<div id="programs" class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto">
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
        KURIKULUM UNGGULAN
      </span>
      <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Program Akademik Kami</h2>
      <p class="mt-4 text-lg text-gray-600">
        SMA Hogwarts menawarkan program akademik komprehensif yang dirancang untuk mempersiapkan siswa menghadapi tantangan masa depan
      </p>
    </div>
    
    <!-- Programs Grid -->
    <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      <!-- Program 1 -->
      <div class="program-card" data-department="science">
        <div class="relative h-64 overflow-hidden rounded-t-xl">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent z-10"></div>
          <img src="{{ asset('images/home/sci.jpg') }}" alt="Ilmu Alam" class="h-full w-full object-cover transition-transform duration-700 hover:scale-110">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-20">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-200 text-blue-800">
              PROGRAM UNGGULAN
            </span>
            <h3 class="mt-2 text-2xl font-bold text-white">Ilmu Alam</h3>
          </div>
        </div>
        
        <div class="p-6 bg-white border border-gray-100 rounded-b-xl shadow-sm">
          <p class="text-gray-600 mb-4">Program yang mempelajari fenomena alam, fisika, kimia, dan biologi dengan pendekatan eksperimental dan analisis ilmiah.</p>
          
          <div class="flex items-center justify-between">
            <span class="flex items-center gap-1 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
              </svg>
              12 Mata Pelajaran
            </span>
            
            <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1">
              Detail Program
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Program 2 -->
      <div class="program-card" data-department="social">
        <div class="relative h-64 overflow-hidden rounded-t-xl">
          <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent z-10"></div>
          <img src="{{ asset('images/home/demo.jpg') }}" alt="Ilmu Sosial" class="h-full w-full object-cover transition-transform duration-700 hover:scale-110">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-20">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-200 text-indigo-800">
              PROGRAM UNGGULAN
            </span>
            <h3 class="mt-2 text-2xl font-bold text-white">Ilmu Sosial</h3>
          </div>
        </div>
        
        <div class="p-6 bg-white border border-gray-100 rounded-b-xl shadow-sm">
          <p class="text-gray-600 mb-4">Program yang mempelajari interaksi manusia dalam masyarakat, ekonomi, politik, sejarah, geografi dan sosiologi.</p>
          
          <div class="flex items-center justify-between">
            <span class="flex items-center gap-1 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
              </svg>
              10 Mata Pelajaran
            </span>
            
            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center gap-1">
              Detail Program
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Program 3 -->
      <div class="program-card" data-department="language">
        <div class="relative h-64 overflow-hidden rounded-t-xl">
          <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent z-10"></div>
          <img src="{{ asset('images/home/arts.jpg') }}" alt="Bahasa & Budaya" class="h-full w-full object-cover transition-transform duration-700 hover:scale-110">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-20">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-200 text-purple-800">
              PROGRAM UNGGULAN
            </span>
            <h3 class="mt-2 text-2xl font-bold text-white">Bahasa & Budaya</h3>
          </div>
        </div>
        
        <div class="p-6 bg-white border border-gray-100 rounded-b-xl shadow-sm">
          <p class="text-gray-600 mb-4">Program yang fokus pada penguasaan bahasa, sastra, komunikasi dan pemahaman lintas budaya dalam konteks global.</p>
          
          <div class="flex items-center justify-between">
            <span class="flex items-center gap-1 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-purple-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
              </svg>
              11 Mata Pelajaran
            </span>
            
            <a href="#" class="text-sm font-semibold text-purple-600 hover:text-purple-800 flex items-center gap-1">
              Detail Program
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Academic Excellence Highlights -->
<div class="bg-gradient-to-br from-blue-50 via-indigo-50 to-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto">
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
        KEUNGGULAN AKADEMIS
      </span>
      <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Mengapa Memilih Hogwarts?</h2>
      <p class="mt-4 text-lg text-gray-600">
        Pendidikan kami dirancang untuk mengembangkan keterampilan, pengetahuan, dan karakter yang dibutuhkan untuk sukses di masa depan.
      </p>
    </div>
    
    <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      <!-- Feature 1 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-blue-100 text-blue-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Kurikulum Terteknologi</h3>
          <p class="text-gray-600">
            Kurikulum kami terintegrasi dengan teknologi terkini, mempersiapkan siswa untuk dunia digital yang terus berkembang.
          </p>
        </div>
      </div>
      
      <!-- Feature 2 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-indigo-100 text-indigo-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Pengajar Berpengalaman</h3>
          <p class="text-gray-600">
            Para pengajar kami adalah lulusan terbaik dengan pengalaman mengajar dan keahlian dalam bidang mereka masing-masing.
          </p>
        </div>
      </div>
      
      <!-- Feature 3 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-purple-100 text-purple-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Fasilitas Modern</h3>
          <p class="text-gray-600">
            Laboratorium sains, studio bahasa, perpustakaan digital, dan fasilitas olahraga yang memenuhi standar internasional.
          </p>
        </div>
      </div>
      
      <!-- Feature 4 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.479m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Ukuran Kelas Terbatas</h3>
          <p class="text-gray-600">
            Dengan maksimum 25 siswa per kelas, kami memastikan setiap siswa mendapat perhatian yang cukup dari pengajar.
          </p>
        </div>
      </div>
      
      <!-- Feature 5 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-amber-100 text-amber-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Program Ekstrakurikuler</h3>
          <p class="text-gray-600">
            Menawarkan lebih dari 20 kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa di luar akademik.
          </p>
        </div>
      </div>
      
      <!-- Feature 6 -->
      <div class="feature-card">
        <div class="p-6">
          <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-rose-100 text-rose-600 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5M3 15V4.5" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Kompetisi Internasional</h3>
          <p class="text-gray-600">
            Siswa kami berkesempatan berpartisipasi dalam kompetisi akademik dan olahraga tingkat nasional dan internasional.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gradient-to-r from-blue-600 to-indigo-700 py-16">
  <div class="absolute inset-0 overflow-hidden">
    <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0" class="absolute -top-5 left-0 w-full h-32 text-blue-600 opacity-10">
      <polygon points="2560 0 2560 100 0 100"></polygon>
    </svg>
    
    <!-- Floating elements -->
    <div class="absolute top-20 left-[15%] w-24 h-24 bg-blue-400/10 rounded-full blur-xl"></div>
    <div class="absolute bottom-20 right-[20%] w-32 h-32 bg-indigo-400/10 rounded-full blur-xl"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div>
        <h2 class="text-3xl font-bold text-white sm:text-4xl">
          Bergabunglah dengan Komunitas Akademik Kami
        </h2>
        <p class="mt-4 text-lg text-blue-100">
          SMA Hogwarts membuka pendaftaran untuk tahun ajaran baru. Jadilah bagian dari lingkungan belajar yang inspiratif dan memotivasi.
        </p>
        
        <div class="mt-8 flex flex-wrap gap-4">
          <a href="{{ route('registration') }}" class="inline-flex items-center gap-2 px-6 py-3 border border-transparent rounded-full text-base font-medium bg-white text-blue-700 hover:text-blue-800 hover:bg-blue-50 transition shadow-lg hover:shadow-xl">
            Mendaftar Sekarang
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Stats -->
      <div class="grid grid-cols-2 gap-6">
        <div class="p-6 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
          <div class="text-4xl font-bold text-white">96%</div>
          <p class="mt-2 text-blue-100">Siswa melanjutkan ke universitas terbaik</p>
        </div>
        
        <div class="p-6 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
          <div class="text-4xl font-bold text-white">25+</div>
          <p class="mt-2 text-blue-100">Program pengayaan akademik</p>
        </div>
        
        <div class="p-6 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
          <div class="text-4xl font-bold text-white">50+</div>
          <p class="mt-2 text-blue-100">Guru bersertifikasi internasional</p>
        </div>
        
        <div class="p-6 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
          <div class="text-4xl font-bold text-white">100%</div>
          <p class="mt-2 text-blue-100">Tingkat kelulusan siswa</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>

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

.magical-text {
  background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
}


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

.constellation-pattern {
  background-image: radial-gradient(circle at center, rgba(255, 255, 255, 0.15) 1px, transparent 1px);
  background-size: 30px 30px;
}

.program-card {
  transition: all 0.3s ease;
  border-radius: 0.75rem;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.program-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.feature-card {
  background: white;
  border-radius: 1rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  border: 1px solid rgba(226, 232, 240, 0.8);
  overflow: hidden;
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.faculty-card {
  transition: all 0.3s ease;
}

.faculty-card:hover {
  transform: translateY(-5px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  
  const programCards = document.querySelectorAll('.program-card');
  
  programCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      const department = this.getAttribute('data-department');
      this.classList.add(`border-${department}`);
    });
    
    card.addEventListener('mouseleave', function() {
      const department = this.getAttribute('data-department');
      this.classList.remove(`border-${department}`);
    });
  });
  
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