@extends("layouts.default")
@section("title","Selamat datang")

@section("main")


  

  <!-- Hero Banner dengan Gradasi -->
  <div class="w-full bg-gradient-to-b from-blue-50 to-white py-8">
    <div class="flex flex-col px-4 md:px-10 lg:px-14 mt-10">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl">
          <p>Berita Terbaru</p>
        </div>
        <a href="{{ route('articles.all') }}" class="bg-primary px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit hover:bg-blue-700 transition">
          Lihat Semua
        </a>
      </div>
      <!-- Search Bar -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 mb-8">
        <form action="{{ route('article.search') }}" method="GET" class="grid gap-4 sm:flex sm:items-end">
          <div class="flex-grow">
            <label for="search-input" class="block text-sm font-medium mb-2 text-gray-700">Kata Kunci</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1-11 0z"/>
                </svg>
              </div>
              <input type="text" id="search-input" name="s" class="py-3 px-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Cari artikel..." value="{{ request('s') }}">
            </div>
          </div>
          
          <div class="sm:w-48">
            <label for="kategori" class="block text-sm font-medium mb-2 text-gray-700">Kategori</label>
            <div class="relative">
              <select id="kategori" name="kategori" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="">Semua Kategori</option>
                @foreach($categories as $cat)
                  <option value="{{ $cat->slug }}" {{ request('kategori') == $cat->slug ? 'selected' : '' }}>
                    {{ $cat->name ?? $cat->title }}
                  </option>
                @endforeach
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
              </div>
            </div>
          </div>
          
          <button type="submit" class="py-3 px-6 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all sm:mt-0">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1-11 0z"/>
            </svg>
            Cari
          </button>
        </form>
      </div>
      
      @if(count($news) > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5">
          <!-- Featured Article (artikel pertama dengan ukuran lebih besar) -->
          @php $heroArticle = $news->first(); @endphp
          <div class="md:col-span-2">
            <a href="{{ route('article.detail', $heroArticle) }}" class="hover:cursor-pointer">
              <div class="border border-slate-200 rounded-xl hover:border-primary hover:shadow-lg transition duration-300 ease-in-out bg-white h-full">
                <div class="relative pb-[30%]">
                  @if($heroArticle->category)
                    <div class="bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-full w-fit px-4 py-1 font-normal ml-3 mt-3 absolute text-sm z-10">
                      {{ $heroArticle->category->name }}
                    </div>
                  @endif
                  
                  @if($heroArticle->thumbnail)
                    <img src="{{ asset('storage/' . $heroArticle->thumbnail) }}" 
                         alt="{{ $heroArticle->title }}" 
                         class="absolute inset-0 w-full h-full object-cover rounded-t-xl">
                  @else
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-100 to-blue-50 rounded-t-xl flex items-center justify-center">No Image</div>
                  @endif
                </div>
                
                <div class="p-5">
                  <p class="font-bold text-xl mb-2">{{ $heroArticle->title }}</p>
                  <p class="text-slate-500 text-sm line-clamp-3 mb-2">
                    {{ Str::limit(strip_tags($heroArticle->content), 150) }}
                  </p>
                  <p class="text-slate-400">{{ $heroArticle->created_at->format('d F Y') }}</p>
                </div>
              </div>
            </a>
          </div>
          
          <!-- Berita Memanjang -->
          <div class="md:col-span-1">
            <div class="flex flex-col gap-3">
              @foreach($news->skip(1)->take(4) as $article)
                <a href="{{ route('article.detail', $article) }}" class="hover:cursor-pointer">
                  <div class="border border-slate-200 rounded-xl hover:border-primary hover:shadow-lg transition duration-300 ease-in-out bg-white">
                    <div class="flex flex-row p-3 items-center">
                      <div class="relative w-24 h-24 flex-shrink-0">
                        @if($article->thumbnail)
                          <img src="{{ asset('storage/' . $article->thumbnail) }}" 
                               alt="{{ $article->title }}" 
                               class="w-full h-full object-cover rounded-lg">
                          @if($article->category)
                            <div class="bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-full w-fit px-2 py-0.5 absolute -bottom-1 left-1 text-xs">
                              {{ $article->category->name }}
                            </div>
                          @endif
                        @else
                          <div class="w-full h-full bg-gradient-to-r from-blue-100 to-blue-50 rounded-lg flex items-center justify-center">No</div>
                        @endif
                      </div>
                      
                      <div class="pl-3 flex-1">
                        <p class="font-bold text-sm mb-1 line-clamp-2">{{ $article->title }}</p>
                        <p class="text-slate-400 text-xs">{{ $article->created_at->format('d M Y') }}</p>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
          </div>
        </div>
      @else
        <div class="text-center py-8 text-gray-500">
          Belum ada berita terbaru.
        </div>
      @endif
    </div>
  </div>

  <!-- Berita Unggulan -->
  <div class="w-full bg-gradient-to-b from-white to-blue-50 py-10">
    <div class="flex flex-col px-4 md:px-10 lg:px-14">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Berita Unggulan Untuk Kamu</p>
        </div>
        <a href="{{ route('articles.all') }}"
          class="bg-gradient-to-r from-blue-600 to-blue-500 px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit hover:from-blue-700 hover:to-blue-600 transition">
          Lihat Semua
        </a>
      </div>
      <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
        @foreach($featured as $article)
          <a href="{{ route('article.detail', $article) }}">
            <div class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:shadow-lg transition duration-300 ease-in-out bg-white">
              @if($article->category)
                <div class="bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
                  {{ $article->category->name }}
                </div>
              @endif
              
              @if($article->thumbnail)
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full rounded-xl mb-3 h-48 object-cover">
              @else
                <div class="w-full h-48 bg-gradient-to-r from-blue-100 to-blue-50 rounded-xl mb-3 flex items-center justify-center">No Image</div>
              @endif
              
              <p class="font-bold text-base mb-1">{{ $article->title }}</p>
              <p class="text-slate-400">{{ $article->created_at->format('d F Y') }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Author Section -->
  <div class="w-full bg-gradient-to-b from-blue-50 to-white py-10">
    <div class="flex flex-col px-4 md:px-10 lg:px-14">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Kenali Author Terbaik Kami</p>
        </div>
        <a href="{{ route('article.authors') }}" class="bg-gradient-to-r from-blue-600 to-blue-500 px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit hover:from-blue-700 hover:to-blue-600 transition">
          Lihat Semua Penulis
        </a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($authors as $author)
        <a href="{{ route('article.author', ['author' => $author->id]) }}">
          <div class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:shadow-md transition duration-300 ease-in-out bg-white">
            @if($author->avatar)
              <img src="{{ asset('storage/' . $author->avatar) }}" alt="{{ $author->name }}" class="rounded-full w-24 h-24 object-cover border-4 border-blue-100">
            @else
              <div class="rounded-full w-24 h-24 bg-gradient-to-r from-blue-200 to-blue-100 flex items-center justify-center text-blue-600 font-bold border-4 border-blue-50">
                {{ substr($author->name, 0, 1) }}
              </div>
            @endif
            <p class="font-bold text-xl mt-4">{{ $author->name }}</p>
            <p class="text-slate-400">{{ $author->articles_count }} Artikel</p>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Article Categories -->
  <div class="w-full bg-gradient-to-b from-white to-blue-50 py-10">
    <div class="flex flex-col px-4 md:px-10 lg:px-14">
      <div class="font-bold text-2xl mb-6">
        <p>Kategori</p>
      </div>
      
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        @foreach($categories as $category)
          <a href="{{ route('article.search', ['kategori' => $category->slug]) }}" 
            class="border border-slate-200 rounded-xl p-4 hover:border-primary hover:shadow-lg transition duration-300 ease-in-out bg-white">
            <div class="flex flex-col items-center text-center">
              <div class="bg-blue-100 rounded-full p-3 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
              </div>
              <p class="font-bold text-base">{{ $category->name ?? $category->title }}</p>
              <p class="text-slate-500 text-sm mt-1">{{ $category->articles_count ?? $category->articles->count() }} artikel</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
