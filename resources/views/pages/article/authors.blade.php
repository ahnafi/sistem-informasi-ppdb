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
        <a href="{{ route('article') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600  py-2 px-3">
          Artikel
        </a>
      </li>
      <li class="inline-flex items-center">
        <svg class="size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
        <span class="text-sm font-semibold text-gray-800 py-2 px-3 rounded-r-md" aria-current="page">
          Semua Penulis
        </span>
      </li>
    </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Authors Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($authors as $author)
      <!-- Author Card -->
      <div class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]">
        <div class="flex items-center gap-x-4">
          <div class="relative overflow-hidden rounded-full w-20 h-20">
            @if($author->avatar)
              <img class="w-full h-full object-cover" src="{{ asset('storage/' . $author->avatar) }}" alt="{{ $author->name }}">
            @else
              <div class="w-full h-full bg-blue-100 flex items-center justify-center dark:bg-blue-800">
                <span class="text-2xl font-bold text-blue-600 dark:text-blue-300">
                  {{ substr($author->name, 0, 1) }}
                </span>
              </div>
            @endif
          </div>
          
          <div>
            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300">
              {{ $author->name }}
            </h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">
              {{ $author->articles_count }} artikel
            </p>
          </div>
        </div>
        
        <div class="mt-4">
          <p class="text-gray-600 dark:text-gray-400">
            {{ Str::limit($author->bio, 120) ?? 'Tidak ada bio tersedia.' }}
          </p>
        </div>
        
        <div class="mt-5">
          <a href="{{ route('article.author', $author) }}" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
            Lihat Artikel
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
        </div>
      </div>
      <!-- End Author Card -->
    @endforeach
  </div>
  <!-- End Authors Grid -->

  <!-- Pagination -->
  <div class="mt-12 flex justify-center">
    {{ $authors->links() }}
  </div>
  <!-- End Pagination -->
</div>
@endsection