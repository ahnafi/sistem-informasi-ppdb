@extends('layouts.default')

@section('main')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-700 text-white py-20 pt-30">
  <div class="absolute inset-0 bg-black/20"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $title }}</h1>
      <p class="text-xl md:text-2xl text-emerald-100 max-w-3xl mx-auto">
        Temui tim penulis berbakat yang menghadirkan konten berkualitas untuk komunitas SMA Hogwarts
      </p>
    </div>
  </div>
</section>

<!-- Breadcrumb Navigation -->
<nav class="bg-white shadow-sm border-b">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <ol class="flex items-center space-x-2 text-sm text-gray-600">
      <li>
        <a href="{{ route('home') }}" class="hover:text-emerald-600 transition-colors">
          <svg class="w-4 h-4 mr-1 inline" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
          </svg>
          Beranda
        </a>
      </li>
      <li>
        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
      </li>
      <li>
        <a href="{{ route('article') }}" class="hover:text-emerald-600 transition-colors">Artikel</a>
      </li>
      <li>
        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
      </li>
      <li class="text-gray-900 font-medium">Penulis</li>
    </ol>
  </div>
</nav>

<!-- Main Content -->
<main class="bg-gray-50 min-h-screen py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    @if($authors->count() > 0)
      <!-- Authors Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($authors as $author)
          <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <!-- Author Profile -->
            <div class="relative p-8 text-center">
              <!-- Avatar -->
              <div class="relative mx-auto mb-6">
                <div class="w-24 h-24 rounded-full overflow-hidden ring-4 ring-emerald-100 group-hover:ring-emerald-200 transition-all duration-300 mx-auto">
                  @if($author->avatar)
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $author->avatar) }}" alt="{{ $author->name }}">
                  @else
                    <div class="w-full h-full bg-gradient-to-br from-emerald-100 to-teal-100 flex items-center justify-center">
                      <span class="text-2xl font-bold text-emerald-600">
                        {{ substr($author->name, 0, length: 1) }}
                      </span>
                    </div>
                  @endif
                </div>
                
                <!-- Online Indicator -->
                <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-400 rounded-full border-3 border-white shadow-sm"></div>
              </div>
              
              <!-- Author Info -->
              <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors">
                {{ $author->name }}
              </h3>
              
              <div class="flex items-center justify-center gap-2 mb-4">
                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-sm font-medium text-gray-600">
                  {{ $author->articles_count ?? 0 }} Artikel
                </span>
              </div>
              
              @if($author->bio)
                <p class="text-gray-600 text-sm mb-6 line-clamp-3">
                  {{ $author->bio }}
                </p>
              @else
                <p class="text-gray-400 text-sm mb-6 italic">
                  Belum ada bio tersedia
                </p>
              @endif
              
              <!-- Action Button -->
              <a 
                href="{{ route('article.author', $author) }}" 
                class="inline-flex items-center justify-center w-full px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg transition-all duration-300 group-hover:translate-y-[-2px] group-hover:shadow-lg"
              >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                Lihat Artikel
              </a>
            </div>
            
            <!-- Stats Footer -->
            <div class="px-8 py-4 bg-gray-50 border-t">
              <div class="flex items-center justify-between text-sm text-gray-500">
                <span>Bergabung</span>
                <span class="font-medium">{{ $author->created_at->format('M Y') }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      
      <!-- Pagination -->
      @if($authors->hasPages())
        <div class="mt-12 flex justify-center">
          <div class="bg-white rounded-lg shadow-sm p-2">
            {{ $authors->links() }}
          </div>
        </div>
      @endif
      
    @else
      <!-- Empty State -->
      <div class="text-center py-16">
        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Penulis</h3>
        <p class="text-gray-600 max-w-md mx-auto">
          Saat ini belum ada penulis yang terdaftar. Silakan kembali lagi nanti untuk melihat profil penulis terbaru.
        </p>
      </div>
    @endif
  </div>
</main>

<!-- Custom Styles -->
<style>
  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  .border-3 {
    border-width: 3px;
  }
</style>
@endsection