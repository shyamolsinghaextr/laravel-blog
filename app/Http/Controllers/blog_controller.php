<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog_controller extends Controller
{
    public function home_view (){
        return view('frontend.Home', ['title' => 'Home page']);
    }

    public function articles_view(){
        return view('frontend.articles', ['title' => 'articles page']);
    }

    public function about_view(){
        return view('frontend.about', ['title' => 'about page']);
    }

    public function contact_view(){
        return view('frontend.contact', ['title' => 'contact page']);
    }
}

