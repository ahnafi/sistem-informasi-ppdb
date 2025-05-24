@extends("layouts.default")
@section("title","Artikel & Berita")

@section("main")
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white overflow-hidden">
  <div class="absolute inset-0 bg-black/20"></div>
  <div class="absolute inset-0">
    <svg class="absolute bottom-0 left-0 text-white/10" width="404" height="404" fill="currentColor" viewBox="0 0 404 404">
      <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-white/5" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg>
  </div>
  
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-6xl font-bold mb-6">
        Artikel & Berita
        <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Terkini</span>
      </h1>
      <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
        Dapatkan informasi terbaru seputar pendidikan dan kegiatan SMA Hogwarts
      </p>
    </div>
    
    <!-- Enhanced Search Bar -->
    <div class="max-w-3xl mx-auto">
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20">
        <form action="{{ route('article.search') }}" method="GET" class="space-y-4 md:space-y-0 md:flex md:gap-4">
          <div class="flex-1">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <svg class="w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
              </div>
              <input 
                type="text" 
                name="s" 
                class="w-full pl-12 pr-4 py-4 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent" 
                placeholder="Cari artikel yang menarik..." 
                value="{{ request('s') }}"
              >
            </div>
          </div>
          
          <div class="md:w-56">
            <select 
              name="kategori" 
              class="w-full py-4 px-4 bg-white/20 border border-white/30 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
            >
              <option value="" class="text-gray-900">Semua Kategori</option>
              @foreach($categories as $cat)
                <option value="{{ $cat->slug }}" class="text-gray-900" {{ request('kategori') == $cat->slug ? 'selected' : '' }}>
                  {{ $cat->name ?? $cat->title }}
                </option>
              @endforeach
            </select>
          </div>
          
          <button 
            type="submit" 
            class="w-full md:w-auto px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-gray-900 font-semibold rounded-xl transition-all duration-300 transform hover:scale-105"
          >
            Cari Artikel
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Featured News Section -->
@if(count($news) > 0)
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row justify-between items-center mb-12">
      <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Berita Terbaru</h2>
        <p class="text-gray-600">Informasi terkini yang perlu Anda ketahui</p>
      </div>
      <a href="{{ route('articles.all') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all">
        Lihat Semua
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </a>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Hero Article -->
      @php $heroArticle = $news->first(); @endphp
      <div class="lg:col-span-2">
        <a href="{{ route('article.detail', $heroArticle) }}" class="group block">
          <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden h-full">
            <div class="relative h-64 md:h-80 overflow-hidden">
              @if($heroArticle->thumbnail)
                <img src="{{ asset('storage/' . $heroArticle->thumbnail) }}" alt="{{ $heroArticle->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              @else
                <div class="w-full h-full bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center">
                  <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                </div>
              @endif
              
              @if($heroArticle->category)
                <div class="absolute top-4 left-4">
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-600 text-white shadow-sm">
                    {{ $heroArticle->category->name ?? $heroArticle->category->title }}
                  </span>
                </div>
              @endif
            </div>
            
            <div class="p-6">
              <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-600 mb-3 transition-colors">
                {{ $heroArticle->title }}
              </h3>
              <p class="text-gray-600 mb-4 line-clamp-3">
                {{ Str::limit(strip_tags($heroArticle->content), 180) }}
              </p>
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-500">{{ $heroArticle->created_at->format('d M Y') }}</span>
                <span class="inline-flex items-center text-blue-600 group-hover:translate-x-1 transition-transform">
                  Baca selengkapnya
                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </span>
              </div>
            </div>
          </article>
        </a>
      </div>
      
      <!-- Recent Articles -->
      <div class="space-y-4">
        @foreach($news->skip(1)->take(4) as $article)
          <a href="{{ route('article.detail', $article) }}" class="group block">
            <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 p-4">
              <div class="flex gap-4">
                <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                  @if($article->thumbnail)
                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                  @else
                    <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                      <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                      </svg>
                    </div>
                  @endif
                </div>
                
                <div class="flex-1 min-w-0">
                  <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 line-clamp-2 mb-2 transition-colors">
                    {{ $article->title }}
                  </h4>
                  <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">{{ $article->created_at->format('d M Y') }}</span>
                    @if($article->category)
                      <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        {{ $article->category->name ?? $article->category->title }}
                      </span>
                    @endif
                  </div>
                </div>
              </div>
            </article>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endif

<!-- Featured Articles -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Artikel Unggulan</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Kumpulan artikel pilihan yang wajib Anda baca untuk menambah wawasan</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach($featured as $article)
        <a href="{{ route('article.detail', $article) }}" class="group">
          <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
            <div class="relative h-48 overflow-hidden">
              @if($article->thumbnail)
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              @else
                <div class="w-full h-full bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center">
                  <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                </div>
              @endif
              
              @if($article->category)
                <div class="absolute top-3 left-3">
                  <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-indigo-600 text-white shadow-sm">
                    {{ $article->category->name ?? $article->category->title }}
                  </span>
                </div>
              @endif
            </div>
            
            <div class="p-6">
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 line-clamp-2 mb-3 transition-colors">
                {{ $article->title }}
              </h3>
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-500">{{ $article->created_at->format('d M Y') }}</span>
                <span class="inline-flex items-center text-indigo-600 group-hover:translate-x-1 transition-transform">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </span>
              </div>
            </div>
          </article>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- Authors Section -->
<section class="bg-gradient-to-br from-gray-50 to-blue-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row justify-between items-center mb-12">
      <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Tim Penulis Terbaik</h2>
        <p class="text-gray-600">Berkenalan dengan para penulis berbakat di balik artikel-artikel berkualitas</p>
      </div>
      <a href="{{ route('article.authors') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-all">
        Lihat Semua Penulis
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </a>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      @foreach($authors as $author)
        <a href="{{ route('article.author', ['author' => $author->id]) }}" class="group">
          <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 p-6 text-center border border-gray-100">
            <div class="w-20 h-20 mx-auto mb-4 rounded-full overflow-hidden ring-4 ring-indigo-100 group-hover:ring-indigo-200 transition-all">
              @if($author->avatar)
                <img src="{{ asset('storage/' . $author->avatar) }}" alt="{{ $author->name }}" class="w-full h-full object-cover">
              @else
                <div class="w-full h-full bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center">
                  <span class="text-2xl font-bold text-indigo-600">{{ substr($author->name, 0, 1) }}</span>
                </div>
              @endif
            </div>
            <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 mb-1 transition-colors">{{ $author->name }}</h3>
            <p class="text-sm text-gray-500">{{ $author->articles_count }} artikel</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- Categories Section -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Jelajahi Kategori</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Temukan artikel berdasarkan topik yang Anda minati</p>
    </div>
    
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
      @foreach($categories as $category)
        <a href="{{ route('article.search', ['kategori' => $category->slug]) }}" class="group">
          <div class="bg-gradient-to-br from-gray-50 to-blue-50 hover:from-blue-50 hover:to-indigo-50 rounded-2xl p-6 text-center transition-all duration-300 border border-gray-100 hover:border-blue-200 hover:shadow-lg">
            <div class="w-12 h-12 mx-auto mb-4 bg-blue-100 group-hover:bg-blue-200 rounded-xl flex items-center justify-center transition-colors">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
              </svg>
            </div>
            <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 mb-1 transition-colors">{{ $category->name ?? $category->title }}</h3>
            <p class="text-sm text-gray-500">{{ $category->articles_count ?? $category->articles->count() }} artikel</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

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
