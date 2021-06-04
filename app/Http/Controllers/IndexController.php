<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function struktur()
    {
        return view('struktur');
    }

    public function blog()
    {
        $post = Post::all();

        return view('blog', compact('post'));
    }
    
    public function detail($id)
    {
        $post = Post::findOrFail($id);

        return view('detail', compact('post'));
    }
    
    public function postnewblog()
    {
        $post = Post::all();

        return view('postnewblog', compact('post'));
    }
}
