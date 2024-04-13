<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Visit;

class HomeController extends Controller
{
    public function index() {

        // $userInfo = '(' .date("d.m.Y h:s"). ') user IP: ' .$_SERVER['REMOTE_ADDR']; 

        $visit['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $visit['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

        Visit::create($visit);

        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('posts'));
    }
}
