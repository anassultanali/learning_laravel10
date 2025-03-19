<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContorller extends Controller
{
    function test() {

        $allPosts = [
            ['id' => 1 , 'title' => 'php' , 'postBy' => 'ANAS', 'createdAt' => '2025-3-18'],
            ['id' => 2 , 'title' => 'JS' , 'postBy' => 'OSAMA', 'createdAt' => '2025-3-18'],
            ['id' => 3 , 'title' => 'CSS' , 'postBy' => 'AHMED', 'createdAt' => '2025-3-18'],
            ['id' => 4 , 'title' => 'HTML' , 'postBy' => 'YASSER', 'createdAt' => '2025-3-18']

        ];

        return view('test' , ['posts' => $allPosts]);
    }
}
