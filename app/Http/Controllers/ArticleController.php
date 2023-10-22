<?php

namespace App\Http\Controllers;

use App\Articles\ArticlesRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(ArticlesRepository $repository)
    {
        $articles = $repository->search(request('q'));

        return view('articles.index', [
            'articles' => $articles,
        ]);
    }
}
