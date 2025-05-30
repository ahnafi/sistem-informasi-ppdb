<!-- ========== HEADER ========== -->
<header id="main-header" class="fixed top-0 left-0 right-0 flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-3 transition-all duration-500 bg-transparent backdrop-blur-0">
    <div id="header-particles" class="absolute inset-0 overflow-hidden pointer-events-none transition-opacity duration-500 opacity-70">
        <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-blue-300 rounded-full animate-pulse-slow"></div>
        <div class="absolute top-3/4 left-1/2 w-1.5 h-1.5 bg-purple-300 rounded-full animate-pulse-slow" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/3 left-3/4 w-1 h-1 bg-indigo-300 rounded-full animate-pulse-slow" style="animation-delay: -1s;"></div>
        <div class="absolute top-1/2 left-1/5 w-2 h-2 bg-blue-300 rounded-full animate-pulse-slow" style="animation-delay: -3s;"></div>
    </div>

    <nav class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
      <div class="lg:col-span-3 flex items-center">
        
        <a class="flex items-center gap-3 focus:outline-hidden focus:opacity-80 transition-transform hover:scale-105 group" href="{{ route('home') }}" aria-label="Hogwarts">
          <div class="relative">
            
            <div class="absolute inset-0 rounded-full bg-blue-400/20 blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            

            <img src="{{ asset('images/logonobg.png') }}" alt="Hogwarts" class="h-11 w-auto relative z-10">
          </div>
          
          <div class="font-serif">
            <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-700 dark:from-indigo-300 dark:to-blue-400">SMA Hogwarts</span>
            <div class="text-xs text-gray-500 dark:text-gray-400 italic">Draco Dormiens Nunquam Titillandus</div>
          </div>
        </a>
        <!-- End Logo -->
      </div>

      <!-- Button Group -->
      <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">  
        <!-- Mobile menu toggle -->
        <div class="lg:hidden">
          <button type="button" class="hs-collapse-toggle size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-white/20 text-white hover:bg-white/20 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 transition-all" id="hs-navbar-collapse-with-animation" data-hs-collapse="#hs-navbar-collapse-with-animation-mobile" aria-controls="hs-navbar-collapse-with-animation-mobile" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:flex hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>
      </div>
      <!-- End Button Group -->

      <!-- Collapse Menu -->
      <div id="hs-navbar-collapse-with-animation-mobile" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-8 lg:mt-0">
          <!-- Home Link -->
          <div>
            <a class="magical-link group relative inline-flex items-center text-base font-medium {{ request()->routeIs('home') ? 'text-blue-700' : 'text-gray-800' }} hover:text-blue-700 focus:outline-hidden before:absolute before:bottom-0 before:left-0 before:h-0.5 before:bg-blue-700 before:w-0 hover:before:w-full before:transition-all before:duration-300" href="{{ route('home') }}" aria-current="page">
              <span class="inline-flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 {{ request()->routeIs('home') ? 'text-blue-700' : 'text-blue-500' }} transform group-hover:-translate-y-0.5 transition-transform duration-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>Beranda</span>
              </span>
              
              <!--hover particles -->
              <span class="absolute -top-1 left-0 h-full w-full flex justify-around opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                <span class="h-1 w-1 bg-blue-400 rounded-full animate-float" style="animation-delay: -0.3s; animation-duration: 1.2s;"></span>
                <span class="h-1 w-1 bg-indigo-400 rounded-full animate-float" style="animation-delay: -0.5s; animation-duration: 1s;"></span>
                <span class="h-1 w-1 bg-blue-300 rounded-full animate-float" style="animation-delay: -0.7s; animation-duration: 0.8s;"></span>
              </span>
            </a>
          </div>
          
          <!-- Registration Link -->
          <div>
            <a class="magical-link group relative inline-flex items-center text-base font-medium {{ request()->routeIs('registration.index') ? 'text-blue-700' : 'text-gray-800' }} hover:text-blue-700 focus:outline-hidden before:absolute before:bottom-0 before:left-0 before:h-0.5 before:bg-blue-700 before:w-0 hover:before:w-full before:transition-all before:duration-300" href="{{ route('registration') }}">
              <span class="inline-flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 {{ request()->routeIs('registration.index') ? 'text-blue-700' : 'text-blue-500' }} transform group-hover:-translate-y-0.5 transition-transform duration-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                <span>Pendaftaran</span>
              </span>
              
              <!-- hover particles -->
              <span class="absolute -top-1 left-0 h-full w-full flex justify-around opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                <span class="h-1 w-1 bg-blue-400 rounded-full animate-float" style="animation-delay: -0.1s; animation-duration: 1.2s;"></span>
                <span class="h-1 w-1 bg-indigo-400 rounded-full animate-float" style="animation-delay: -0.4s; animation-duration: 1s;"></span>
                <span class="h-1 w-1 bg-blue-300 rounded-full animate-float" style="animation-delay: -0.9s; animation-duration: 0.8s;"></span>
              </span>
            </a>
          </div>
          
          <!-- dropdown  -->
          <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
            <button id="pendaftaran-dropdown" type="button" class="magical-link hs-dropdown-toggle inline-flex items-center gap-1.5 text-base font-medium {{ request()->routeIs(['home.profile', 'home.orgstructure', 'home.teachers']) ? 'text-blue-700' : 'text-gray-800' }} hover:text-blue-700 focus:outline-hidden">
              <span class="inline-flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 {{ request()->routeIs(['home.profile', 'home.orgstructure', 'home.teachers']) ? 'text-blue-700' : 'text-blue-500' }}">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <span>SMA Hogwarts</span>
              </span>
              <svg class="ms-1 size-4 transition-transform hs-dropdown-open:rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <!-- dropdown menu -->
            <div class="hs-dropdown-menu transition-[opacity,margin] duration-300 hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-xl shadow-blue-100/40 border border-blue-100/50 rounded-xl p-2 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-900/40 before:absolute before:-top-5 before:left-0 before:w-full before:h-5">
              <div class="flex h-1.5 mb-2">
                <div class="w-1/4 bg-red-600 rounded-tl-lg"></div>
                <div class="w-1/4 bg-yellow-500"></div>
                <div class="w-1/4 bg-blue-600"></div>
                <div class="w-1/4 bg-green-600 rounded-tr-lg"></div>
              </div>
              
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                </svg>
                Profil Sekolah
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-indigo-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
                Kalender Akademik
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.orgstructure') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-purple-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.479m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
                Struktur Organisasi
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.teachers') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-amber-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                Daftar Guru
              </a>
              <div class="my-1 border-t border-gray-200 dark:border-gray-700"></div>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.academics') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                Akademik
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.studentaffairs') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                Kesiswaan
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="{{ route('home.facility') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                </svg>
                Fasilitas
              </a>
            </div>
          </div>

          <!-- News Link -->
          <div>
            <a class="magical-link group relative inline-flex items-center text-base font-medium {{ request()->routeIs('article') ? 'text-blue-700' : 'text-gray-800' }} hover:text-blue-700 focus:outline-hidden before:absolute before:bottom-0 before:left-0 before:h-0.5 before:bg-blue-700 before:w-0 hover:before:w-full before:transition-all before:duration-300" href="{{ route('article') }}">
              <span class="inline-flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 {{ request()->routeIs('article') ? 'text-blue-700' : 'text-blue-500' }} transform group-hover:-translate-y-0.5 transition-transform duration-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                <span>Berita</span>
              </span>
              
              <span class="absolute -top-1 left-0 h-full w-full flex justify-around opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                <span class="h-1 w-1 bg-blue-400 rounded-full animate-float" style="animation-delay: -0.2s; animation-duration: 1.2s;"></span>
                <span class="h-1 w-1 bg-indigo-400 rounded-full animate-float" style="animation-delay: -0.6s; animation-duration: 1s;"></span>
                <span class="h-1 w-1 bg-blue-300 rounded-full animate-float" style="animation-delay: -0.8s; animation-duration: 0.8s;"></span>
              </span>
            </a>
          </div>
          
          <!-- Contact Link -->
          <div>
            <a class="magical-link group relative inline-flex items-center text-base font-medium {{ request()->routeIs('home.contact') ? 'text-blue-700' : 'text-gray-800' }} hover:text-blue-700 focus:outline-hidden before:absolute before:bottom-0 before:left-0 before:h-0.5 before:bg-blue-700 before:w-0 hover:before:w-full before:transition-all before:duration-300" href="{{ route('home.contact') }}">
              <span class="inline-flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 {{ request()->routeIs('home.contact') ? 'text-blue-700' : 'text-blue-500' }} transform group-hover:-translate-y-0.5 transition-transform duration-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <span>Kontak</span>
              </span>
              
              <span class="absolute -top-1 left-0 h-full w-full flex justify-around opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                <span class="h-1 w-1 bg-blue-400 rounded-full animate-float" style="animation-delay: -0.3s; animation-duration: 1.2s;"></span>
                <span class="h-1 w-1 bg-indigo-400 rounded-full animate-float" style="animation-delay: -0.5s; animation-duration: 1s;"></span>
                <span class="h-1 w-1 bg-blue-300 rounded-full animate-float" style="animation-delay: -0.7s; animation-duration: 0.8s;"></span>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Collapse Menu -->
    </nav>
  </header>


