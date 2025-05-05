<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog_controller extends Controller
{
    public function home_view (){
        return view('Home', ['title' => 'Home page']);
    }

    public function articles_view(){
        return view('articles', ['title' => 'articles page']);
    }

    public function about_view(){
        return view('about', ['title' => 'about page']);
    }

    public function contact_view(){
        return view('contact', ['title' => 'contact page']);
    }
}

