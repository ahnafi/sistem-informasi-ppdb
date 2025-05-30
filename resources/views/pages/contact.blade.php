@extends("layouts.default")
@section("title","Kontak SMA Hogwarts")

@section("main")
<style>
  .bgpixi-wrapper {
    background-image: url('{{ asset('images/bgpixi.png') }}');
    background-repeat: repeat;
    background-size: auto;
    position: relative;
  }
  
  .bgpixi-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(to bottom, rgba(219, 234, 254, 0.85), rgba(255, 255, 255, 0.95)); /* Blue to white gradient */
    z-index: 0;
  }
  
  .bgpixi-wrapper > * {
    position: relative;
    z-index: 1;
  }
</style>

<!-- Hero Section -->
<div class="relative overflow-hidden">
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

  <!-- Background Image-->
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
      
      <!-- Title -->
      <h1 class="magical-text text-4xl md:text-5xl lg:text-6xl font-bold tracking-wide mb-4">
        HUBUNGI KAMI
      </h1>
    </div>
  </div>
  
  <!-- Organization level indicators -->
  <div class="absolute bottom-0 left-0 right-0 z-20 py-3 bg-gradient-to-r from-indigo-900/80 via-blue-800/90 to-indigo-900/80 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto h-full flex flex-wrap items-center justify-between px-6 gap-y-2">
      
    </div>
  </div>
</div>

