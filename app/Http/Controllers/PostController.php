<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        $postsFromDB = Post::all(); //return collection object

        return view('posts.index' , ['posts' => $postsFromDB]);
    }
    function show($postId) {
        $singlepostFromDB = Post::find($postId);
        
        return view('posts.show' , ['post' => $singlepostFromDB]);
    }


    // Create and Store Methods--------
    function create() {
        
        
        return view('posts.create');
    }
    
    function store() {
        //step 1 -----> get data 
        $data = request()->all() ;


        return to_route('posts.index'); //step 3 ---> Redirct to posts.index
    }

    // Edit Method
    function edit () {

        return view('posts.edit');
    }
    function update() {
        
        $title = request()->title ;
        $discrption = request()->discrption;
        $content = request()->content ; 
        $postBy = request()->postBy ; 


        return to_route('posts.show' , $postBy);
    }

    //Delete Method

    function destroy() {
        return "Stay Safe";
    }
}
