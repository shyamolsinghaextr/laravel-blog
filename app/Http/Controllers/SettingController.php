<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
}
