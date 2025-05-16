<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class SettingController extends Controller
{
    public function settings(){
        return view('backend.setting', ['title'=> 'Settings']);
    }

    public function category_list(){

        $all_category = Category::all();
        return $all_category;
    }

    public function create_category(){

        
    }

    public function db_test(){
        return Category::all();
    }


    public function category_create(Request $request){
        $category_name = $request->name;
        $slug = $request->slug;
        $description = $request->description;
        $category_create = new Category;
        $category_create->name = $category_name;
        $category_create->slug = $slug;
        $category_create->description = $description;
        $category_create->save();
        return redirect()->route('dashboard');
    }
}
