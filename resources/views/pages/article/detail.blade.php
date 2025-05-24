@extends("layouts.default")
@section("title", $detail->title)

@section("main")
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-900 via-gray-800 to-gray-900 text-white">
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Breadcrumb -->
    <nav class="mb-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-300">
        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg></li>
        <li><a href="{{ route('article') }}" class="hover:text-white transition-colors">Artikel</a></li>
        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></li>
        <li class="text-white font-medium">{{ Str::limit($detail->title, 50) }}</li>
      </ol>
    </nav>
    
    <!-- Back Button -->
    <div class="mb-6">
      <a 
        href="{{ url('article') }}" 
        class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-lg transition-all duration-200 group"
      >
        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali
      </a>
    </div>
    
    <!-- Article Meta -->
    <div class="mb-8">
      @if($detail->category)
        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-600 text-white mb-4">
          {{ $detail->category->title }}
        </span>
      @endif
      
      <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">{{ $detail->title }}</h1>
      
      <div class="flex flex-wrap items-center gap-6 text-gray-300">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          <span>{{ $detail->created_at->format('d M Y') }}</span>
        </div>
        
        @if($detail->author)
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <span>{{ $detail->author->name }}</span>
          </div>
        @endif
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<main class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
      
      <!-- Article Content -->
      <article class="lg:col-span-3">
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
          <!-- Featured Image -->
          @if($detail->thumbnail)
            <div class="relative h-96 overflow-hidden">
              <img 
                src="{{ asset('storage/' . $detail->thumbnail) }}" 
                alt="{{ $detail->title }}"
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
          @endif
          
          <!-- Article Body -->
          <div class="p-8 lg:p-12">
            <div class="prose prose-lg max-w-none">
              {!! $detail->content !!}
            </div>
            
            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-gray-200">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Bagikan Artikel</h3>
              <div class="flex items-center gap-4">
                <button class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                  </svg>
                  Twitter
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 bg-blue-800 hover:bg-blue-900 text-white rounded-lg transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                  </svg>
                  Facebook
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                  </svg>
                  WhatsApp
                </button>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <!-- Sidebar -->
      <aside class="lg:col-span-1 space-y-8">
        <!-- Author Card -->
        @if($detail->author)
          <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Tentang Penulis</h3>
            <div class="text-center">
              <div class="w-20 h-20 mx-auto mb-4 rounded-full overflow-hidden">
                @if($detail->author->avatar)
                  <img src="{{ asset('storage/' . $detail->author->avatar) }}" alt="{{ $detail->author->name }}" class="w-full h-full object-cover">
                @else
                  <div class="w-full h-full bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center">
                    <span class="text-2xl font-bold text-blue-600">{{ substr($detail->author->name, 0, 1) }}</span>
                  </div>
                @endif
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">{{ $detail->author->name }}</h4>
              <p class="text-sm text-gray-600 mb-4">{{ $detail->author->bio ?? 'Penulis artikel di situs ini.' }}</p>
              <a href="{{ route('article.author', $detail->author) }}" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-700 text-sm font-medium">
                Lihat semua artikel
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </div>
        @endif
        
        <!-- Related Articles -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Artikel Terkait</h3>
          
          @php
            $relatedArticles = \App\Models\Article::where('category_id', $detail->category_id)
              ->where('id', '!=', $detail->id)
              ->latest()
              ->take(3)
              ->get();
          @endphp
          
          @if($relatedArticles->count() > 0)
            <div class="space-y-4">
              @foreach($relatedArticles as $related)
                <a href="{{ route('article.detail', $related) }}" class="group block">
                  <div class="flex gap-3 p-3 rounded-lg hover:bg-gray-50 transition-colors">
                    <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0">
                      @if($related->thumbnail)
                        <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" class="w-full h-full object-cover">
                      @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                          <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                          </svg>
                        </div>
                      @endif
                    </div>
                    <div class="flex-1 min-w-0">
                      <h4 class="text-sm font-medium text-gray-900 group-hover:text-blue-600 line-clamp-2 transition-colors">
                        {{ $related->title }}
                      </h4>
                      <p class="text-xs text-gray-500 mt-1">{{ $related->created_at->format('d M Y') }}</p>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          @else
            <p class="text-sm text-gray-500">Tidak ada artikel terkait.</p>
          @endif
        </div>
      </aside>
    </div>
    
    <!-- More Articles -->
    <section class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-8">Artikel Lainnya</h2>
      
      @php
        $moreArticles = \App\Models\Article::where('id', '!=', $detail->id)
            ->inRandomOrder()
            ->take(4)
            ->get();
      @endphp
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($moreArticles as $article)
          <a href="{{ route('article.detail', $article) }}" class="group">
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
              <div class="relative h-48 overflow-hidden">
                @if($article->thumbnail)
                  <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                @else
                  <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                  </div>
                @endif
                
                @if($article->category)
                  <div class="absolute top-3 left-3">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-600 text-white">
                      {{ $article->category->title }}
                    </span>
                  </div>
                @endif
              </div>
              
              <div class="p-4">
                <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 line-clamp-2 transition-colors mb-2">
                  {{ $article->title }}
                </h3>
                <p class="text-sm text-gray-500">{{ $article->created_at->format('d M Y') }}</p>
              </div>
            </article>
          </a>
        @endforeach
      </div>
    </section>
  </div>
</main>

<!-- Custom Styles -->
<style>
  .prose {
    --tw-prose-body: theme('colors.gray.700');
    --tw-prose-headings: theme('colors.gray.900');
    --tw-prose-lead: theme('colors.gray.600');
    --tw-prose-links: theme('colors.blue.600');
    --tw-prose-bold: theme('colors.gray.900');
    --tw-prose-counters: theme('colors.gray.500');
    --tw-prose-bullets: theme('colors.gray.300');
    --tw-prose-hr: theme('colors.gray.200');
    --tw-prose-quotes: theme('colors.gray.900');
    --tw-prose-quote-borders: theme('colors.gray.200');
    --tw-prose-captions: theme('colors.gray.500');
    --tw-prose-code: theme('colors.gray.900');
    --tw-prose-pre-code: theme('colors.gray.200');
    --tw-prose-pre-bg: theme('colors.gray.800');
    --tw-prose-th-borders: theme('colors.gray.300');
    --tw-prose-td-borders: theme('colors.gray.200');
  }

  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>
@endsection
