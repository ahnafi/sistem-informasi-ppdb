<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $news = Article::query()->latest()->take(4)->get();
        $articles = Article::query()->paginate(10);
        $featured = Article::where('is_featured', 1)->limit(4)->get();
        return response()->view('pages.article.index', [
            'news' => $news,
            'articles' => $articles,
            'featured' => $featured
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
        return response()->view('pages.article.detail', ["detail" => $article->load(["articleCategory", "user"])]);
    }
}
