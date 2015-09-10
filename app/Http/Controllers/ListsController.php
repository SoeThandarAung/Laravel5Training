<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class ListsController extends Controller
{
    
    public function getIndex(){
        return view('lists.index');
    }
    public function getCreate(){
        return view('lists.create');
    }
    public function postStore(){
        return view('lists.store');
    }
}
