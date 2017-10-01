<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;


class CategoryController extends Controller
{
    public function manageCategory() {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id','path','parent_id','level')->all();

        return view('categoryTreeview',compact('categories','allCategories'));
    }
}
