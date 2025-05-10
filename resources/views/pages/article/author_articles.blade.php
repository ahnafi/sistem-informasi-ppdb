@extends('layouts.default')

@section('main')
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Author Info -->
  <div class="max-w-2xl mx-auto mb-10">
    <div class="flex flex-col md:flex-row items-center gap-x-5">
      <div class="relative overflow-hidden rounded-full w-24 h-24 mb-4 md:mb-0">
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
      
      <div class="text-center md:text-left">
        <h1 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">{{ $author->name }}</h1>
        <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $author->bio }}</p>
        
        @if($author->twitter || $author->linkedin || $author->website)
        <div class="mt-3 flex justify-center md:justify-start items-center gap-x-3">
          @if($author->twitter)
          <a href="{{ $author->twitter }}" target="_blank" class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-full border border-gray-200 text-gray-500 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-blue-800/[.25] dark:hover:text-blue-400 dark:hover:border-blue-700">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
          </a>
          @endif
          
          @if($author->linkedin)
          <a href="{{ $author->linkedin }}" target="_blank" class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-full border border-gray-200 text-gray-500 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-blue-800/[.25] dark:hover:text-blue-400 dark:hover:border-blue-700">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>
          @endif
          
          @if($author->website)
          <a href="{{ $author->website }}" target="_blank" class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-full border border-gray-200 text-gray-500 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-blue-800/[.25] dark:hover:text-blue-400 dark:hover:border-blue-700">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
            </svg>
          </a>
          @endif
        </div>
        @endif
      </div>
    </div>
  </div>
  
  <!-- Breadcrumb -->
  <div class="flex mb-8">
    <ol class="flex items-center overflow-hidden">
      <li class="inline-flex items-center">
        <a href="{{ route('home') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600  py-2 px-3 rounded-l-md">
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
        <a href="{{ route('article.authors') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600  py-2 px-3">
          Penulis
        </a>
      </li>
      <li class="inline-flex items-center">
        <svg class="size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
        <span class="text-sm font-semibold text-gray-800 py-2 px-3 rounded-r-md" aria-current="page">
          {{ $author->name }}
        </span>
      </li>
    </ol>
  </div>
  <!-- End Breadcrumb -->

  <!-- Articles Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($articles as $article)
      <!-- Card -->
      <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]" href="{{ route('article.detail', $article) }}">
        <div class="aspect-w-16 aspect-h-11 mb-4">
          @if($article->image)
            <img class="w-full h-40 object-cover rounded-xl" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
          @else
            <div class="w-full h-40 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl flex items-center justify-center dark:from-blue-900 dark:to-purple-900">
              <svg class="w-10 h-10 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
          @if($article->category)
            <span class="text-sm text-gray-500">|</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
              {{ $article->category->name }}
            </span>
          @endif
        </div>
      </a>
      <!-- End Card -->
    @endforeach
  </div>
  <!-- End Articles Grid -->

  <!-- Pagination -->
  <div class="mt-12 flex justify-center">
    {{ $articles->links() }}
  </div>
  <!-- End Pagination -->
</div>
@endsection