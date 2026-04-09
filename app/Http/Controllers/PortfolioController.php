<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Documentation;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio index.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        $articles = Article::latest()->get();
        $galleries = Gallery::latest()->get();
        $documentations = Documentation::latest()->get();
        
        return view('portfolio', compact('projects', 'articles', 'galleries', 'documentations'));
    }

    /**
     * Display portfolio articles/case studies.
     */
    public function articles()
    {
        $articles = Article::latest()->get();
        return view('portfolio.articles', compact('articles'));
    }

    /**
     * Display a single article.
     */
    public function show(Article $article)
    {
        if ($article->type === 'link') {
            return redirect($article->external_url);
        }
        
        return view('portfolio.show', compact('article'));
    }

    /**
     * Display the creative gallery.
     */
    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('portfolio.gallery', compact('galleries'));
    }

    /**
     * Display technical documentation of projects.
     */
    public function documentation()
    {
        $documentations = Documentation::latest()->get();
        return view('portfolio.documentation', compact('documentations'));
    }
}
