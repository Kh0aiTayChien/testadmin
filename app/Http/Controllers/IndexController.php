<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $news = Article::simplePaginate(2);
        return view('pages/index', compact('news'));
    }
}
