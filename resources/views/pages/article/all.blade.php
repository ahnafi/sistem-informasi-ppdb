@extends('layouts.default')

@section('main') 
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ $title }}</h2>
  </div>
  <!-- End Title -->

  <!-- Breadcrumb -->
  <div class="flex mb-8">
    <ol class="flex items-center overflow-hidden">
      <li class="inline-flex items-center">
        <a href="{{ route('home') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 py-2 px-3 rounded-l-md">
          Home
        </a>
      </li>
      <li class="inline-flex items-center">
        <svg class="size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
        <a href="{{ route('article') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 py-2 px-3">
          Artikel
        </a>
      </li>
      <li class="inline-flex items-center">
        <svg class="size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
        <span class="text-sm font-semibold text-gray-800 py-2 px-3 rounded-r-md" aria-current="page">
          Semua Artikel
        </span>
      </li>
    </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($articles as $article)
      <!-- Card -->
      <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]" href="{{ route('article.detail', $article) }}">
        <div class="aspect-w-16 aspect-h-11 mb-4">
          @if($article->image)
            <img class="w-full h-40 object-cover rounded-xl" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
          @else
            <div class="w-full h-40 bg-gray-200 rounded-xl flex items-center justify-center dark:bg-gray-800">
              <svg class="w-10 h-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
          @endif
        </div>
        
        <div class="my-4">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
            {{ $article->title }}
          </h3>
          <p class="mt-3 text-gray-600 dark:text-gray-400">
            {{ Str::limit(strip_tags($article->content), 100) }}
          </p>
        </div>
        
        <div class="mt-auto flex items-center gap-x-3">
          <span class="text-sm text-gray-500">
            {{ $article->created_at->format('d M Y') }}
          </span>
          <span class="text-sm text-gray-500">|</span>
          <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
            {{ $article->category->name ?? 'Uncategorized' }}
          </span>
        </div>
      </a>
      <!-- End Card -->
    @endforeach
  </div>
  <!-- End Grid -->

  <!-- Pagination -->
  <div class="mt-12 flex justify-center">
    @if ($articles->hasPages())
      <nav class="flex items-center gap-x-1" aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($articles->onFirstPage())
          <button type="button" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" disabled aria-label="Previous">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 18-6-6 6-6"></path>
            </svg>
            <span class="hidden sm:block">Previous</span>
          </button>
        @else
          <a href="{{ $articles->previousPageUrl() }}" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" aria-label="Previous">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 18-6-6 6-6"></path>
            </svg>
            <span class="hidden sm:block">Previous</span>
          </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
          @if ($page == $articles->currentPage())
            <button type="button" class="min-h-9.5 min-w-9.5 flex justify-center items-center bg-gray-200 text-gray-800 border border-gray-200 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-hidden focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none" aria-current="page">{{ $page }}</button>
          @else
            <a href="{{ $url }}" class="min-h-9.5 min-w-9.5 flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-hidden focus:bg-gray-100">{{ $page }}</a>
          @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($articles->hasMorePages())
          <a href="{{ $articles->nextPageUrl() }}" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" aria-label="Next">
            <span class="hidden sm:block">Next</span>
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
        @else
          <button type="button" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" disabled aria-label="Next">
            <span class="hidden sm:block">Next</span>
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </button>
        @endif
      </nav>
    @endif
  </div>
  <!-- End Pagination -->
</div>
@endsection