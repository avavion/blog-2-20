<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::query()->where('is_published', '=', true);

        // dd($request->all());

        if ($request->get('q')) {
            $query = $request->get('q');

            $articles = $articles->where('title', 'LIKE', "%{$query}%");
        }

        $articles = $articles->limit(3)->orderByDesc('created_at')->get();

        return view('index', [
            "articles" => $articles
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post()
    {
        return view('post');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signin()
    {
        return view('signin');
    }
}
