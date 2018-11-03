<?php

namespace BinaryTorch\Blogged\Http\Controllers;

use BinaryTorch\Blogged\Models\Article;

class ArticleController extends Controller
{
    /**
     * Show the blog home page.
     */
    public function index()
    {
        $pagination = config('blogged.settings.pagination');

        $articles = Article::paginate($pagination);

        return response()->json(['data' => $articles]);
    }
}