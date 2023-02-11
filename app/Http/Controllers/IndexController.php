<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
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
