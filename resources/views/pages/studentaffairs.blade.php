@extends('layouts.default')
@section('title', 'Kesiswaan SMA Hogwarts')

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
                <h1 class="font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Kesiswaan</h1>
                <div class="w-[501.5px] h-[2px] bg-white/70"></div>
            </div>
            <p class="font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
        </div>
    </div>
</div>

<!-- Add spacing to push content below the banner -->
<div class="h-[455px]"></div>

<!-- Coordinator's Introduction Section -->
<div id="student-life" class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
      <!-- Left: Coordinator Photo & Info -->
      <div class="lg:col-span-2">
        <div class="relative">
          <!-- Photo frame with -->
          <div class="relative p-3 max-w-md mx-auto">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-xl transform rotate-2"></div>
            <img 
              src="{{ asset('images/teacher/teach2.jpg') }}" 
              alt="Koordinator Kesiswaan" 
              class="relative z-10 rounded-xl shadow-lg w-full h-auto transform transition duration-500 hover:scale-[1.01]"
            >
            
            <div class="absolute bottom-0 right-0 w-16 h-16 bg-blue-400/20 backdrop-blur rounded-full transform translate-x-1/4 translate-y-1/4 flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
            </div>
          </div>
          
          <div class="mt-6 text-center">
            <h3 class="text-xl font-bold text-blue-950">Ahmad Fauzi, S.Pd.</h3>
            <p class="text-gray-600">Wakil Kepala Sekolah Bidang Kesiswaan</p>
          </div>
        </div>
      </div>
      
      <!-- Right: Coordinator Message -->
      <div class="lg:col-span-3">
        <div class="inline-block mb-4 px-4 py-1 bg-blue-100 rounded-full">
          <span class="text-blue-800 font-medium">Prakata Koordinator Kesiswaan</span>
        </div>
        
        <h2 class="text-3xl font-bold text-gray-900 mb-6 relative">
          Membentuk Karakter Luar Biasa Melalui Berbagai Aktivitas
          <div class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 mt-2 rounded-full"></div>
        </h2>
        
        <div class="prose prose-lg max-w-none text-gray-600">
          <p>
            Selamat datang di halaman Kesiswaan SMA Hogwarts. Divisi Kesiswaan memiliki peran penting dalam membina potensi dan karakter siswa di luar kegiatan akademik melalui berbagai program ekstrakurikuler dan kegiatan pengembangan diri.
          </p>
          
          <p>
            Kami percaya bahwa pendidikan yang holistik tidak hanya berfokus pada aspek akademik, tetapi juga pada pengembangan soft skills, karakter, dan minat bakat. Melalui berbagai aktivitas ekstrakurikuler, kami berupaya memfasilitasi siswa untuk menemukan dan mengembangkan potensi mereka.
          </p>
          
          <p>
            Siswa-siswi SMA Hogwarts memiliki kesempatan untuk mengeksplorasi minat dan bakat mereka melalui beragam kegiatan ekstrakurikuler. Kami mendorong setiap siswa untuk berpartisipasi aktif dan meraih prestasi terbaik sesuai dengan minat masing-masing.
          </p>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Extracurricular Activities Gallery -->