<!-- All remaining content sections -->
<div class="bgpixi-wrapper">
  <!-- Main Contact Content Section -->
  <div id="contact-content" class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      
      <!-- Contact Cards & Form -->
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
        <!-- Contact Cards Column -->
        <div class="relative">
          <div class="absolute -top-10 -left-10 w-40 h-40 bg-blue-50 rounded-full opacity-80"></div>
          <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-indigo-50 rounded-full opacity-80"></div>
          
          <div class="relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-100 rounded-full text-indigo-700 font-medium text-sm mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
              <span>Kontak Langsung</span>
            </div>
            
            <h2 class="text-3xl font-bold text-gray-900 mb-8 relative">
              Hubungi Kami Sekarang
              <div class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 mt-2 rounded-full"></div>
            </h2>
            
            <!-- Contact Cards -->
            <div class="space-y-6">
              <!-- Telepon -->
              <div class="org-box yayasan" data-level="Telepon">
                <div class="org-content solid-white-bg">
                  <div class="org-avatar">
                    <div class="w-full h-full bg-amber-100 flex items-center justify-center text-amber-600">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="org-details">
                    <h3 class="font-bold text-lg">Telepon</h3>
                    <p class="text-gray-700">+44 123 4567 890</p>
                  </div>
                </div>
              </div>
              
              <!-- Email -->
              <div class="org-box wakasek" data-level="Email">
                <div class="org-content solid-white-bg">
                  <div class="org-avatar">
                    <div class="w-full h-full bg-blue-100 flex items-center justify-center text-blue-600">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="org-details">
                    <h3 class="font-bold text-lg">Email</h3>
                    <p class="text-gray-700">info@hogwarts.ac.uk</p>
                  </div>
                </div>
              </div>
              
              <!-- Alamat -->
              <div class="org-box koordinator" data-level="Alamat">
                <div class="org-content solid-white-bg">
                  <div class="org-avatar">
                    <div class="w-full h-full bg-purple-100 flex items-center justify-center text-purple-600">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                      <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    </div>
                  </div>
                  <div class="org-details">
                    <h3 class="font-bold text-lg">Alamat</h3>
                    <p class="text-gray-700">Kastil Hogwarts, Hogsmeade, Skotlandia</p>
                  </div>
                </div>
              </div>
              
              <!-- Jam Operasional -->
              <div class="org-box staff" data-level="Jam Operasional">
                <div class="org-content solid-white-bg">
                  <div class="org-avatar">
                    <div class="w-full h-full bg-green-100 flex items-center justify-center text-green-600">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    </div>
                  </div>
                  <div class="org-details">
                    <h3 class="font-bold text-lg">Jam Operasional</h3>
                    <p class="text-gray-700">Senin - Jumat: 07.00 - 15.00 WIB</p>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="mt-12 p-6 bg-white rounded-xl shadow-lg border border-blue-100 relative overflow-hidden">
              <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -mr-16 -mt-16"></div>
              
              <div class="relative z-10">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                  </svg>
                  Informasi Tambahan
                </h3>
                
                <p class="text-gray-600 mb-4">
                  Untuk keperluan pendaftaran siswa baru, silakan kunjungi halaman Pendaftaran atau hubungi bagian administrasi kami melalui kontak di atas. Tim kami siap membantu Anda dengan segala pertanyaan seputar penerimaan siswa baru.
                </p>
                
                <div class="flex flex-wrap gap-4 mt-6">
                  <div class="flex items-center text-sm text-gray-600">
                    <div class="w-3 h-3 bg-amber-300 rounded-full mr-2"></div>
                    <span>Telepon: Dalam negeri</span>
                  </div>
                  <div class="flex items-center text-sm text-gray-600">
                    <div class="w-3 h-3 bg-blue-300 rounded-full mr-2"></div>
                    <span>Email: 24/7</span>
                  </div>
                  <div class="flex items-center text-sm text-gray-600">
                    <div class="w-3 h-3 bg-purple-300 rounded-full mr-2"></div>
                    <span>Kunjungan: Registrasi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <!-- Contact Form Column -->
        <div class="relative">
          <div class="org-chart bg-white rounded-2xl shadow-xl p-8 border border-gray-200/50 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50 rounded-full -mr-32 -mt-32 opacity-70"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-indigo-50 rounded-full -ml-40 -mb-40 opacity-70"></div>
            
            <div class="relative z-10">
              <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium text-sm mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                <span>Kirim Pesan</span>
              </div>
              
              <h2 class="text-3xl font-bold text-gray-900 mb-8 relative">
                Sampaikan Pertanyaan
                <div class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 mt-2 rounded-full"></div>
              </h2>
              
              <form id="contactForm">
                <div class="grid gap-6">
                  <div class="grid grid-cols-2 gap-4">
                    <div class="form-group">
                      <label for="firstName" class="form-label">Nama Depan</label>
                      <input type="text" id="firstName" class="form-input" placeholder="Masukkan nama depan">
                    </div>
                    <div class="form-group">
                      <label for="lastName" class="form-label">Nama Belakang</label>
                      <input type="text" id="lastName" class="form-input" placeholder="Masukkan nama belakang">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-input" placeholder="nama@contoh.com">
                  </div>
                  
                  <div class="form-group">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="tel" id="phone" class="form-input" placeholder="08xxxxxxxxxx">
                  </div>
                  
                  <div class="form-group">
                    <label for="message" class="form-label">Pesan Anda</label>
                    <textarea id="message" rows="5" class="form-input" placeholder="Tulis pesan atau pertanyaan Anda di sini..."></textarea>
                  </div>
                  
                  <button type="submit" class="magical-button">
                    <span class="button-text">Kirim Pesan</span>
                  </button>
                  
                  <p class="text-center text-sm text-gray-600">
                    Kami akan merespons pesan Anda dalam 1-2 hari kerja
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <div class="relative py-16 lg:py-20 overflow-hidden">
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-500/80 to-transparent"></div>
    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-50 rounded-full opacity-80"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium text-sm mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>
          <span>Lokasi Kami</span>
        </div>
        
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
          Temukan SMA Hogwarts
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Kastil Hogwarts terletak di dataran tinggi Skotlandia, dikelilingi oleh pegunungan dan dekat dengan desa Hogsmeade. Sekolah ini memiliki petak dan danau sendiri serta hutan yang luas.
        </p>
      </div>
      
      <div class="org-chart bg-white rounded-2xl shadow-xl overflow-hidden relative">
        <div class="absolute top-0 left-0 right-0 h-3 bg-gradient-to-r from-indigo-600 via-blue-600 to-indigo-600"></div>
        <div class="h-[500px]">
          <iframe 
            class="w-full h-full border-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4598.847262971558!2d-71.0967349226887!3d42.360090971193024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e370aaf51a6a87%3A0xd0e08ea5b308203c!2sMassachusetts%20Institute%20of%20Technology!5e1!3m2!1sen!2sid!4v1745675190539!5m2!1sen!2sid" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-3 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-600"></div>
      </div>
      
      <div class="flex flex-wrap items-center justify-center gap-6 mt-12">
        <div class="org-box yayasan inline-flex" data-level="Fasilitas">
          <div class="org-content !py-2 !px-4">
            <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse mr-2"></div>
            <p class="text-sm font-medium">Gedung Utama</p>
          </div>
        </div>
        <div class="org-box wakasek inline-flex" data-level="Fasilitas">
          <div class="org-content !py-2 !px-4">
            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse mr-2"></div>
            <p class="text-sm font-medium">Area Olahraga</p>
          </div>
        </div>
        <div class="org-box koordinator inline-flex" data-level="Fasilitas">
          <div class="org-content !py-2 !px-4">
            <div class="w-3 h-3 bg-amber-500 rounded-full animate-pulse mr-2"></div>
            <p class="text-sm font-medium">Asrama Siswa</p>
          </div>
        </div>
        <div class="org-box staff inline-flex" data-level="Fasilitas">
          <div class="org-content !py-2 !px-4">
            <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse mr-2"></div>
            <p class="text-sm font-medium">Laboratorium</p>
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

