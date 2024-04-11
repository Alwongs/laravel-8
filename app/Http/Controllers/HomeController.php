<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {

        $userInfo = '(' .date("d.m.Y h:s"). ') user IP: ' .$_SERVER['REMOTE_ADDR']; // to save in db

        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('posts'));
    }
}
