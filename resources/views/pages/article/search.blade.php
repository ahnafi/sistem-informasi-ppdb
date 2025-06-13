@extends("layouts.default")
@section("title","Hasil Pencarian")

@section("main")
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-violet-600 via-purple-600 to-indigo-700 text-white py-16 pt-30">
  <div class="absolute inset-0 bg-black/20"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h1 class="text-3xl md:text-5xl font-bold mb-4">Hasil Pencarian</h1>
      <p class="text-lg md:text-xl text-violet-100 max-w-2xl mx-auto">
        Temukan artikel yang Anda cari dari koleksi lengkap kami
      </p>
    </div>
  </div>
</section>

<!-- Search Summary -->
<section class="bg-white shadow-sm border-b py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Back Button -->
    <div class="mb-4">
      <a 
        href="{{ url('article') }}" 
        class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-all duration-200 group"
      >
        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali
      </a>
    </div>
    
    <div class="flex flex-wrap items-center gap-4">
      @if($query)
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-violet-100 rounded-full">
          <svg class="w-4 h-4 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
          <span class="text-sm font-medium text-violet-800">
            Kata kunci: <strong>"{{ $query }}"</strong>
          </span>
        </div>
      @endif
      
      @if($category)
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-100 rounded-full">
          <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
          </svg>
          <span class="text-sm font-medium text-indigo-800">
            Kategori: <strong>{{ $category }}</strong>
          </span>
        </div>
      @endif
      
      <div class="ml-auto text-sm text-gray-600 bg-gray-100 px-4 py-2 rounded-full">
        <strong>{{ $articles->total() }}</strong> artikel ditemukan
      </div>
    </div>
  </div>
</section>

<!-- Results Section -->
<main class="bg-gray-50 min-h-screen py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    @if($articles->count() > 0)
      <!-- Results Grid -->
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
                <div class="w-full h-full bg-gradient-to-br from-violet-100 to-purple-100 flex items-center justify-center">
                  <svg class="w-12 h-12 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                </div>
              @endif
              
              <!-- Category Badge -->
              <div class="absolute top-4 left-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-violet-600 text-white shadow-sm">
                  {{ $article->category?->title ?? 'Uncategorized' }}
                </span>
              </div>
              
              <!-- Search Match Indicator -->
              @if($query && stripos($article->title, $query) !== false)
                <div class="absolute top-4 right-4">
                  <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                  </div>
                </div>
              @endif
            </div>
            
            <!-- Article Content -->
            <div class="p-6">
              <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-violet-600 transition-colors line-clamp-2">
                <a href="{{ route('article.detail', $article) }}" class="hover:underline">
                  @if($query)
                    {!! preg_replace('/('.preg_quote($query, '/').')/i', '<span class="highlight">$1</span>', $article->title) !!}
                  @else
                    {{ $article->title }}
                  @endif
                </a>
              </h2>
              
              <p class="text-gray-600 mb-4 line-clamp-3">
                @if($query)
                  {!! preg_replace('/('.preg_quote($query, '/').')/i', '<span class="highlight">$1</span>', Str::limit(strip_tags($article->content), 120)) !!}
                @else
                  {{ Str::limit(strip_tags($article->content), 120) }}
                @endif
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
                  class="inline-flex items-center text-violet-600 hover:text-violet-800 font-medium text-sm group-hover:translate-x-1 transition-all"
                >
                  Baca artikel
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
            {{ $articles->appends(['s' => $query, 'kategori' => $category])->links() }}
          </div>
        </div>
      @endif
      
    @else
      <!-- Empty State -->
      <div class="text-center py-16">
        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Tidak Ada Hasil Ditemukan</h3>
        <p class="text-gray-600 max-w-md mx-auto mb-8">
          Maaf, kami tidak dapat menemukan artikel yang sesuai dengan pencarian Anda. 
          Coba gunakan kata kunci yang berbeda atau jelajahi kategori lainnya.
        </p>
        
        <!-- Search Suggestions -->
        <div class="bg-white rounded-xl p-6 max-w-md mx-auto shadow-sm">
          <h4 class="font-semibold text-gray-900 mb-4">Saran Pencarian:</h4>
          <ul class="text-sm text-gray-600 space-y-2 text-left">
            <li>• Gunakan kata kunci yang lebih umum</li>
            <li>• Periksa ejaan kata kunci</li>
            <li>• Coba gunakan sinonim atau kata serupa</li>
            <li>• Kurangi jumlah kata kunci</li>
          </ul>
        </div>
        
        <!-- Action Buttons -->
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
          <a 
            href="{{ route('article') }}" 
            class="inline-flex items-center justify-center px-6 py-3 bg-violet-600 hover:bg-violet-700 text-white font-medium rounded-lg transition-all"
          >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
            Lihat Semua Artikel
          </a>
          
          <a 
            href="{{ route('home') }}" 
            class="inline-flex items-center justify-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-all"
          >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            Kembali ke Beranda
          </a>
        </div>
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
  
  .highlight {
    background-color: #fef08a;
    font-weight: 600;
    padding: 0 2px;
    border-radius: 2px;
  }
</style>
@endsection
