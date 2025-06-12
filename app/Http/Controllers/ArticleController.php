<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use Doctrine\DBAL\Query\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index()
    {
        $news = Article::query()->latest()->take(4)->get();
        $articles = Article::query()->paginate(10);
        $featured = Article::where('is_featured', 1)->limit(4)->get();
        $categories = Category::query()->withCount('articles')->limit(5)->get();
        $authors = Author::query()->withCount('articles')->limit(5)->get();

        // // Debug: Check if thumbnail files exist
        // foreach ($news as $article) {
        //     if ($article->thumbnail) {
        //         $filePath = storage_path('app/public/' . $article->thumbnail);
        //         if (!File::exists($filePath)) {
        //             Log::warning("Thumbnail file not found: {$filePath} for article: {$article->title}");
        //         }
        //     }
        // }

        return response()->view('pages.article.index', [
            'news' => $news,
            'articles' => $articles,
            'featured' => $featured,
            'categories' => $categories,
            'authors' => $authors
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('s');
        $category = $request->input('kategori');

        $articles = Article::with("category")
            ->where(function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                $query->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', 'like', "%{$category}%");
                });
            })
            ->paginate(10);

        return response()->view('pages.article.search', [
            'articles' => $articles,
            'query' => $search,
            'category' => $category
        ]);
    }

    public function detail(Article $article)
    {
        return response()->view('pages.article.detail', ["detail" => $article->load(["Category", "author"])]);
    }

    public function allArticles()
    {
        $allArticles = Article::query()->orderBy('created_at', 'desc')->paginate(15);
        
        return response()->view('pages.article.all', [
            'articles' => $allArticles,
            'title' => 'Semua Artikel'
        ]);
    }
    
    /**
     * Menampilkan semua author/penulis artikel
     *
     * @return \Illuminate\Http\Response
     */
    public function allAuthors()
    {
        $authors = Author::query()
            ->withCount('articles')
            ->orderByDesc('articles_count') // Urutkan berdasarkan jumlah artikel terbanyak
            ->paginate(12);
            
        return response()->view('pages.article.authors', [
            'authors' => $authors,
            'title' => 'Semua Penulis'
        ]);
    }
    
    /**
     * Menampilkan artikel berdasarkan author tertentu
     *
     * @param int|string $author
     * @return \Illuminate\Http\Response
     */
    public function authorArticles($author)
    {
        $authorModel = Author::findOrFail($author);
        
        $articles = Article::where('author_id', $author)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        return response()->view('pages.article.author_articles', [
            'author' => $authorModel,
            'articles' => $articles,
            'title' => "Artikel oleh {$authorModel->name}"
        ]);
    }
}