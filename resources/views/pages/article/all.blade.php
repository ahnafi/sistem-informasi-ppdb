@extends('layouts.default')

@section('main')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-16">
  <div class="absolute inset-0 bg-black/20"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $title }}</h1>
      <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
        Temukan artikel terbaru dan informasi penting seputar pendidikan di SMA Hogwarts
      </p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <ol class="flex items-center space-x-2 text-sm text-gray-600">
      <li>
        <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">
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
        <a href="{{ route('article') }}" class="hover:text-blue-600 transition-colors">Artikel</a>
      </li>
      <li>
        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
      </li>
      <li class="text-gray-900 font-medium">Semua Artikel</li>
    </ol>
  </div>
</nav>

<!-- Main Content -->
<main class="bg-gray-50 min-h-screen py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    @if($articles->count() > 0)
      <!-- Articles Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
          <article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
            <!-- Article Image -->
            <div class="relative h-48 overflow-hidden">
              @if($article->image)
                <img 
                  src="{{ asset('storage/' . $article->image) }}" 
                  alt="{{ $article->title }}"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                />
              @else
                <div class="w-full h-full bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center">
                  <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                </div>
              @endif
              
              <!-- Category Badge -->
              <div class="absolute top-4 left-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-600 text-white shadow-sm">
                  {{ $article->category?->title ?? 'Uncategorized' }}
                </span>
              </div>
            </div>
            
            <!-- Article Content -->
            <div class="p-6">
              <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                <a href="{{ route('article.detail', $article) }}" class="hover:underline">
                  {{ $article->title }}
                </a>
              </h2>
              
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
                  class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm group-hover:translate-x-1 transition-all"
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
          Saat ini belum ada artikel yang tersedia. Silakan kembali lagi nanti untuk membaca artikel terbaru.
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