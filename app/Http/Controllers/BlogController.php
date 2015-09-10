<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class BlogController extends Controller
{
    
    // public function category($category,$subcategory)
    // {
    // 	return view('blog.category')
    // 	->with('category',$category)
    // 	->with('subcategory',$subcategory);
    // }
    public function category($category='')
    {
    	$category = $category ==''? 'php' :$category;
    	return view('blog.category')->with('category',$category);
    }
}
