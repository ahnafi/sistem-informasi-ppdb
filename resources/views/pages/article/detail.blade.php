@extends("layouts.default")
@section("title", $detail->title)

@section("main")
    <!-- Tambahkan CSS untuk styling list -->
    <style>
        .article-content ul {
            list-style-type: disc;
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .article-content ol {
            list-style-type: decimal;
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .article-content li {
            margin-bottom: 0.5rem;
        }
        
        .article-content figure {
            margin: 1.5rem 0;
        }
        
        .article-content figure img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        
        .article-content .attachment {
            display: block;
            margin: 1.5rem 0;
        }
        
        .article-content .attachment--preview {
            width: 100%;
        }
        
        .article-content .attachment__caption {
            display: block;
            font-size: 0.875rem;
            color: #6b7280;
            text-align: center;
            margin-top: 0.5rem;
        }
    </style>

    <!-- Detail Berita -->
  <div class="flex flex-col px-4 lg:px-14 mt-10">
    <div class="font-bold text-xl lg:text-2xl mb-6 text-center lg:text-left">
      <p>{{ $detail->title }}</p>
    </div>
    <div class="flex flex-col lg:flex-row w-full gap-10">
      <!-- Berita Utama -->
      <div class="lg:w-8/12">
        @if($detail->thumbnail)
          <img src="{{ asset('storage/' . $detail->thumbnail) }}" alt="{{ $detail->title }}" class="w-full max-h-96 rounded-xl object-cover">
        @else
          <div class="w-full h-64 bg-gray-200 rounded-xl flex items-center justify-center">No Image</div>
        @endif
        <p class="font-bold text-lg lg:text-xl mt-6">{{ $detail->title }}</p>
        <div class="article-content mt-6 text-base lg:text-xl leading-relaxed text-justify">
          {!! $detail->content !!}
        </div>
      </div>
      
      <!-- Berita Terbaru (bisa diisi dengan artikel terkait lain) -->
      <div class="lg:w-4/12 flex flex-col gap-10">
        <!-- Berita Terkait -->
        <div class="border border-slate-200 rounded-xl p-4">
          <p class="font-bold text-xl mb-4">Artikel Terkait</p>
          
          @php
            $relatedArticles = \App\Models\Article::where('category_id', $detail->category_id)
              ->where('id', '!=', $detail->id) // Exclude artikel saat ini
              ->latest()
              ->take(5)
              ->get();
          @endphp
          
          @if($relatedArticles->count() > 0)
            <div class="flex flex-col gap-4">
              @foreach($relatedArticles as $related)
                <a href="{{ url('/article/' . $related->slug) }}" class="hover:cursor-pointer">
                  <div class="flex flex-row gap-3 hover:bg-slate-50 p-2 rounded-lg transition">
                    @if($related->thumbnail)
                      <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" 
                        class="w-20 h-20 rounded-lg object-cover">
                    @else
                      <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center text-xs">No Image</div>
                    @endif
                    <div class="flex-1">
                      <p class="font-semibold text-sm line-clamp-2">{{ $related->title }}</p>
                      <p class="text-slate-500 text-xs mt-1">{{ $related->created_at->format('d M Y') }}</p>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          @else
            <p class="text-slate-500 text-sm">Tidak ada artikel terkait.</p>
          @endif
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Author Section -->
  <div class="flex flex-col gap-4 mb-10 p-4 lg:p-10 lg:px-14 w-full lg:w-2/3">
    <p class="font-semibold text-xl lg:text-2xl mb-2">Author</p>
    @if($detail->author)
      <a href="{{ url('/author/' . $detail->author->id) }}">
        <div class="flex flex-col lg:flex-row gap-4 items-center border border-slate-300 rounded-xl p-6 lg:p-8 hover:border-primary transition">
          @if($detail->author->avatar)
            <img src="{{ asset('storage/' . $detail->author->avatar) }}" alt="{{ $detail->author->name }}" class="rounded-full w-24 lg:w-28 border-2 border-primary">
          @else
            <img src="{{ asset('images/profile.png') }}" alt="{{ $detail->author->name }}" class="rounded-full w-24 lg:w-28 border-2 border-primary">
          @endif
          <div class="text-center lg:text-left">
            <p class="font-bold text-lg lg:text-xl">{{ $detail->author->name }}</p>
            <p class="text-sm lg:text-base leading-relaxed">
              {{ $detail->author->bio ?? 'Penulis artikel di situs ini.' }}
            </p>
          </div>
        </div>
      </a>
    @else
      <div class="border border-slate-300 rounded-xl p-6 lg:p-8">
        <p class="text-center">Informasi penulis tidak tersedia</p>
      </div>
    @endif
  </div>

  <!-- Random Articles Section -->
  <div class="flex flex-col px-4 lg:px-14 mb-14">
    <div class="font-bold text-xl lg:text-2xl mb-6">
      <p>Artikel Lainnya</p>
    </div>
    
    @php
      $randomArticles = \App\Models\Article::where('id', '!=', $detail->id)
          ->inRandomOrder()
          ->take(4)
          ->get();
    @endphp
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach($randomArticles as $article)
        <a href="{{ url('/article/' . $article->slug) }}" class="hover:cursor-pointer">
          <div class="border border-slate-200 p-3 rounded-xl hover:border-primary transition duration-300 ease-in-out h-full flex flex-col">
            @if($article->category)
              <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">
                {{ $article->category->name }}
              </div>
            @endif
            
            @if($article->thumbnail)
              <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full rounded-xl mb-3 h-48 object-cover">
            @else
              <div class="w-full h-48 bg-gray-200 rounded-xl mb-3 flex items-center justify-center">No Image</div>
            @endif
            
            <p class="font-bold text-base mb-1 line-clamp-2">{{ $article->title }}</p>
            <p class="text-slate-400 text-sm mt-auto">{{ $article->created_at->format('d F Y') }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>

@endsection