<div id="ekstrakurikuler" class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-gray-50 to-gray-100">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
        EKSTRAKURIKULER
      </span>
      <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        Aktivitas Ekstrakurikuler
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
        SMA Hogwarts menyediakan berbagai kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa di luar jam pelajaran.
      </p>
    </div>
    
    <!-- Ekstrakurikuler Gallery -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
      <!-- Ekstrakurikuler 1-->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Quidditch" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Klub Quidditch</h3>
          <p class="text-gray-600 text-sm mb-3">Olahraga tim terbang dengan sapu yang mengembangkan keterampilan kerja sama, strategi, dan ketangkasan.</p>
          <div class="flex items-center text-sm text-blue-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Senin & Rabu</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 2 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Seni dan Drama" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Seni & Teater</h3>
          <p class="text-gray-600 text-sm mb-3">Eksplorasi seni peran, drama, dan teater untuk mengembangkan ekspresi diri dan kepercayaan diri.</p>
          <div class="flex items-center text-sm text-purple-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Selasa & Kamis</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 3 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Klub Ramuan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Klub Sains</h3>
          <p class="text-gray-600 text-sm mb-3">Eksperimen dan penelitian ilmiah untuk menumbuhkan rasa ingin tahu dan keterampilan analitis.</p>
          <div class="flex items-center text-sm text-green-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Jumat</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 4 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Bela Diri" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Bela Diri</h3>
          <p class="text-gray-600 text-sm mb-3">Latihan bela diri untuk meningkatkan ketahanan fisik, mental, dan disiplin diri.</p>
          <div class="flex items-center text-sm text-red-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Selasa & Jumat</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 5 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Klub Botanika" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Klub Botanika</h3>
          <p class="text-gray-600 text-sm mb-3">Mempelajari dan memelihara tanaman serta mengembangkan pengetahuan botani.</p>
          <div class="flex items-center text-sm text-green-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Rabu & Sabtu</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 6 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Paduan Suara" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Paduan Suara</h3>
          <p class="text-gray-600 text-sm mb-3">Latihan vokal dan harmoni untuk mengembangkan bakat musik dan kerja sama tim.</p>
          <div class="flex items-center text-sm text-purple-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Senin & Kamis</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 7 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Klub Catur" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Klub Catur</h3>
          <p class="text-gray-600 text-sm mb-3">Permainan strategi untuk mengasah kemampuan berpikir kritis dan perencanaan.</p>
          <div class="flex items-center text-sm text-blue-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Rabu & Sabtu</span>
          </div>
        </div>
      </div>
      
      <!-- Ekstrakurikuler 8 -->
      <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-10 bg-gray-200">
          <img src="{{ asset('images/home/osn.jpg') }}" alt="Klub Jurnalistik" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-lg text-gray-900 mb-1">Jurnalistik</h3>
          <p class="text-gray-600 text-sm mb-3">Menulis, meliput, dan menerbitkan berita sekolah untuk mengembangkan keterampilan komunikasi.</p>
          <div class="flex items-center text-sm text-amber-600">
            <span class="font-medium">Jadwal: </span>
            <span class="ml-2">Selasa & Jumat</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main Content Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                KESISWAAN
            </span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Kehidupan Siswa di SMA Hogwarts
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                SMA Hogwarts menyediakan berbagai program dan layanan untuk mendukung pengembangan siswa 
                secara holistik, baik di dalam maupun di luar kelas.
            </p>
        </div>
        
        <!-- Student Life Categories -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
            <!-- Activity & Clubs -->
            <div class="life-card relative overflow-hidden rounded-2xl shadow-lg group">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/80 to-indigo-700/90 opacity-100 transition-opacity duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                     alt="Student Activities" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                
                <div class="relative z-20 p-8 h-full flex flex-col">
                    <div class="bg-white/10 backdrop-blur-sm p-3 rounded-lg mb-4 w-16 h-16 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.479m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4">Organisasi & Klub Siswa</h3>
                    <p class="text-white/80 mb-8">Berbagai kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa di luar jam pelajaran.</p>
                    
                    <div class="mt-auto">
                        <ul class="space-y-2 text-white mb-6">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Organisasi Siswa Intra Sekolah (OSIS)
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Klub Sains & Teknologi
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Klub Olahraga (Quidditch, Basket, dll)
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Komunitas Seni & Budaya
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Student Support & Counseling -->
            <div class="life-card relative overflow-hidden rounded-2xl shadow-lg group">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600/80 to-indigo-700/90 opacity-100 transition-opacity duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                     alt="Student Support" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                
                <div class="relative z-20 p-8 h-full flex flex-col">
                    <div class="bg-white/10 backdrop-blur-sm p-3 rounded-lg mb-4 w-16 h-16 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4">Bimbingan & Konseling</h3>
                    <p class="text-white/80 mb-8">Layanan dukungan untuk membantu siswa menghadapi tantangan akademik, sosial, dan emosional.</p>
                    
                    <div class="mt-auto">
                        <ul class="space-y-2 text-white mb-6">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-purple-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Konseling Akademik & Karir
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-purple-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Konseling Pribadi & Sosial
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-purple-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Program Peer Mentoring
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-purple-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Layanan Kesehatan Mental
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Student Development -->
            <div class="life-card relative overflow-hidden rounded-2xl shadow-lg group">
                <div class="absolute inset-0 bg-gradient-to-br from-green-600/80 to-teal-700/90 opacity-100 transition-opacity duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1748&q=80" 
                     alt="Student Development" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                
                <div class="relative z-20 p-8 h-full flex flex-col">
                    <div class="bg-white/10 backdrop-blur-sm p-3 rounded-lg mb-4 w-16 h-16 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4">Pengembangan Siswa</h3>
                    <p class="text-white/80 mb-8">Program pengembangan karakter dan kepemimpinan untuk mempersiapkan siswa menjadi individu yang tangguh.</p>
                    
                    <div class="mt-auto">
                        <ul class="space-y-2 text-white mb-6">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-green-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Program Kepemimpinan
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-green-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Pengembangan Karakter
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-green-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Keterampilan Sosial & Komunikasi
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-green-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Keterampilan Abad 21
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Featured Programs Section -->
        <div class="relative bg-gradient-to-r from-blue-50 to-indigo-50 rounded-3xl p-8 md:p-12 mb-24">
            <!-- Background decorative elements -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-blue-100 rounded-full -mr-20 -mt-20 opacity-80"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-indigo-100 rounded-full -ml-20 -mb-20 opacity-80"></div>
            
            <div class="relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                        PROGRAM UNGGULAN
                    </span>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Program Kesiswaan Unggulan
                    </h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Berbagai program unggulan untuk mengembangkan potensi siswa di berbagai bidang.
                    </p>
                </div>
                
                <!-- Featured Programs Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Program Card 1 -->
                    <div class="featured-program-card">
                        <div class="h-14 w-14 flex items-center justify-center rounded-xl bg-blue-100 text-blue-700 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Hogwarts Leadership Academy</h3>
                        <p class="text-gray-600 mb-6">Program pelatihan kepemimpinan intensif yang didesain untuk mencetak pemimpin masa depan dengan integritas dan visi yang jelas.</p>
                        
                        <div class="mt-auto">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center gap-2">
                                <span>Detail Program</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Program Card 2 -->
                    <div class="featured-program-card">
                        <div class="h-14 w-14 flex items-center justify-center rounded-xl bg-purple-100 text-purple-700 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Peer Counseling Network</h3>
                        <p class="text-gray-600 mb-6">Jaringan konseling sebaya yang terlatih untuk memberikan dukungan emosional dan sosial bagi sesama siswa.</p>
                        
                        <div class="mt-auto">
                            <a href="#" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center gap-2">
                                <span>Detail Program</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Program Card 3 -->
                    <div class="featured-program-card">
                        <div class="h-14 w-14 flex items-center justify-center rounded-xl bg-green-100 text-green-700 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Community Service Program</h3>
                        <p class="text-gray-600 mb-6">Program pelayanan masyarakat yang bertujuan mengembangkan kepedulian sosial dan tanggung jawab siswa.</p>
                        
                        <div class="mt-auto">
                            <a href="#" class="text-green-600 hover:text-green-800 font-medium inline-flex items-center gap-2">
                                <span>Detail Program</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 to-indigo-700 p-8 md:p-12">
            <!-- Magical floating elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-[15%] w-20 h-20 bg-blue-400/20 rounded-full blur-xl animate-float-slow"></div>
                <div class="absolute top-40 right-[20%] w-28 h-28 bg-purple-500/20 rounded-full blur-xl animate-float-medium"></div>
                <div class="absolute bottom-20 left-[25%] w-24 h-24 bg-indigo-400/20 rounded-full blur-xl animate-float-fast"></div>
            </div>
            
            <div class="relative z-10">
                <div class="md:flex items-center justify-between">
                    <div class="mb-8 md:mb-0">
                        <h2 class="text-3xl font-bold text-white mb-4">Bergabunglah dengan Keluarga Hogwarts</h2>
                        <p class="text-blue-100 text-lg max-w-xl">
                            Pendaftaran untuk tahun ajaran baru telah dibuka. Raih kesempatan untuk mengembangkan potensimu bersama kami!
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('registration') }}" class="magical-button-white">
                            <span>Daftar Sekarang</span>
                        </a>
                        <a href="{{ route('registration') }}" class="magical-button-outline">
                            <span>Informasi Pendaftaran</span>
                        </a>
                    </div>
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

