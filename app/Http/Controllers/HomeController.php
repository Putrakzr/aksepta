<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the landing page with latest projects and articles.
     */
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        $articles = Article::latest()->take(3)->get();
        
        return view('welcome', compact('projects', 'articles'));
    }
}
