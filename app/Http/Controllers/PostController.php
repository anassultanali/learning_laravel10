<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {

        $allPosts = [
            ['id' => 1 , 'title' => 'php' , 'postBy' => 'ANAS', 'createdAt' => '2025-3-18'],
            ['id' => 2 , 'title' => 'JS' , 'postBy' => 'OSAMA', 'createdAt' => '2025-3-18'],
            ['id' => 3 , 'title' => 'CSS' , 'postBy' => 'AHMED', 'createdAt' => '2025-3-18'],
            ['id' => 4 , 'title' => 'HTML' , 'postBy' => 'YASSER', 'createdAt' => '2025-3-18']

        ];

        return view('posts.index' , ['posts' => $allPosts]);
    }
    function show($postId) {

        $singlepost = ['id' => 1 ,'postBy' => 'Anas Sultan','email'=>'ansasultan@gmail.com',
                       'title' => 'php' ,'description' => 'Stay Safe' ,'content' => 'hello' ,  'createdAt' => '2025-3-18'];

        return view('posts.show' , ['post' => $singlepost]);
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
}
