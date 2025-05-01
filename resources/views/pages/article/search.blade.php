@extends("layouts.default")
@section("title","Hasil Pencarian")

@section("main")

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Search Results Header -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Hasil Pencarian</h2>
        
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 mb-5">
            @if($query)
                <div class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-100 text-blue-800 mb-2">
                    <span>Kata kunci:</span>
                    <span class="font-semibold">"{{ $query }}"</span>
                </div>
            @endif
            
            @if($category)
                <div class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-violet-100 text-violet-800 mb-2 ml-2">
                    <span>Kategori:</span>
                    <span class="font-semibold">{{ $category }}</span>
                </div>
            @endif
            
            <p class="text-sm text-gray-500 mt-2">Ditemukan {{ $articles->total() }} artikel</p>
        </div>
    </div>

    @if($articles->count() > 0)
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($articles as $article)
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition">
                    <div class="p-4 md:p-6">
                        <a href="{{ route('article.detail', $article->slug) }}" class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                            {{ $article->title }}
                        </a>
                        <div class="flex items-center gap-3 mt-3">
                            <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $article->category->name }}
                            </span>
                            <span class="text-xs text-gray-500">
                                {{ $article->created_at->format('d M Y') }}
                            </span>
                        </div>
                        <p class="mt-3 text-gray-600">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>
                    </div>
                    <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                        <a href="{{ route('article.detail', $article->slug) }}" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                            Baca selengkapnya
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-10 flex justify-center">
            <nav class="flex items-center gap-x-1">
                {{ $articles->appends(['s' => $query, 'kategori' => $category])->links() }}
            </nav>
        </div>
    @else
        <div class="bg-yellow-50 border border-yellow-200 rounded-md p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-yellow-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">
                        Tidak ada hasil
                    </h3>
                    <div class="mt-1 text-sm text-yellow-700">
                        <p>Tidak ada hasil yang ditemukan. Silakan coba dengan kata kunci lain.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6 text-center">
            <a href="{{ route('article.index') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
                Kembali ke daftar artikel
            </a>
        </div>
    @endif
</div>

@endsection
