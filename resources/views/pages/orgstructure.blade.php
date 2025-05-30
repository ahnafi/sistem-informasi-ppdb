@extends("layouts.default")
@section("title","Struktur Organisasi SMA Hogwarts")

@section("main")

<div class="relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-indigo-950/95 via-blue-900/85 to-purple-800/80 z-10"></div>
  
  <div class="absolute inset-0 z-10 opacity-20">
    <div class="absolute inset-0 constellation-pattern"></div>
  </div>
  
  <div class="absolute inset-0 z-10 overflow-hidden">
    <div class="absolute top-20 left-[15%] w-20 h-20 bg-blue-400/30 rounded-full blur-xl animate-float-slow"></div>
    <div class="absolute top-36 right-[20%] w-28 h-28 bg-purple-500/20 rounded-full blur-xl animate-float-medium"></div>
    <div class="absolute bottom-24 left-[25%] w-24 h-24 bg-indigo-400/20 rounded-full blur-xl animate-float-fast"></div>
    
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

  <div class="w-full">
    <div class="w-full h-[350px] md:h-[400px] lg:h-[450px] bg-cover bg-center backdrop-blur-sm" 
         style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
  
  <div class="absolute inset-0 z-20 flex flex-col justify-center px-6 sm:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto">
      <div class="w-24 h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400 mb-6 rounded-full animate-pulse"></div>
      
      <h1 class="magical-text text-4xl md:text-5xl lg:text-6xl font-bold tracking-wide mb-4">
        STRUKTUR ORGANISASI
      </h1>
    </div>
  </div>
  
  <div class="absolute bottom-0 left-0 right-0 z-20 py-3 bg-gradient-to-r from-indigo-900/80 via-blue-800/90 to-indigo-900/80 backdrop-blur-sm">
  </div>
</div>

<div id="org-structure" class="bg-gradient-to-b from-gray-50 to-gray-100 py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-2 inline-block relative">
        Struktur Organisasi SMA Hogwarts
        <div class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-indigo-600 via-blue-600 to-indigo-600 rounded-full"></div>
      </h2>
      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Peta kepemimpinan yang membawa visi magis sekolah kita menjadi kenyataan</p>
    </div>
    
    <!-- Struktur Organisasi sebagai PNG Image -->
    <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 border border-gray-200/50 relative overflow-hidden">
      <div class="absolute top-0 right-0 w-64 h-64 bg-blue-50 rounded-full -mr-32 -mt-32 opacity-70"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-indigo-50 rounded-full -ml-40 -mb-40 opacity-70"></div>
      
      <div class="relative z-10">
        <!-- PNG Image of Organization Structure -->
        <div class="flex justify-center">
          <div class="relative rounded-xl overflow-hidden border-2 border-blue-100 shadow-lg">
            <img 
              src="{{ asset('images/struktur-organisasi.png') }}" 
              alt="Struktur Organisasi SMA Hogwarts" 
              class="max-w-full h-auto"
            >
 
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
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

.magical-orb {
  position: relative;
  width: 24px;
  height: 24px;
  background: linear-gradient(135deg, #6366f1, #3b82f6);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  animation: pulse 3s ease-in-out infinite;
  transition: transform 0.3s ease;
}

.inner-orb {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  opacity: 0.6;
}

.group:hover .magical-orb {
  transform: translateY(-3px) scale(1.1);
  box-shadow: 0 0 15px rgba(99, 102, 241, 0.6);
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
