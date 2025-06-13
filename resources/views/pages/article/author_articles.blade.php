@extends('layouts.default')

@section('main')
<!-- Hero Section with Author Info -->
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-700 text-white py-20 pt-30">
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <!-- Author Avatar -->
      <div class="relative">
        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden ring-4 ring-white/20 shadow-2xl">
          @if($author->avatar)
            <img class="w-full h-full object-cover" src="{{ asset('storage/' . $author->avatar) }}" alt="{{ $author->name }}">
          @else
            <div class="w-full h-full bg-white/10 backdrop-blur-sm flex items-center justify-center">
              <span class="text-6xl font-bold text-white/80">
                {{ substr($author->name, 0, 1) }}
              </span>
            </div>
          @endif
        </div>
      </div>
      
      <!-- Author Details -->
      <div class="text-center md:text-left flex-1">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $author->name }}</h1>
        @if($author->bio)
          <p class="text-xl text-blue-100 mb-6 max-w-2xl">{{ $author->bio }}</p>
        @endif
        
        <!-- Social Links -->
        @if($author->twitter || $author->linkedin || $author->website)
          <div class="flex justify-center md:justify-start items-center gap-4">
            @if($author->twitter)
              <a href="{{ $author->twitter }}" target="_blank" 
                 class="inline-flex items-center justify-center w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
            @endif
            
            @if($author->linkedin)
              <a href="{{ $author->linkedin }}" target="_blank" 
                 class="inline-flex items-center justify-center w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            @endif
            
            @if($author->website)
              <a href="{{ $author->website }}" target="_blank" 
                 class="inline-flex items-center justify-center w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                </svg>
              </a>
            @endif
          </div>
        @endif
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumb Navigation -->
<nav class="bg-white shadow-sm border-b">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <ol class="flex items-center space-x-2 text-sm">
      <li>
        <a href="{{ route('home') }}" class="text-gray-500 hover:text-indigo-600 transition-colors flex items-center">
          <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
          </svg>
          Beranda
        </a>
      </li>
      <li><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg></li>
      <li><a href="{{ route('article') }}" class="text-gray-500 hover:text-indigo-600 transition-colors">Artikel</a></li>
      <li><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg></li>
      <li><a href="{{ route('article.authors') }}" class="text-gray-500 hover:text-indigo-600 transition-colors">Penulis</a></li>
      <li><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg></li>
      <li class="text-gray-900 font-medium">{{ $author->name }}</li>
    </ol>
  </div>
</nav>

<!-- Articles Section -->
<main class="bg-gray-50 min-h-screen py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Header -->
    <div class="mb-8">
      <h2 class="text-3xl font-bold text-gray-900 mb-2">Artikel oleh {{ $author->name }}</h2>
      <p class="text-gray-600">Menampilkan {{ $articles->total() }} artikel</p>
    </div>

    @if($articles->count() > 0)
      <!-- Articles Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
          <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <!-- Article Image -->
            <div class="relative h-48 overflow-hidden">
              @if($article->image)
                <img 
                  src="{{ asset('storage/' . $article->image) }}" 
                  alt="{{ $article->title }}"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                />
              @else
                <div class="w-full h-full bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center">
                  <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                </div>
              @endif
              
              <!-- Category Badge -->
              @if($article->category)
                <div class="absolute top-4 left-4">
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-600 text-white shadow-sm">
                    {{ $article->category->title }}
                  </span>
                </div>
              @endif
            </div>
            
            <!-- Article Content -->
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2">
                <a href="{{ route('article.detail', $article) }}" class="hover:underline">
                  {{ $article->title }}
                </a>
              </h3>
              
              <p class="text-gray-600 mb-4 line-clamp-3">
                {{ Str::limit(strip_tags($article->content), 120) }}
              </p>
              
              <!-- Article Meta -->
              <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                <div class="flex items-center text-sm text-gray-500">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  {{ $article->created_at->format('d M Y') }}
                </div>
                
                <a 
                  href="{{ route('article.detail', $article) }}" 
                  class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium text-sm group-hover:translate-x-1 transition-all"
                >
                  Baca selengkapnya
                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
          </article>
        @endforeach
      </div>
      
      <!-- Pagination -->
      @if($articles->hasPages())
        <div class="mt-12 flex justify-center">
          <div class="bg-white rounded-lg shadow-sm p-2">
            {{ $articles->links() }}
          </div>
        </div>
      @endif
      
    @else
      <!-- Empty State -->
      <div class="text-center py-16">
        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Artikel</h3>
        <p class="text-gray-600 max-w-md mx-auto">
          {{ $author->name }} belum menerbitkan artikel. Silakan kembali lagi nanti untuk membaca artikel terbaru.
        </p>
      </div>
    @endif
  </div>
</main>

<!-- Custom Styles -->
<style>
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>
@endsection