@keyframes pulse {
  0% { opacity: 0.6; transform: scale(1); }
  50% { opacity: 1; transform: scale(1.05); }
  100% { opacity: 0.6; transform: scale(1); }
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

.glow-amber {
  box-shadow: 0 0 8px 2px rgba(251, 191, 36, 0.6);
}

.glow-blue {
  box-shadow: 0 0 8px 2px rgba(59, 130, 246, 0.6);
}

.glow-purple {
  box-shadow: 0 0 8px 2px rgba(139, 92, 246, 0.6);
}

.glow-green {
  box-shadow: 0 0 8px 2px rgba(16, 185, 129, 0.6);
}

.org-chart {
  overflow-x: auto;
  padding-bottom: 2rem;
}

.org-box {
  position: relative;
  transition: all 0.3s ease;
  transform-origin: center top;
}

.org-box:hover {
  transform: translateY(-5px) scale(1.02);
}

.org-content {
  display: flex;
  align-items: center;
  padding: 1rem;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  background-color: white;
  border: 1px solid rgba(226, 232, 240, 0.8);
  min-width: 250px;
  transition: all 0.3s ease;
}

.org-box:hover .org-content {
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  border-color: rgba(59, 130, 246, 0.3);
}

.org-avatar {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  margin-right: 1rem;
  overflow: hidden;
  border: 2px solid transparent;
  transition: all 0.3s ease;
}

.org-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.yayasan .org-content {
  background: linear-gradient(45deg, rgba(251, 191, 36, 0.1), rgba(245, 158, 11, 0.05));
  border-left: 4px solid #f59e0b;
}

.yayasan:hover .org-avatar {
  border-color: #f59e0b;
}

.wakasek .org-content {
  background: linear-gradient(45deg, rgba(59, 130, 246, 0.05), rgba(37, 99, 235, 0.02));
  border-left: 4px solid #3b82f6;
}

.wakasek:hover .org-avatar {
  border-color: #3b82f6;
}

.koordinator .org-content {
  background: linear-gradient(45deg, rgba(139, 92, 246, 0.05), rgba(124, 58, 237, 0.02));
  border-left: 4px solid #8b5cf6;
}

.koordinator:hover .org-avatar {
  border-color: #8b5cf6;
}

.staff .org-content {
  background: linear-gradient(45deg, rgba(14, 165, 233, 0.05), rgba(2, 132, 199, 0.02));
  border-left: 4px solid #0ea5e9;
}

.staff:hover .org-avatar {
  border-color: #0ea5e9;
}

.form-group {
  position: relative;
  margin-bottom: 0.5rem;
}

.form-label {
  display: block;
  font-size: 0.875rem;
  font-weight: 500;
  color: #4b5563;
  margin-bottom: 0.5rem;
}

.form-input {
  width: 100%;
  padding: 0.75rem 1rem;
  border-radius: 0.5rem;
  border: 1px solid #e5e7eb;
  background-color: #f9fafb;
  transition: all 0.2s ease;
  font-size: 0.95rem;
}

.form-input:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
  background-color: white;
}

.form-input::placeholder {
  color: #9ca3af;
}

.magical-button {
  position: relative;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 0.875rem 1.5rem;
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  color: white;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 0.5rem;
  overflow: hidden;
  transition: all 0.3s ease;
  cursor: pointer;
  border: none;
  margin-top: 1rem;
  z-index: 1;
}

.magical-button:before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #2563eb, #7c3aed);
  transition: all 0.4s ease;
  z-index: -1;
}

.magical-button:hover:before {
  left: 0;
}

.magical-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(91, 33, 182, 0.3);
}

.button-text {
  position: relative;
  z-index: 1;
}

.org-box::before {
  content: attr(data-level);
  position: absolute;
  top: -6px;
  right: 10px;
  background-color: rgba(255, 255, 255, 0.9);
  font-size: 0.6rem;
  padding: 2px 6px;
  border-radius: 20px;
  color: #475569;
  font-weight: bold;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  opacity: 0;
  transform: translateY(-5px);
  transition: all 0.3s ease;
}

.org-box:hover::before {
  opacity: 1;
  transform: translateY(0);
}

.solid-white-bg {
  background: white !important;
  background-image: none !important;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
}

.org-box:hover .solid-white-bg {
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
}

@media (max-width: 640px) {
  .org-content {
    min-width: 220px;
  }
  
  .org-details h3 {
    font-size: 0.9rem;
  }
  
  .org-details p {
    font-size: 0.8rem;
  }
  
  .org-box::before {
    display: none;
  }
}
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<span class="button-text">Mengirim...</span>';
        button.disabled = true;
        
        setTimeout(() => {
          button.innerHTML = '<span class="button-text">Pesan Terkirim!</span>';
          
          setTimeout(() => {
            button.innerHTML = '<span class="button-text">Kirim Pesan</span>';
            button.disabled = false;
            contactForm.reset();
          }, 2000);
        }, 1500);
      });
    }
    
    const orgBoxes = document.querySelectorAll('.org-box');
    
    orgBoxes.forEach(box => {
      box.addEventListener('mouseenter', function() {
        const particle = document.createElement('div');
        particle.className = 'absolute w-1 h-1 bg-blue-400 rounded-full';
        particle.style.top = '50%';
        particle.style.left = '0%';
        particle.style.opacity = '0.6';
        particle.style.pointerEvents = 'none';
        
        const duration = Math.random() * 1000 + 800;
        particle.style.transition = `all ${duration}ms ease`;
        
        this.appendChild(particle);
        
        setTimeout(() => {
          particle.style.transform = `translate(${Math.random() * 100}%, ${Math.random() * -100}%)`;
          particle.style.opacity = '0';
        }, 10);
        
        setTimeout(() => {
          particle.remove();
        }, duration);
      });
    });
  });
</script>
@endsection
