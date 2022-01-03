<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'title a',
        'title b',
        'title c',
        'title d',
    ];

    public function index () 
    {
        return view('index')
            ->with(['posts' => $this->posts]);
    }

    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
