<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //display a listing of the resource
    public function index()
    {
        //Récupération de tous les posts
        $posts = auth()->user()->posts()->get();
        //dd ($posts);
       return view('post',compact('posts'));
}
}