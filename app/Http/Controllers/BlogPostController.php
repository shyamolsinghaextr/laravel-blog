<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function dashboard(){
        return view('backend.dashbord', ['title'=> 'dashbord']);
    }

    public function create_post(){
        return view('backend.createPost', ['title'=> 'Create Post']);
    }

    public function delete_post(){
        return view('backend.deletePost', ['title'=> 'Delete Post']);
    }

    public function edit_post(){
        return view('backend.editPost', ['title'=> 'Edit Post']);
    }
}