<style>
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
    100% { transform: translateY(0px); }
  }
  
  @keyframes pulse-slow {
    0% { transform: scale(1); opacity: 0.6; }
    50% { transform: scale(1.4); opacity: 1; }
    100% { transform: scale(1); opacity: 0.6; }
  }
  
  .animate-float {
    animation: float 3s ease-in-out infinite;
  }
  
  .animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
  }
  
  #main-header.scrolled {
    @apply bg-white shadow-lg py-2;
    background-color: white;
    backdrop-filter: none;
  }
  
  #main-header.scrolled #header-particles {
    @apply opacity-0;
  }
  
  #main-header.scrolled .text-white {
    @apply text-gray-800;
  }
  
  #main-header.scrolled .border-white\/20 {
    @apply border-gray-200;
  }
  
  .magical-link::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #3b82f6, #6366f1);
    transition: width 0.3s ease, left 0.3s ease;
    transform: translateX(-50%);
    opacity: 0;
  }
  
  .magical-link:hover::after {
    width: 100%;
    opacity: 1;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const scrollThreshold = 50;
    
    function updateHeaderStyle() {
      if (window.scrollY > scrollThreshold) {
        header.classList.add('scrolled');
        header.style.backdropFilter = 'none';
        header.style.backgroundColor = 'white';
        document.querySelectorAll('#main-header .magical-link').forEach(link => {
          link.classList.remove('text-white');
          link.classList.add('text-gray-800');
        });
      } else {
        header.classList.remove('scrolled');
        header.style.backgroundColor = 'transparent';
        header.style.backdropFilter = '';
        if (!window.location.pathname.includes('/home')) {
          document.querySelectorAll('#main-header .magical-link').forEach(link => {
            link.classList.add('text-white');
            link.classList.remove('text-gray-800');
          });
        }
      }
    }
    
    updateHeaderStyle();
    
    window.addEventListener('scroll', updateHeaderStyle);
    
    const links = document.querySelectorAll('.magical-link');
    
    links.forEach(link => {
      link.addEventListener('mouseover', function(e) {

        const sparkle = document.createElement('div');
        sparkle.className = 'absolute h-1 w-1 bg-blue-400 rounded-full';
        sparkle.style.top = '50%';
        sparkle.style.left = `${Math.random() * 100}%`;
        sparkle.style.opacity = '0.6';
        sparkle.style.pointerEvents = 'none';
        sparkle.style.transition = 'all 0.5s ease';
        this.appendChild(sparkle);
        
        setTimeout(() => {
          sparkle.style.transform = 'translateY(-20px)';
          sparkle.style.opacity = '0';
        }, 50);
        
        setTimeout(() => {
          sparkle.remove();
        }, 500);
      });
    });
  });
</script>