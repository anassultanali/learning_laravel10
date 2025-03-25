<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    function index() {
        $postsFromDB = Post::all(); //return collection object

        return view('posts.index' , ['posts' => $postsFromDB]);
    }
    function show(Post $post) {
        // $singlepostFromDB = Post::find($postId);
        

        // if(is_null($singlepostFromDB)){
        //     to_route('posts.index');
        // }
        

        return view('posts.show' , ['post' => $post]);
    }


    // Create and Store Methods--------
    function create() {

        $users = User::all();
        
        
        return view('posts.create' , ['users' => $users ]);
    }
    
    function store() {
        //step 1 -----> get data 
        $title = request()->title;
        $description = request()->description;
        $content = request()->content ;

// ------------------------------------------- 1
        // create obj of the model
        // $post = new Post ;

        // $post->title = $title ;
        // $post->description = $description;
        // $post->content = $content ;
        
        // insert the data to the DB
        // $post->save();


// -------------------------------------------2

        Post::create([
            'title' => $title,
            'description' => $description,
            'content' => $content
        ]);

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
