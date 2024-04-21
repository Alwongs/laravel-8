<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('pages/site/blog', compact('posts'));
    }

    public function show($id) {

        $post = Post::find($id);

        return view('pages/site/post', compact('post'));
    }
}