@keyframes bounce-slow {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.animate-float-slow { animation: float 8s ease-in-out infinite; }
.animate-float-medium { animation: float 6s ease-in-out infinite; }
.animate-float-fast { animation: float 4s ease-in-out infinite; }
.animate-bounce-slow { animation: bounce-slow 3s ease-in-out infinite; }

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


.aspect-w-16 {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
}

.aspect-w-16 > * {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.aspect-h-10 {
  
}


.life-card {
  transition: all 0.5s ease;
  height: 100%;
}

.life-card:hover {
  transform: translateY(-10px);
}


.featured-program-card {
  padding: 2rem;
  background-color: white;
  border-radius: 1rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
  border: 1px solid rgba(226, 232, 240, 0.8);
}

.featured-program-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}


.achievement-timeline {
  max-width: 1200px;
}

.achievement-item {
  width: 45%;
}

.achievement-item-left {
  margin-left: auto;
  margin-right: 50px;
}

.achievement-item-right {
  margin-right: auto;
  margin-left: 50px;
}

.achievement-card {
  transition: all 0.3s ease;
}

.achievement-card:hover {
  transform: scale(1.03);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.magical-button-white {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.875rem 1.75rem;
  background-color: white;
  color: #3B82F6;
  font-weight: 600;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.magical-button-white::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transition: all 0.4s ease;
  z-index: -1;
}

.magical-button-white:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.magical-button-white:hover::before {
  left: 100%;
}

.magical-button-outline {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.875rem 1.75rem;
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.4);
  color: white;
  font-weight: 600;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
}

.magical-button-outline:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-3px);
}


@media (max-width: 768px) {
  .achievement-item {
    width: 80%;
    margin-left: auto !important;
    margin-right: auto !important;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  
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
  
  // Add hover effects to life cards
  const lifeCards = document.querySelectorAll('.life-card');
  
  lifeCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      // Create a magical particle effect
      const particle = document.createElement('div');
      particle.className = 'absolute w-1 h-1 bg-blue-400 rounded-full';
      particle.style.top = '50%';
      particle.style.left = '50%';
      particle.style.opacity = '0.6';
      particle.style.pointerEvents = 'none';
      
      // Random animation
      const duration = Math.random() * 1000 + 800;
      particle.style.transition = `all ${duration}ms ease`;
      
      this.appendChild(particle);
      
      // Animate the particle
      setTimeout(() => {
        particle.style.transform = `translate(${Math.random() * 100 - 50}%, ${Math.random() * -100}%)`;
        particle.style.opacity = '0';
      }, 10);
      
      // Remove the particle after animation
      setTimeout(() => {
        particle.remove();
      }, duration);
    });
  });
});
</script>
@endsection